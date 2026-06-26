## Sistema de Gerenciamento de Inscrição - SETAS

Projeto legado em `Laravel 5.1` (PHP >= 5.6.4). Este README descreve como executar o sistema localmente com Docker, restaurar o banco de dados fornecido e resolver os problemas mais comuns encontrados durante a modernização do ambiente.

**Sumário**
- **Quickstart**: executar via Docker (recomendado)
- **Composer / dependências**: instalar `vendor/` antes de iniciar os containers
- **Restauração MySQL**: importar `sgs.sql` ou usar arquivos MyISAM
- **Acesso**: URLs para navegador e ferramentas de BD (DBeaver, CLI)
- **FAQ / Problemas conhecidos**: causas e correções rápidas

**Quickstart — Executar com Docker**

- Pré-requisitos: `docker` e `docker compose` instalados e com permissão para usar o daemon.
- A partir da raiz do projeto (onde está `docker/docker-compose.yml`):

```bash
# build e subir containers
cd docker
docker compose build --parallel
docker compose up -d

# ver status
docker compose ps
```

- Serviços expostos por padrão (conforme `docker/docker-compose.yml`):
	- Web (nginx + php-fpm): http://localhost:8080/
	- MySQL: host `127.0.0.1` porta `6306` (mapeado para porta `3306` no container)

**Composer / vendor**

- Este projeto é legado — o `vendor/` não é reconstruído automaticamente pelo container.
- Gere a pasta `vendor/` no host (recomendado) usando `composer:2` para compatibilidade com Packagist atual:

```bash
# a partir da raiz (diretório que contém src/)
docker run --rm -v "$PWD/src":/app -w /app composer:2 composer install --no-interaction --prefer-dist --optimize-autoloader --no-scripts
```

- Nota: alguns pacotes foram pinados (ex.: `symfony/polyfill-mbstring:1.19.*`) para compatibilidade com PHP 5.6.

**Restauração do banco `sgs`**

- Importar dump SQL (recomendado quando existir `sgs.sql`):

```bash
# criar DB (se necessário) e importar
cd docker
docker compose exec db mysql -u root -p'setas@123' -e "CREATE DATABASE IF NOT EXISTS sgs CHARACTER SET utf8 COLLATE utf8_general_ci;"
docker compose exec -T db sh -c 'mysql -u root -p"setas@123" sgs' < ../sgs-data/sgs.sql
```

- Verificações rápidas:
```bash
docker compose exec db mysql -u root -p'setas@123' -e "SHOW DATABASES;"
docker compose exec db mysql -u root -p'setas@123' -e "SHOW TABLES FROM sgs;"
docker compose exec db mysql -u root -p'setas@123' -e "SELECT COUNT(*) FROM sgs.users;"
docker compose exec db mysqlcheck -u root -p'setas@123' --databases sgs --check
```

- Restaurar a partir de arquivos MyISAM (`.frm/.MYD/.MYI`) (opção avançada):
	- Pare o container MySQL, copie os arquivos para o datadir do container (`/var/lib/mysql/sgs`), ajuste dono/perm (usuário mysql inside container) e reinicie. Risco: compatibilidade de versão MySQL. Preferir importação SQL quando possível.

**Acesso (fora do Docker)**

- Web: http://localhost:8080/
- MySQL (CLI or DBeaver):
	- Host: `127.0.0.1`
	- Porta: `6306`
	- Database: `sgs`
	- User: `edir` (ou `root`)
	- Password: `setas@123`
	- JDBC URL exemplo: `jdbc:mysql://127.0.0.1:6306/sgs?useSSL=false&serverTimezone=UTC&characterEncoding=UTF-8`

**Comandos úteis**

```bash
# ver logs
docker compose logs -f php-fpm
docker compose logs -f nginx
docker compose logs -f db

# entrar no container PHP
docker compose exec php-fpm sh

# executar artisan (após vendor existir)
docker compose exec php-fpm php /var/www/html/artisan migrate:status
```

**FAQ / Problemas conhecidos e soluções rápidas**

- Problema: `apt` falha ao buildar a imagem PHP (404 ou GPG)
	- Causa: imagem base `php:5.6` aponta para Debian Stretch cujo `Release` expirou.
	- Solução: o `Dockerfile` foi ajustado para usar `archive.debian.org` e `Acquire::Check-Valid-Until "false"` (já aplicado no repositório).

- Problema: erro de parse PHP vindo de `vendor/symfony/polyfill-mbstring/bootstrap72.php` (tipos/nulos do PHP 7)
	- Causa: versão do `symfony/polyfill-mbstring` incompatível com PHP 5.6.
	- Solução: pin `symfony/polyfill-mbstring:1.19.*` no `composer.json` e executar `composer update` (feito). Se ocorrer, rode:
		```bash
		docker run --rm -v "$PWD/src":/app -w /app composer:2 composer require symfony/polyfill-mbstring:1.19.* --no-interaction --no-scripts
		```

- Problema: `composer` falha por scripts que chamam `artisan` antes do `vendor` existir
	- Causa: scripts `post-install-cmd`/`pre-update-cmd` em projeto.
	- Solução: execute `composer install --no-scripts` para instalar dependências sem executar hooks, ou gere `vendor/` no host antes de subir containers.

- Problema: import de `sgs.sql` retorna `ERROR 1046: No database selected` ou falha em linhas específicas
	- Causa: dump sem `CREATE DATABASE`/`USE` ou comandos dependentes de modos SQL/charset.
	- Solução: criar a database primeiro (`CREATE DATABASE sgs`) e depois rodar `mysql sgs < sgs.sql` como mostrado acima.

- Problema: MySQL não inicia após copiar arquivos `.MYD/.MYI`
	- Causa: permissões/UID mismatch ou arquivos de sistema incompatíveis.
	- Solução: pare o container, copie os arquivos, ajuste dono para `mysql:mysql` (ou UID usado no container) e reinicie. Melhor usar dump SQL quando possível.

- Problema: erros de permissões de arquivo em `storage/` ou `bootstrap/cache`
	- Solução: dentro do container PHP (ou no host se volumes montados) execute:
		```bash
		chown -R www-data:www-data src/storage src/bootstrap/cache
		chmod -R 775 src/storage src/bootstrap/cache
		```

**Observações finais**

- Este projeto é legado — modernizações (PHP7+/Laravel upgrade) podem reduzir dor futura. As instruções acima focam em execução rápida com dependências mantidas para PHP 5.6.
- Se quiser, posso:
	- Gerar um arquivo `dbeaver` com a conexão pronta;
	- Adicionar um `Makefile` com os comandos mais usados (`make up`, `make vendor`, `make db-import`);
	- Automatizar a criação do `vendor` durante o build da imagem (bake vendor no image) — diga qual prefere.

----
Última atualização: instruções adaptadas ao ambiente local e problemas encontrados ao restaurar o banco `sgs`.

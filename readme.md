## Sistema de Gerenciamento de Inscrição - SETAS

Projeto legado em `Laravel 5.1` (PHP >= 5.6.4). Este README descreve como executar o sistema localmente com Docker, restaurar o banco de dados fornecido e resolver os problemas mais comuns encontrados durante a modernização do ambiente.

**Sumário**
- **Quickstart**: executar via Docker (recomendado)
- **Composer / dependências**: instalar `vendor/` antes de iniciar os containers
- **Restauração MySQL**: importar `sgs.sql` ou usar arquivos MyISAM
- **Acesso**: URLs para navegador e ferramentas de BD (DBeaver, CLI)
- **E-mail (Mailpit)**: envio de e-mails 100% local, sem Gmail nem rede externa
- **Páginas de erro e ações sem retorno**: 404/403/500 e tratamento de ações vazias
- **Certificado (frente/verso)**: dados reais do curso e conteúdo programático no verso
- **Busca dinâmica nas listagens**: filtro em tempo real em todas as telas de listagem
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
	- Mailpit (webmail de desenvolvimento): http://localhost:8025/ (SMTP `1025` disponível apenas na rede interna do compose)

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

**E-mail de desenvolvimento (Mailpit) — aplicação 100% independente**

- A aplicação **não depende de e-mail externo** (Gmail ou SMTP institucional) para funcionar: todas as mensagens enviadas (ex.: recuperação de senha em `/password/email`) vão para um servidor SMTP local — o container **Mailpit** — e podem ser visualizadas num webmail no navegador.

- Como funciona:
	- Serviço `mailpit` no `docker/docker-compose.yml` (imagem `axllent/mailpit:v1.24`), com healthcheck; o `php-fpm` depende dele.
	- O `php-fpm` envia via `smtp://mailpit:1025` (rede interna do compose, sem criptografia, sem autenticação).
	- `src/.env`:
		```
		MAIL_DRIVER=smtp
		MAIL_HOST=mailpit
		MAIL_PORT=1025
		MAIL_USERNAME=null
		MAIL_PASSWORD=null
		MAIL_ENCRYPTION=null
		MAIL_FROM=nao-responda@setas.local
		MAIL_NAME=SGI - Sistema de Gerenciamente de Inscrição
		```
	- `src/config/mail.php` não possui mais credenciais hardcoded (apenas `env()`); o remetente usado em código vem de `config('mail.from.*')`.

- Uso:
	- Webmail: **http://localhost:8025** — cada e-mail enviado pela aplicação aparece ali (inclui os links de reset de senha para copiar/abrir).
	- API para testes: `curl http://localhost:8025/api/v1/messages?limit=5`
	- Limpar a caixa: `curl -X POST http://localhost:8025/api/v1/messages/delete` (ou o botão da UI).

- Migrar para produção (SMTP do órgão): basta alterar as variáveis `MAIL_*` no `src/.env` (host/porta/criptografia/usuário/senha do servidor institucional, ex.: `smtp.<orgao>.gov.br`) e reiniciar o `php-fpm`. Nenhuma alteração de código é necessária.

**Páginas de erro e ações sem retorno**

- O projeto não tinha páginas de erro (só existia `errors/503`): URLs não roteadas exibiam a tela de debug do Laravel e IDs inválidos causavam tela em branco. Implementado:
	- `src/resources/views/errors/404.blade.php`, `403.blade.php` e `500.blade.php` (pt-BR, mesmo estilo da 503). O `Handler` do Laravel 5.1 renderiza essas views automaticamente para as exceções HTTP correspondentes.
	- Todas as chamadas `->find($id)` nos controllers foram convertidas para `->findOrFail($id)` (37 ocorrências): ID inexistente em `show/edit/update/destroy` e nos endpoints AJAX (`get-cidades/{id}`, `get-departamentos/{id}`) agora retorna a página 404 em vez de erro fatal.
	- Ações vazias do scaffold ("sem retorno") que geravam páginas em branco foram tratadas:
		- `HomeController` (`create/store/show/edit/update/destroy`, rotas `h.*`) e `UsersController` (`create/store`, rotas `u.*`): redirecionam para o index com flash "Ação não disponível."
		- Métodos `show($id)` vazios ou quebrados nos demais controllers (`Inscricao\*`, `CargoController`, `UsuarioController`): `abort(404)`.
	- Verificado: todas as rotas apontam para métodos existentes, todos os nomes de rotas usados nas views existem e todas as `view('...')` têm arquivo blade correspondente.

**Certificado (frente/verso)**

- A tela do certificado (`resources/views/pdf/certificado.blade.php`) foi reestruturada e agora exibe os dados reais da inscrição:
	- **Frente**: nome completo do participante (`users.name`), nome do curso (`curso.descricao`) e período de início/término formatados em `d/m/Y` (via Carbon).
	- **Verso**: página própria (quebra de página via `page-break-before: always`) com o **conteúdo programático** do curso — lista de módulos (`descricao` + `conteudo` em HTML); se o curso não tiver módulos, exibe mensagem amigável.
- Ajustes de suporte:
	- `InscricaoController@certificado` agora usa o `id` da inscrição enviado pelo link em `inscricao/show.blade.php` (`certificado?id=X`), carregando a inscrição com eager loading `curso.modulo` e passando `$inscricao` para a view (antes havia um `$cursos` comentado e placeholders `### DATA_INICIO ###`/`### DATA_TERMINO ###` na view).
	- Corrigida a chave estrangeira do relacionamento `Curso::modulo()` (`id_curso` em vez de `id_modulo`), sem a qual o conteúdo programático não carregaria.

**Busca dinâmica nas listagens**

- Implementado filtro dinâmico (client-side, em tempo real) em **todas as 19 telas de listagem** do sistema, via partial compartilhado `resources/views/layout-backend/busca_tabela.blade.php`.
- Características:
	- Filtra as linhas da tabela conforme o usuário digita, sem recarregar a página (JavaScript puro, sem dependência do jQuery).
	- Insensível a maiúsculas/minúsculas e a acentos (busca por `funcao` encontra `Função`).
	- Contador "X de Y registro(s) encontrado(s)" durante a filtragem e botão para limpar o filtro.
	- Campo de busca posicionado acima da tabela, com largura de 50%.
	- Ignora o conteúdo dos modais de exclusão ao montar o texto pesquisável.
- Telas atendidas: curso, inscritos, módulo, cargo, cidade, departamento, escolaridade, estado, função, órgão, perfil, região, status de curso, vínculo institucional e as três listas de usuários (`user/lista`, `user/adminlista`, `user/gerentelista`).
- Exceção: a tela de inscrição (`/inscricao`) não recebe a busca, pois já possui filtro próprio por curso (formulário POST que recarrega a listagem).
- Observação: a busca filtra os registros carregados na página atual (client-side); as listagens paginam com limites altos (ex.: 5000), portanto na prática cobre todos os registros. Para busca no servidor (entre páginas), ajustar o controller correspondente.
- `inscrito/tabela.blade.php` é apenas uma demo estática de DataTables e não recebeu o filtro.

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

- Problema: `Swift_TransportException ... Connection could not be established with host smtp.gmail.com [Network is unreachable #101]` ao usar `/password/email` ou qualquer envio de e-mail
	- Causa: a rede local bloqueia os IPs de SMTP do Google e o DNS do container devolve IPv6 sem rota. Não é problema do código.
	- Solução: já corrigido — a aplicação usa o Mailpit local (ver seção **E-mail de desenvolvimento (Mailpit)**). Para produção, aponte `MAIL_*` do `src/.env` para o SMTP institucional.

- Problema: página em branco ou tela de debug ao acessar URLs não roteadas / IDs inválidos / ações sem retorno
	- Causa: faltavam views de erro e havia métodos de controller vazios do scaffold, além de `find()` retornando `null` para IDs inexistentes.
	- Solução: já implementado — views `errors/404|403|500`, `findOrFail()` em todos os controllers e ações vazias tratadas (ver seção **Páginas de erro e ações sem retorno**).

**Observações finais**

- Este projeto é legado — modernizações (PHP7+/Laravel upgrade) podem reduzir dor futura. As instruções acima focam em execução rápida com dependências mantidas para PHP 5.6.
- Se quiser, posso:
	- Gerar um arquivo `dbeaver` com a conexão pronta;
	- Adicionar um `Makefile` com os comandos mais usados (`make up`, `make vendor`, `make db-import`);
	- Automatizar a criação do `vendor` durante o build da imagem (bake vendor no image) — diga qual prefere.

----
Última atualização: certificado reestruturado (dados reais + conteúdo programático no verso) e busca dinâmica em todas as telas de listagem. Anteriormente: Mailpit (e-mail local sem dependência externa) e tratamento de páginas de erro/ações sem retorno.

<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuario';

    protected $primaryKey = 'id_usuario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nome',
    	'nome_cracha',
    	'sexo',
    	'foto',
    	'cpf',
    	'rg',
    	'orgao_emissor',
    	'id_estado_rg',
    	'data_nascimento',
    	'email_pessoal',
    	'email_institucional',
    	'cep',
    	'endereco',
    	'complemento',
    	'id_estado',
    	'id_cidade',
    	'telefone_pessoal',
    	'telefone_trabalho',
    	'id_escolaridade',
    	'id_perfil',
    	'inicio_servico',
    	'id_vinculo_institucional',
    	'id_orgao',
    	'id_departamento',
    	'id_cargo',
    	'id_funcao',
    	'possui_deficiencia',
    	'id_deficiencia'
    ];

    public function curso()
    {
        return $this->belongsToMany('Gerenciador\Inscricao\Curso', 'inscricao'); //Tem vários Cursos
    }

    public function estado()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Estado'); //Tem apenas um Estado
    }

    public function cidade()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Cidade');//Tem apenas uma cidade
    }

    public function cargo()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Cargo');//Tem apenas um cargo
    }

    public function funcao()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Funcao');// Tem apenas uma função
    }

    public function departamento()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Usuario'); //Tem apenas um departamento
    }

    public function orgao()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Orgao');// Tem apenas um órgão
    }

    public function vinculoinstitucional()
    {
        return $this->belongsTo('Gerenciador\Inscricao\VinculoInstitucional'); //Tem apenas um vinculo
    }

    public function escolaridade()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Escolaridade');//Tem uma escolaridade
    }

    public function perfil()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Perfil');//Tem um perfil
    }

    public function deficiencia()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Deficiencia');//Tem apenas um deficiencia
    }
}
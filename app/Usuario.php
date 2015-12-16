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

}

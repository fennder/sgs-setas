<?php

namespace Gerenciador;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name',
        'dados_atualizados',
        'nome_cracha',
        'sexo',
        'foto',
        'cpf',
        'rg',
        'nis',
        'orgao_emissor',
        'id_estado_rg',
        'data_nascimento',
        'email',
        'password',
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

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
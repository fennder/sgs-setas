<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usuario extends Model
{

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuario';

    /**
     * The primary key for the model.
     *
     * @var string
     */
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
        'nis',
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
        return $this->belongsToMany('Gerenciador\Inscricao\Curso', 'id_curso'); //Tem vários Cursos
    }

    public function estado()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Estado', 'id_estado'); //Tem apenas um Estado
    }

    public function estado_rg()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Estado', 'id_estado_rg'); //Tem apenas um Estado
    }

    public function cidade()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Cidade', 'id_cidade');//Tem apenas uma cidade
    }

    public function cargo()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Cargo', 'id_cargo');//Tem apenas um cargo
    }

    public function funcao()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Funcao', 'id_funcao');// Tem apenas uma função
    }

    public function departamento()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Departamento', 'id_departamento'); //Tem apenas um departamento
    }

    public function orgao()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Orgao', 'id_orgao');// Tem apenas um órgão
    }

    public function vinculoinstitucional()
    {
        return $this->belongsTo('Gerenciador\Inscricao\VinculoInstitucional', 'id_vinculo_institucional'); //Tem apenas um vinculo
    }

    public function escolaridade()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Escolaridade', 'id_escolaridade');//Tem uma escolaridade
    }

    /*public function perfil()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Perfil');//Tem um perfil
    }*/

    public function deficiencia()
    {
        return $this->belongsTo('Gerenciador\Inscricao\Deficiencia', 'id_deficiencia');//Tem apenas um deficiencia
    }
}
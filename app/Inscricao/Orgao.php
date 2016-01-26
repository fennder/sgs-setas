<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curso';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'descricao',
    	'data_inicio',
    	'data_fim',
    	'id_status_curso'
    ];

    public function departamento()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Departamento');
    }

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Usuario');
    }
}

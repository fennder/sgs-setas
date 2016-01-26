<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
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

    public function statuscurso()
    {
    	return $this->belongsTo('Gerenciador\StatusCurso'); //O curso tem apenas um status
    }

    public function modulo()
    {
    	return $this->hasMany('Gerenciador\Modulo'); //O Curso tem vários modulos
    }

    public function inscricao()
    {
    	return $this->hasMany('Gerenciador\Inscricao'); //O Curso tem várias inscrições
    }
}

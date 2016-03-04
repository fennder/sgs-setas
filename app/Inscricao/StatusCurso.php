<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class StatusCurso extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'status_curso';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_status_curso';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'descricao'
    ];

    public function curso()
    {
    	return $this->hasMany('Gerenciador\Instrucao\Curso'); //O status do curso tem vários cursos
    }
}

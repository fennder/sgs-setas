<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Gerenciador\Inscricao\StatusCurso;
use Gerenciador\Inscricao\Inscricao;
use Gerenciador\Inscricao\Usuario;
use Gerenciador\Inscricao\Modulo;

class Curso extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curso';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_curso';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'descricao',
    	'data_inicio',
    	'data_termino',
        'id_status_curso'
    ];

    public function usuarios()
    {
        return $this->belongsToMany('Gerenciador\User'); 
    }

    public function statuscurso()
    {
    	return $this->belongsTo('Gerenciador\Inscricao\StatusCurso', 'id_status_curso'); //O curso tem apenas um status
    }

    public function inscricao()
    {
        return $this->hasMany('Gerenciador\Inscricao\Inscricao', 'id_inscricao');
    }

    public function modulo()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Modulo', 'id_modulo'); //O Curso tem vários modulos
    }

    
}

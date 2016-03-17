<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modulo';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_modulo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao',
    	'conteudo',
    	'id_curso'
    ];

    public function curso()
    {
    	return $this->belongsTo('Gerenciador\Inscricao\Curso', 'id_curso'); // O módulo tem apenas um curso
    }
}

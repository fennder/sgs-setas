<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'escolaridade';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_escolaridade';


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

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Usuario');//Tem vários usuários
    }
}

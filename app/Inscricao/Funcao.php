<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Funcao extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'funcao';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_funcao';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'descricao',
    ];

    public function usuario()
    {
        return $this->hasMany('Gerenciador\Inscricao\Usuario');//Tem vários usuários
    }
}

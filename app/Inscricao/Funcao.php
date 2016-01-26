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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'descricao',
    ];

    public function usuario()
    {
        return $this->hasMany('Gerenciador\Usuario');//Tem vários usuários
    }
}

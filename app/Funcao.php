<?php

namespace Gerenciador\Inscriao;

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
}

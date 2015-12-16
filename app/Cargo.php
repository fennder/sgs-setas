<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cargo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'desricao'
    ];
}

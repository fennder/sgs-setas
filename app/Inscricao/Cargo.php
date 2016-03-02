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
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_cargo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao'
    ];

    public function usuario()
    {
        return $this->hasMany('Gerenciador\Usuario');//Tem Vários usuários
    }
}

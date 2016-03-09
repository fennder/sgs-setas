<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'perfil';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_perfil';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'descricao'
    ];

    /*public function usuario()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Usuario');//Tem vários usuários
    }*/
}

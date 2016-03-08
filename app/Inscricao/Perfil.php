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

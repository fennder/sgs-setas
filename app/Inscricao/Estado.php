<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estado';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nome',
    	'uf',
    	'status'
    ];

    public function cidade()
    {
    	return $this->hasMany('Gerenciador\Cidade'); //Tem várias cidades
    }

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\Usuario'); //Tem vários usuários
    }
}

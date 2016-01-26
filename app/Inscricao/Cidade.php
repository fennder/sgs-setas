<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cidade';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nome',
    	'cod_ibge'
    ];

    public function regiao()
    {
    	return $this->belongsTo('Gerenciador\Regiao'); //Tem apenas uma regiao
    }

    public function estado()
    {
    	return $this->belongsTo('Gerenciador\Estado'); //Tem apenas um estado 
    }

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\Usuario');
    }
}

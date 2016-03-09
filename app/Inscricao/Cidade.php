<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Gerenciador\Inscricao\Estado;
use Gerenciador\Inscricao\Regiao;

class Cidade extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cidade';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_cidade';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nome',
    	'cod_ibge',
        'id_estado',
        'id_regiao'
    ];

    public function regiao()
    {
    	return $this->belongsTo('Gerenciador\Inscricao\Regiao', 'id_regiao'); //Tem apenas uma regiao
    }

    public function estado()
    {
    	return $this->belongsTo('Gerenciador\Inscricao\Estado', 'id_estado'); //Tem apenas um estado 
    }

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Usuario', 'id_usuario');//Tem vários usuários
    }
}
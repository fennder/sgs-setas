<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;
use Gerenciador\Inscricao\Cidade;

class Regiao extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'regiao';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_regiao';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'descricao'
    ];

    public function cidade()
    {
    	return $this->hasMany('Gerenciador\Instrucao\Cidade', 'id_cidade'); //Tem várias Cidades
    }
}

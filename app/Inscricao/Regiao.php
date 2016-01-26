<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'regiao';

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
    	return $this->hasMany('Gerenciador\Cidade'); //Tem várias Cidades
    }
}

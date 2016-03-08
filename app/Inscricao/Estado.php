<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\Inscricao\Usuario;

class Estado extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estado';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_estado';

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
    	return $this->hasMany('Gerenciador\Inscricao\Cidade'); //Tem várias cidades
    }

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Usuario'); //Tem vários usuários
    }

}

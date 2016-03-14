<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Gerenciador\Inscricao\Orgao;
use Gerenciador\Inscricao\Departamento;
use Gerenciador\User;

class Orgao extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orgao';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_orgao';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'descricao'
    ];

    public function departamento()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Departamento', 'id_orgao'); //Tem muitos departamento
    }

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\User', 'id'); //Tem muitos usuários
    }
}

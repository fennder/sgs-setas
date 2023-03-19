<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Gerenciador\User;

class VinculoInstitucional extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vinculo_institucional';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_vinculo_institucional';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'descricao',
        'inicio_vinculo'
    ];

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\User', 'id');//Tem muitos usuários
    }
}

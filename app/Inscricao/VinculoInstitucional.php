<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Gerenciador\Inscricao\Usuario;

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
    	'descricao'
    ];

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Usuario', 'id_usuario');//Tem muitos usuários
    }
}

<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Gerenciador\Inscricao\Usuario;
use Gerenciador\Inscricao\Orgao;

class Departamento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departamento';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_departamento';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'descricao',
    	'id_orgao',
        'id_usuario'
    ];

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Usuario', 'id_usuario'); //Tem muitos usuários
    }

    public function orgao()
    {
    	return $this->belongsTo('Gerenciador\Inscricao\Orgao', 'id_orgao'); //Tem apenas um orgao
    }
}

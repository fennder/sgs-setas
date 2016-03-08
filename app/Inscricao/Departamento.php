<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Gerenciador\Inscricao\Orgao;
use Gerenciador\Inscricao\Usuario;

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
    	'id_orgao'
    ];

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Usuario'); //Tem muitos usuários
    }

    public function orgao()
    {
    	return $this->belongsTo('Gerenciador\Inscricao\Orgao'); //Tem apenas um orgao
    }
}

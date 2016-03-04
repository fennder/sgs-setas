<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curso';

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
    	return $this->hasMany('Gerenciador\Inscricao\Usuario');
    }

    public function orgao()
    {
    	return $this->belongsTo('Gerenciador\Inscricao\Orgao');
    }
}

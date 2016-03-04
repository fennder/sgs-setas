<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Deficiencia extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'deficiencia';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_deficiencia';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'descricao',
    	'id_curso'
    ];

    public function usuario()
    {
    	return $this->hasMany('Gerenciador\Inscricao\Usuario');//Tem vários usuários
    }
}

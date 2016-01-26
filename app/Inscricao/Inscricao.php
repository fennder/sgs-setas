<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{

	    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inscricao';

    public function curso()
    {
    	return $this->belongsTo('Gerenciador\Curso'); // Tem apenas um curso
    }

    public function usuario()
    {
    	return $this->belongsTo('Gerenciador\Usuario'); // Tem apenas um usuario
    }
}

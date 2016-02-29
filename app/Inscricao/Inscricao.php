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
    	return $this->belongsTo('Gerenciador\Inscricao\Curso', 'curso'); // Tem apenas um curso
    }

    public function usuario()
    {
    	return $this->belongsTo('Gerenciador\Inscricao\Usuario', 'usuario'); // Tem apenas um usuario
    }
}

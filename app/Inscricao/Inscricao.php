<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inscricao extends Model
{

	    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inscricao';
    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_inscricao';

    public function curso()
    {
    	return $this->belongsTo('Gerenciador\Inscricao\Curso', 'id_curso'); // Tem apenas um curso
    }

    public function usuario()
    {
    	return $this->belongsTo('Gerenciador\Inscricao\Usuario', 'id_usuario'); // Tem apenas um usuario
    }
}

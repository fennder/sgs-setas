<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{

	    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curso_user';
    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_inscricao';

    protected $fillable = [
        'user_id',
        'curso_id',
        'status',
        'motivo',
        'login',
        
    ];

    public function curso()
    {
    	return $this->belongsTo('Gerenciador\Inscricao\Curso','curso_id');
    }

    public function usuario()
    {
    	return $this->belongsTo('Gerenciador\User','user_id');
    }
}

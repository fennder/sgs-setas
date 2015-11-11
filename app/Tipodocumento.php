<?php

namespace Gerenciador;

use Illuminate\Database\Eloquent\Model;

class Tipodocumento extends Model
{
    //

    public function contrato(){
    	return  $this->hasMany('Gerenciador\Contrato');
    }
}

<?php

namespace Gerenciador\sgc;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //

    public function contrato(){
    	return  $this->hasMany('Gerenciador\Contrato');
    }
}

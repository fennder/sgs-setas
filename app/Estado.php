<?php

namespace Gerenciador;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    public function fornecedor(){
    	return  $this->hasMany('Gerenciador\Fornecedor');
    }
    public function cidade(){
    	return  $this->hasMany('Gerenciador\Cidade');
    }
}

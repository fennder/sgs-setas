<?php

namespace Gerenciador;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $id_cc;

    protected $numero_cc;

    protected $data_inicio_cc;

    protected $data_fim_cc;

    protected $valor_cc;

    protected $obs_cc;

    public function objeto(){
    	return  $this->hasMany('Gerenciador\Objeto');
    }
    public function beneficiario(){
    	return  $this->hasMany('Gerenciador\Beneficiario');
    }
}

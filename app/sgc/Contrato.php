<?php

namespace Gerenciador\sgc;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $id_cc = null;

    protected $numero_cc = null;

    protected $data_inicio_cc = null;

    protected $data_fim_cc = null;

    protected $valor_cc = null;

    protected $obs_cc = null;

    public $table = "contratos";

    
    public function setId_cc($id_cc){
        $this->id_cc = $id_cc;
    }
    public function setNumero_cc($numero_cc){
        $this->numero_cc = $numero_cc;
    }
    public function setValor_cc($valor_cc){
        $this->valor_cc = $valor_cc;
    }
    public function setObs_cc($obs_cc){
        $this->obs_cc = $obs_cc;
    }
    public function getId_cc(){
        return $this->id_cc;
    }
    public function getNumero_cc(){
        return $this->numero_cc;
    }
    public function getValor_cc(){
        return $this->valor_cc;
    }
    public function getObs_cc(){
        return $this->obs_cc;
    }


    public function objeto(){
    	return  $this->hasMany('Gerenciador\Objeto');
    }
    public function beneficiario(){
    	return  $this->hasMany('Gerenciador\Beneficiario');
    }
}

<?php

namespace Gerenciador\sgi;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $id_cargo;

    protected $descricao;

    public $table = "cargo";
}

<?php

namespace Gerenciador\Inscricao;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $id_cargo;

    protected $descricao;

    public $table = "cargo";
}

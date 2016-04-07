<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkUsuarioEstadoCidadeEscolaridadePerfilVinculoOrgaoDepartamentoCargoFuncaoDeficiencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id_estado_rg')->references('id_estado')->on('estado');
            $table->foreign('id_estado')->references('id_estado')->on('estado');
            $table->foreign('id_cidade')->references('id_cidade')->on('cidade')->onUpdate('set Null');
            $table->foreign('id_escolaridade')->references('id_escolaridade')->on('escolaridade');
            $table->foreign('id_perfil')->references('id_perfil')->on('perfil');
            $table->foreign('id_vinculo_institucional')->references('id_vinculo_institucional')->on('vinculo_institucional');
            $table->foreign('id_orgao')->references('id_orgao')->on('orgao');
            $table->foreign('id_departamento')->references('id_departamento')->on('departamento');
            $table->foreign('id_cargo')->references('id_cargo')->on('cargo');
            $table->foreign('id_funcao')->references('id_funcao')->on('funcao');
            $table->foreign('id_deficiencia')->references('id_deficiencia')->on('deficiencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}

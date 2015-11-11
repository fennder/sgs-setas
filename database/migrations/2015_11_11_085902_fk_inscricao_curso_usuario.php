<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkInscricaoCursoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inscricao', function (Blueprint $table) {
            
            $table->foreign('id_curso')->references('id_curso')->on('curso');
            
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inscricao', function (Blueprint $table) {
            //
        });
    }
}

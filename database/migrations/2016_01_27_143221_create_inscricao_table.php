<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscricaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricao', function (Blueprint $table) {
            $table->increments('id_inscricao');
            $table->integer('id_curso')->unsigned()->nullable();
            $table->foreign('id_curso')->references('id_curso')->on('curso')->onDelete('cascade')->onUpdate('Set Null');
            $table->integer('id_usuario')->unsigned()->nullable();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario')->onDelete('cascade')->onUpdate('Set Null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inscricao');
    }
}

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
        Schema::create('curso_user', function (Blueprint $table) {
            $table->increments('id_inscricao');
            $table->integer('curso_id')->unsigned()->nullable();
            $table->foreign('curso_id')->references('id_curso')->on('curso')->onDelete('cascade')->onUpdate('Set Null');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('Set Null');
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

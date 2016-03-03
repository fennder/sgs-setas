<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkCidadeEstadoFkCidadeRegiao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('cidade', function (Blueprint $table) {
            $table->foreign('id_estado')->references('id_estado')->on('estado');
            $table->foreign('id_regiao')->references('id_regiao')->on('regiao');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('cidade', function (Blueprint $table) {
            //
        });*/
    }
}

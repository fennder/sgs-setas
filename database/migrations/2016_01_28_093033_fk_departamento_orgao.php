<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkDepartamentoOrgao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('departamento', function (Blueprint $table) {
            $table->foreign('id_orgao')->references('id_orgao')->on('orgao');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('departamento', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkModuloCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('modulo', function (Blueprint $table) {
            $table->foreign('id_curso')->references('id_curso')->on('curso');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('modulo', function (Blueprint $table) {
            //
        });*/
    }
}

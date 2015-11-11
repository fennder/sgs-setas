<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* php artisan make:migration create_table_objeto --create=objeto 
*
**/
class CreateTableObjeto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objeto', function (Blueprint $table) {
            $table->increments('id_o');
            $table->string('descricao_o');
            $table->integer('cc_id_cc')->length(10)->unsigned();
            $table->timestamps();
        });
        Schema::table('objeto', function ($table) {
            
            //$table->foreign('cc_id_cc')->references('id_cc')->on('contratos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('objeto');
    }
}

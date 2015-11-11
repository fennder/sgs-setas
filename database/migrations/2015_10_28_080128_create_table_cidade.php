<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* php artisan make:migration create_table_cidade --create=cidade 
*
**/
class CreateTableCidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidade', function (Blueprint $table) {
            $table->increments('id_c');
            $table->string('nome_c');
            $table->string('cod_ibge_c');
            $table->integer('e_id_e')->length(10)->unsigned();
            $table->timestamps();
        });
        Schema::table('cidade', function ($table) {
            
            //$table->foreign('e_id_e')->references('id_e')->on('estado');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cidade');
    }
}

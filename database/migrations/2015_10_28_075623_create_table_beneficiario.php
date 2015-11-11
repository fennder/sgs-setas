<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* php artisan make:migration create_table_beneficiario --create=beneficiario 
*
**/
class CreateTableBeneficiario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiario', function (Blueprint $table) {
            $table->increments('id_b');
            $table->string('descricao_b');
            $table->integer('cc_id_cc')->unsigned();
            $table->timestamps();
        });
        Schema::table('beneficiario', function ($table) {
            
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
        Schema::drop('beneficiario');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* php artisan make:migration create_table_contratos --create=contratos 
*
**/
class CreateTableContratos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id_cc');
            $table->string('numero_cc')->unique();
            $table->date('data_inicio_cc');
            $table->date('data_fim_cc');
            $table->decimal('valor_cc', 10,2);
            $table->text('obs_cc')->nullable();
            $table->integer('f_id_f')->unsigned();
            $table->integer('t_id_t')->unsigned();
            $table->timestamps();
        });
        Schema::table('contratos', function ($table) {
            
            //$table->foreign('f_id_f')->references('id_f')->on('fornecedor');
            
            //$table->foreign('t_id_t')->references('id_t')->on('tipodocumento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contratos');
    }
}

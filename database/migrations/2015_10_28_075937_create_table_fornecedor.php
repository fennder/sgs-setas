<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* php artisan make:migration create_table_fornecedor --create=fornecedor 
*
**/
class CreateTableFornecedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->increments('id_f');
            $table->string('nome_f', 100);
            $table->string('cpf_cnpj_f', 45)->unique();
            $table->string('email_f');
            $table->string('contato_a_f', 18)->nullable();
            $table->string('contato_b_f', 18)->nullable();
            $table->string('endereco_f', 200);
            $table->integer('e_id_e')->length(10)->unsigned();
            $table->timestamps();
        });
        Schema::table('fornecedor', function ($table) {
            
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
        Schema::drop('fornecedor');
    }
}

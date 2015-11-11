<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* php artisan make:migration create_table_tipodocumento --create=tipodocumento 
*
**/
class CreateTableTipodocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipodocumento', function (Blueprint $table) {
            $table->increments('id_t');
            $table->string('descricao_t', 100);
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
        Schema::drop('tipodocumento');
    }
}

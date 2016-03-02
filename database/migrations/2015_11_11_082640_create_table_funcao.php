<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFuncao extends Migration
{
    /**
     * Run the migrations.
     * php artisan make:migration create_table_funcao --create=funcao
     * @return void
     */
    public function up()
    {
        /*Schema::create('funcao', function (Blueprint $table) {
            $table->increments('id_funcao');
            $table->string('descricao')->unique();
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funcao');
    }
}

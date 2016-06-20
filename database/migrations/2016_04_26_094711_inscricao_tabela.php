<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InscricaoTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curso_user', function (Blueprint $table) {
            $table->string('status')->nullable();
            $table->longText('motivo')->nullable();
            $table->string('login')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curso_user', function (Blueprint $table) {
            //
        });
    }
}

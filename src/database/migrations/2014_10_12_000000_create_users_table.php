<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('dados_atualizados')->nullable();

            //$table->string('nome', 100);
            $table->string('nome_cracha', 50);
            $table->string('sexo', 10)->nullable();
            $table->string('foto', 200)->nullable();    
            $table->string('cpf', 14);
            $table->string('rg', 45);
            $table->string('nis')->nullable();
            $table->string('orgao_emissor', 45);
            $table->date('data_nascimento');
            //$table->string('email_pessoal', 100);
            $table->string('email_institucional', 100)->nullable();
            $table->string('cep', 12)->nullable();
            $table->string('endereco', 200)->nullable();
            $table->string('complemento', 200)->nullable();
            $table->string('telefone_pessoal', 20)->nullable();
            $table->string('telefone_trabalho', 20)->nullable();
            $table->date('inicio_servico');
            $table->boolean('possui_deficiencia')->nullable();
            $table->integer('id_estado_rg')->unsigned()->nullable();
            $table->integer('id_estado')->unsigned()->nullable();
            $table->integer('id_cidade')->unsigned()->nullable();
            $table->integer('id_escolaridade')->unsigned()->nullable();
            $table->integer('id_perfil')->unsigned()->nullable();
            $table->integer('id_vinculo_institucional')->unsigned()->nullable();
            $table->integer('id_orgao')->unsigned()->nullable();
            $table->integer('id_departamento')->unsigned()->nullable();
            $table->integer('id_cargo')->unsigned()->nullable();
            $table->integer('id_funcao')->unsigned()->nullable();
            $table->integer('id_deficiencia')->unsigned()->nullable();

            $table->rememberToken();
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
        Schema::drop('users');
    }
}

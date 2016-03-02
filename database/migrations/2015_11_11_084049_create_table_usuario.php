<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario')->unsigned();
            $table->string('nome', 100);
            $table->string('nome_cracha', 50);
            $table->string('sexo', 1);
            $table->string('foto', 200);
            $table->string('cpf', 14)->unique();
            $table->string('rg', 45);
            $table->string('nis')->nullable();
            $table->string('orgao_emissor', 45);
            $table->date('data_nascimento');
            $table->string('email_pessoal', 100);
            $table->string('email_institucional', 100);
            $table->string('cep', 12);
            $table->string('endereco', 200);
            $table->string('complemento', 200);
            $table->string('telefone_pessoal', 20);
            $table->string('telefone_trabalho', 20);
            $table->date('inicio_servico');
            $table->boolean('possui_deficiencia');
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
        Schema::drop('usuario');
    }
}

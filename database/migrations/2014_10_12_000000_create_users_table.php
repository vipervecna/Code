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
            //necessários
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            //complementares
                $table->string('estadocivil')->nullable();
                $table->integer('dia')->nullable();
                $table->integer('mes')->nullable();
                $table->integer('ano')->nullable();
                $table->char('sexo')->nullable();
                $table->string('escolaridade')->nullable();
                $table->string('ocupacao')->nullable();
                $table->integer('cpf')->nullable();
                $table->integer('cpf2')->nullable();
                $table->string('rg')->nullable();
                $table->string('email2')->nullable();
                $table->integer('telefoneddd')->nullable();
                $table->integer('telefone')->nullable();
                $table->integer('celularddd')->nullable();
                $table->integer('celular')->nullable();
                $table->string('rua')->nullable();
                $table->integer('numero_endereco')->nullable();
                $table->integer('cep')->nullable();
                $table->integer('cep2')->nullable();
                $table->string('bairro')->nullable();
                $table->string('cidade')->nullable();
                $table->char('estado')->nullable();
                $table->string('complemento_endereco')->nullable();

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

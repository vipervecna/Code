<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrustedonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('trustedones', function (Blueprint $table) {
          //necessários
          $table->increments('trusted_id');
          $table->string('trusted_userid');
          $table->string('trusted_name');
          $table->string('trusted_lastname');
          $table->string('trusted_status');
          $table->string('trusted_email')->unique();
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
        Schema::drop('trustedones');
    }
}

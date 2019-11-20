<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('complains', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('product');
          $table->string('model');
          $table->string('phone');
          $table->string('email');
          $table->string('address');
          $table->text('complain');
          $table->char('archived');
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
        Schema::drop('complains');
    }
}

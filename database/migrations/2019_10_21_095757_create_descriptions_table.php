<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('descriptions', function (Blueprint $table) {
          $table->increments('id');
          $table->text('body');
          $table->integer('service_id')->unsigned();
          $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
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
        Schema::drop('descriptions');
    }
}

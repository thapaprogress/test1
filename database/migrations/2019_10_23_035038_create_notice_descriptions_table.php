<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticeDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('notice_descriptions', function (Blueprint $table) {
          $table->increments('id');
          $table->text('body');
          $table->integer('notice_id')->unsigned();
          $table->foreign('notice_id')->references('id')->on('notices')->onDelete('cascade');
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
        Schema::drop('notice_descriptions');
    }
}

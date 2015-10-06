<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  		Schema::create('messages', function (Blueprint $table) {
  			$table->bigIncrements('id');
  			$table->bigInteger('msg_class_id');
  			$table->date('msg_date');
  			$table->time('msg_time');
  			$table->tinyInteger('type')->default(1);
  			$table->tinyInteger('status')->default(1);
  			$table->string('message', 255);
  			$table->integer('user_id')->unsigned();
  			$table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('messages');
    }
}

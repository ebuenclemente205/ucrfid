<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrfidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librfids', function (Blueprint $table) {
            $table->increments('id');
            $table->String('classID');
            $table->String('cardNo', 50);
            $table->boolean('sms');
            $table->tinyInteger('lastTrans');
            $table->bigInteger('msg_id')->unsigned();
            $table->foreign('msg_id')->references('id')->on('messages');
            $table->integer('trans_id')->unsigned();
            $table->foreign('trans_id')->references('id')->on('libtransactions');
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
        Schema::drop('librfids');
    }
}

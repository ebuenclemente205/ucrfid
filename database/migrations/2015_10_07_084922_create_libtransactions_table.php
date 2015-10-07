<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibtransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libtransactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classID');
            $table->date('transDate');
            $table->time('transTime');
            $table->boolean('gender');
            $table->tinyInteger('transType');
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
        Schema::drop('libtransactions');
    }
}

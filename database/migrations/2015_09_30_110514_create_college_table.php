<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastName', 30);
            $table->string('firstName', 30);
            $table->boolean('gender');
            $table->integer('schmTrm');
            $table->integer('gradeLevel');
            $table->integer('colCode')->unsigned();
            $table->foreign('colCode')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('college');
    }
}

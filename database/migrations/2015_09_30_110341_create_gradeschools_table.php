<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeschoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradeschools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idno');
            $table->string('lastName', 30);
            $table->string('firstName', 30);
            $table->boolean('gender');
            $table->integer('schmTrm');
            $table->integer('gradeLevel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gradeschools');
    }
}

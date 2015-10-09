<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGendercoursectrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gendercoursectrs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('semester');
            $table->string('Course', 5);
            $table->boolean('gender');
            $table->integer('ctr');
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
        Schema::drop('gendercoursectrs');
    }
}

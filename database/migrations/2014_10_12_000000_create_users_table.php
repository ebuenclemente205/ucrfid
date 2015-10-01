<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullName');
            $table->string('position');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->tinyInteger('status')->default(1);
            $table->rememberToken();
            $table->integer('colCode');
            $table->integer('emp_id');
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
        Schema::drop('users');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        //create Database
        Schema::create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('firstname', 45)->nullable();
            $table->string('lastname', 45)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('username', 45)->unique();
            $table->string('password');
            $table->string('status', 45);
            $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        //drop table
        Schema::drop('users');
    }
}

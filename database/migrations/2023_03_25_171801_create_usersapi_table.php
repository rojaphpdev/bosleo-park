<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersapiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersapi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postcode');
            $table->string('email');
            $table->string('phone');
            $table->string('picture');
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
        Schema::dropIfExists('usersapi');
    }
}

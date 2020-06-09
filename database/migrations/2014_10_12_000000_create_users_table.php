<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->string('fn');
            $table->string('ln');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('adresse');
            $table->string('phno');
            $table->string('current_location');
            $table->integer('annual_salary');
            $table->string('pic');
            $table->string('password');
            $table->string('type');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

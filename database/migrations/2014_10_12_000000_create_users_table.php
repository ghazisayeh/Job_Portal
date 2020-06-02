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
            $table->string('ee_fn');
            $table->string('ee_ln');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('ee_adresse');
            $table->string('ee_phno');
            $table->string('ee_current_location');
            $table->integer('ee_annual_salary');
            $table->string('ee_pic');
            $table->string('password');
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

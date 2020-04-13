<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('er_fn');
            $table->string('er_ln');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('er_adresse');
            $table->string('er_phno');
            $table->string('er_company');
            $table->string('er_pic');
            $table->string('er_password');
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
        Schema::dropIfExists('employers');
    }
}

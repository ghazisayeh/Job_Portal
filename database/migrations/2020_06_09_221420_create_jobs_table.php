<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_cat')->unsigned();
            $table->bigInteger('id_com')->unsigned();
            $table->bigInteger('id_owner')->unsigned();
            $table->string('j_title');
            $table->string('j_hours');
            $table->string('j_salary');
            $table->string('j_discription');
            $table->string('j_location');
            $table->string('j_active');
            $table->foreign('id_com')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('id_cat')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('id_owner')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('jobs');
    }
}

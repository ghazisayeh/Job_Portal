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
            $table->bigInteger('j_category')->unsigned();
            $table->bigInteger('j_owner')->unsigned();
            $table->string('j_title');
            $table->double('j_hours',3,1);
            $table->integer('j_salary');
            $table->string('j_discription');
            $table->string('j_location');
            $table->boolean('j_active');
            $table->foreign('j_owner')->references('id')->on('employers');
            $table->foreign('j_category')->references('id')->on('categories');
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

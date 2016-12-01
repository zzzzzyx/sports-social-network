<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('startTime');
            $table->integer('exerciseTime');
            $table->string('spot');
            $table->string('label');
            $table->string('description');
            $table->integer('user_id');
            $table->integer('calories');
            $table->string('liker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exercises');
    }
}

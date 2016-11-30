<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id_low');
            $table->integer('user_id_high');
        });

        Schema::create('dialogs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('chat_at');
            $table->integer('sender_id');
            $table->string('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('friendships');
        Schema::drop('dialogs');
    }
}

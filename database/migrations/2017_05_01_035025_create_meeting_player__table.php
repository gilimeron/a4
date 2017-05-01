<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingPlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('meeting_player', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->integer('meeting_id')->unsigned();
          $table->integer('player_id')->unsigned();

          # Define the foreign keys
          $table->foreign('meeting_id')->references('id')->on('meetings');
          $table->foreign('player_id')->references('id')->on('players');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meeting_player');
    }
}
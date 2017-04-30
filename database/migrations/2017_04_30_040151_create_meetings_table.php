<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('meetings', function (Blueprint $table) {

      		$table->increments('id');
      		$table->timestamps();
      		$table->datetime('meeting_date');

          $table->integer('game_id')->unsigned();
          $table->integer('player_id')->unsigned();

          # Make foreign keys
          $table->foreign('game_id')->references('id')->on('games');
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
        Schema::drop('meetings');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('games', function (Blueprint $table) {

      		$table->increments('id');
      		$table->timestamps();
      		$table->string('game_name');
      		$table->string('players')->nullable();
      		$table->string('age_range')->nullable();
      		$table->string('estimated_play_time')->nullable();
      		$table->string('genre')->nullable();

      	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('games');
    }
}

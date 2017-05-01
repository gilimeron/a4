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
      		$table->string('meeting_date');
          $table->integer('game_id')->unsigned();
          $table->string('players')->nullable();
          # Define the foreign keys
          $table->foreign('game_id')->references('id')->on('games');


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

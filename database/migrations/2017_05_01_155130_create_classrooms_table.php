<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('classrooms', function (Blueprint $table)
        {
      		$table->increments('id');
      		$table->timestamps();
      		$table->string('classroom_name');
          $table->integer('age_group_id')->unsigned();

          #define the foreign keys
          $table->foreign('age_group_id')->references('id')->on('age_groups');
      	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('classrooms');
    }
}

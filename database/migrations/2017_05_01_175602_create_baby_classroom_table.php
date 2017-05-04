<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBabyClassroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baby_classroom', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('baby_id')->unsigned();
            $table->integer('classroom_id')->unsigned();

            # Define the foreign keys
            $table->foreign('baby_id')->references('id')->on('babies');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('baby_classroom');
    }
}

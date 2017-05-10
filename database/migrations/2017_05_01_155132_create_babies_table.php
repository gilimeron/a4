<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBabiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('babies', function (Blueprint $table)
      {
      		$table->increments('id');
      		$table->timestamps();
      		$table->string('first_name');
      		$table->string('last_name');
          $table->string('dob');
      		$table->string('address');
          $table->string('phone_number');
          $table->string('parent1_first_name');
          $table->string('parent1_last_name');
          $table->string('parent2_first_name')->nullable();
          $table->string('parent2_last_name')->nullable();
          $table->integer('classroom_id')->unsigned();

          #define the foreign keys
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
        Schema::drop('babies');
    }
}

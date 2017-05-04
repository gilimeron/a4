<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('teachers', function (Blueprint $table)
      {
      		$table->increments('id');
      		$table->timestamps();
      		$table->string('first_name');
      		$table->string('last_name');
      		$table->string('address');
          $table->string('phone_number');
          $table->string('email');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teachers');
    }
}

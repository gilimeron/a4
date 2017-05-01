<?php

use Illuminate\Database\Seeder;
use App\Classroom;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Classroom::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'classroom_name' => 'Pick-A-Moo',
              'age_group_id' => '1',
          ]);
      Classroom::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'classroom_name' => 'Pat The Bunny',
              'age_group_id' => '1',
          ]);
      Classroom::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'classroom_name' => 'Where is Waldo?',
              'age_group_id' => '2',
          ]);
      Classroom::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'classroom_name' => 'Where is Spot?',
              'age_group_id' => '3',
          ]);
      Classroom::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'classroom_name' => 'Dora The Explorer',
              'age_group_id' => '4',
          ]);
    }
}

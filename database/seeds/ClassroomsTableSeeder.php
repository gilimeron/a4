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
              'classroom_name' => 'Pick-A-Moo',
              'age_group' => 'Infants',
          ]);
      Classroom::insert([
              'classroom_name' => 'Pat The Bunny',
              'age_group' => 'Infants',
          ]);
      Classroom::insert([
              'classroom_name' => 'Where is Waldo',
              'age_group' => 'Toddlers',
          ]);
      Classroom::insert([
              'classroom_name' => 'Where is Spot',
              'age_group' => 'Toddlers',
          ]);
      Classroom::insert([
              'classroom_name' => 'Dora The Explorer',
              'age_group' => 'Pre-K',
          ]);
      Classroom::insert([
              'classroom_name' => 'Moon',
              'age_group' => 'Pre-K',
          ]);
      Classroom::insert([
              'classroom_name' => 'Sun',
              'age_group' => 'Kindergarten',
          ]);
      Classroom::insert([
              'classroom_name' => 'Mars',
              'age_group' => 'Kindergarten',
          ]);

    }
}

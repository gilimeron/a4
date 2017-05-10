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
              'classroom_name' => 'Dr. Seuss',
              'age_group' => 'Toddlers',
          ]);
      Classroom::insert([
              'classroom_name' => 'Owl Babies',
              'age_group' => 'Toddlers',
          ]);
      Classroom::insert([
              'classroom_name' => 'The Poky Little Puppy',
              'age_group' => 'Pre-K',
          ]);
      Classroom::insert([
              'classroom_name' => 'Goodbye Moon',
              'age_group' => 'Pre-K',
          ]);
      Classroom::insert([
              'classroom_name' => 'The Cat In The Hat',
              'age_group' => 'Kindergarten',
          ]);
      Classroom::insert([
              'classroom_name' => 'The Very Hungry Caterpillar',
              'age_group' => 'Kindergarten',
          ]);

    }
}

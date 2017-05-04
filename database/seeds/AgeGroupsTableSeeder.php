<?php

use Illuminate\Database\Seeder;
use App\AgeGroup;

class AgeGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      AgeGroup::insert([
              'age_group_name' => 'Infants',
      ]);
      AgeGroup::insert([
              'age_group_name' => 'Toddlers',
      ]);
      AgeGroup::insert([
              'age_group_name' => 'Pre-K',
      ]);
      AgeGroup::insert([
              'age_group_name' => 'Kindergarten',
      ]);
    }
}

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
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'age_group_name' => 'Infants',
      ]);
      AgeGroup::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'age_group_name' => 'Toddlers',
      ]);
      AgeGroup::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'age_group_name' => 'Pre-K',
      ]);
      AgeGroup::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'age_group_name' => 'Kindergarten',
      ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Baby;

class BabiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Baby::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'first_name' => 'Ryan',
              'last_name' => 'Murphy',
              'dob' => '09-20-2017',
              'allergies' => 'Dairy',
              'address' => '150 Cambridge street, Cambridge 02138',
              'phone_number' => '617-982-8723',
              'parent1_first_name' => 'Donna',
              'parent1_last_name' => 'Murphy',
              'parent2_first_name' => 'Jake',
              'parent1_last_name' => 'Murphy',
              'age_group_id' => '1',
              'classroom_id' =>'1',


              ]);

          Baby::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'first_name' => 'Ari',
              'last_name' => 'Russo',
              'dob' => '03-19-2017',
              'address' => '890 Central Street, Cambridge 02140',
              'phone_number' => '617-234-3434',
              'parent1_first_name' => 'Evelyn',
              'parent1_last_name' => 'Russo',
              'parent2_first_name' => 'Matt',
              'parent2_last_name' => 'Russo',
              'age_group_id' => '1',
              'classroom_id' =>'1',
          ]);

          Baby::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),                    'first_name' => 'Julia',
              'last_name' => 'Meyers',
              'dob' => '02-19-2016',
              'address' => '130 Fayerweather Street, Cambridge 02138',
              'phone_number' => '617-234-3434',
              'parent1_first_name' => 'Jacklyn',
              'parent1_last_name' => 'Meyers',
              'age_group_id' => '2',
              'classroom_id' =>'2',
            ]);
        }
}

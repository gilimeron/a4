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
              'classroom_id' =>'1',
          ]);

          Baby::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),                    'first_name' => 'Julia',
              'last_name' => 'Meyers',
              'dob' => '02-19-2016',
              'address' => '130 Fayerweather Street, Cambridge 02138',
              'phone_number' => '617-234-3434',
              'parent1_first_name' => 'Francessca',
              'parent1_last_name' => 'Meyers',
              'parent2_first_name' => 'Richard',
              'parent2_last_name' => 'Meyers',
              'classroom_id' =>'2',
            ]);

            Baby::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),                    'first_name' => 'Brian',
                'last_name' => 'Lines',
                'dob' => '07-23-2016',
                'address' => '1339 Elm Street, Cambridge 02138',
                'phone_number' => '617-343-111',
                'parent1_first_name' => 'Donna',
                'parent1_last_name' => 'Lines',
                'parent1_first_name' => 'Donald',
                'parent1_last_name' => 'Lines',
                'classroom_id' =>'2',
              ]);

              Baby::insert([
                  'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                  'updated_at' => Carbon\Carbon::now()->toDateTimeString(),                    'first_name' => 'Danielle',
                  'last_name' => 'Greenberg',
                  'dob' => '08-19-2016',
                  'address' => '23 South Street, Cambridge 02142',
                  'phone_number' => '617-343-1341',
                  'parent1_first_name' => 'Maya',
                  'parent1_last_name' => 'Greenberg',
                  'parent2_first_name' => 'Avi',
                  'parent2_last_name' => 'Greenberg',
                  'classroom_id' =>'2',
              ]);

              Baby::insert([
                  'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                  'updated_at' => Carbon\Carbon::now()->toDateTimeString(),                    'first_name' => 'Kathryn',
                  'last_name' => 'Keen',
                  'dob' => '08-23-2016',
                  'address' => '20 Nathan Street, Cambridge 02138',
                  'phone_number' => '617-213-0980',
                  'parent1_first_name' => 'Laura',
                  'parent1_last_name' => 'Keen',
                  'parent1_first_name' => 'Dave',
                  'parent1_last_name' => 'Keen',
                  'classroom_id' =>'3',
                ]);

                Baby::insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'first_name' => 'Adam',
                    'last_name' => 'Petti',
                    'dob' => '08-19-2016',
                    'address' => '120 Jay Street, Cambridge 02138',
                    'phone_number' => '617-333-1234',
                    'parent1_first_name' => 'Rachel',
                    'parent1_last_name' => 'Petti',
                    'classroom_id' =>'3',
                  ]);

                  Baby::insert([
                      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'first_name' => 'Ben',
                      'last_name' => 'Sanderson',
                      'dob' => '01-23-2016',
                      'address' => '88 Elm Street, Cambridge 02138',
                      'phone_number' => '617-111-2312',
                      'parent1_first_name' => 'Dana',
                      'parent1_last_name' => 'Sanderson',
                      'parent2_first_name' => 'Marc',
                      'parent2_last_name' => 'Sanderson',
                      'classroom_id' =>'3',
                    ]);

                  Baby::insert([
                      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'first_name' => 'Dan',
                      'last_name' => 'Bauman',
                      'dob' => '01-19-2015',
                      'address' => '120 North Street, Cambridge 02137',
                      'phone_number' => '617-092-1111',
                      'parent1_first_name' => 'Udi',
                      'parent1_last_name' => 'Bauman',
                      'classroom_id' =>'4',
                    ]);

                  Baby::insert([
                      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'first_name' => 'Evelyn',
                      'last_name' => 'Tanner',
                      'dob' => '01-19-2015',
                      'address' => '11 Beanny Street, Cambridge 02138',
                      'phone_number' => '617-098-2322',
                      'parent1_first_name' => 'Laureen',
                      'parent1_last_name' => 'Tanner',
                      'parent2_first_name' => 'Dave',
                      'parent2_last_name' => 'Tanner',
                      'classroom_id' =>'4',
                    ]);

                  Baby::insert([
                      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'first_name' => 'Lisa',
                      'last_name' => 'Simpson',
                      'dob' => '09-19-2014',
                      'address' => '238 Harvard Street, Cambridge 02138',
                      'phone_number' => '617-987-2222',
                      'parent1_first_name' => 'Homer',
                      'parent1_last_name' => 'Simpson',
                      'classroom_id' =>'5',
                    ]);

                  Baby::insert([
                      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'first_name' => 'Liv',
                      'last_name' => 'Thompson',
                      'dob' => '02-19-2014',
                      'address' => '220 Harvard Street, Cambridge 02138',
                      'phone_number' => '617-155-1235',
                      'parent1_first_name' => 'Marge',
                      'parent1_last_name' => 'Thompson',
                      'classroom_id' =>'6',
                    ]);

                  Baby::insert([
                      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'first_name' => 'Jake',
                      'last_name' => 'Hallman',
                      'dob' => '02-19-2015',
                      'address' => '130 D Street, Cambridge 02138',
                      'phone_number' => '617-133-5433',
                      'parent1_first_name' => 'Rona',
                      'parent1_last_name' => 'Hallman',
                      'parent1_first_name' => 'Tina',
                      'parent1_last_name' => 'Hallman',
                      'classroom_id' =>'7',
                    ]);

                  Baby::insert([
                      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'first_name' => 'Michael',
                      'last_name' => 'Meyers',
                      'dob' => '02-19-2014',
                      'address' => '130 Fayerweather Street, Cambridge 02138',
                      'phone_number' => '617-234-3434',
                      'parent1_first_name' => 'Jacklyn',
                      'parent1_last_name' => 'Meyers',
                      'classroom_id' =>'7',
                    ]);

                  Baby::insert([
                      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'first_name' => 'Michelle',
                      'last_name' => 'Meyers',
                      'dob' => '02-19-2014',
                      'address' => '130 Fayerweather Street, Cambridge 02138',
                      'phone_number' => '617-234-3434',
                      'parent1_first_name' => 'Jacklyn',
                      'parent1_last_name' => 'Meyers',
                      'classroom_id' =>'8',
                    ]);
}
}

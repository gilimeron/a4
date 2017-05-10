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
            'address' => '150 Cambridge street, Cambridge 02138',
            'phone_number' => '617-982-8723',
            'parent1_first_name' => 'Donna',
            'parent1_last_name' => 'Murphy',
            'parent2_first_name' => 'Jake',
            'parent2_last_name' => 'Murphy',
            'classroom_id' =>'1',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Zack',
            'last_name' => 'Ranshaw',
            'dob' => '10-22-2017',
            'address' => '150 Cambridge street, Cambridge 02138',
            'phone_number' => '617-333-2222',
            'parent1_first_name' => 'Lili',
            'parent1_last_name' => 'Ranshaw',
            'parent2_first_name' => 'Dan',
            'parent2_last_name' => 'Ranshaw',
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
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Abigail',
            'last_name' => 'Meron',
            'dob' => '08-23-2016',
            'address' => '160 Cambridgepark Drive, Cambridge 02142',
            'phone_number' => '617-222-3542',
            'parent1_first_name' => 'Gili',
            'parent1_last_name' => 'Meron',
            'parent2_first_name' => 'Eran',
            'parent2_last_name' => 'Meron',
            'classroom_id' =>'1',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Andy',
            'last_name' => 'Davidson',
            'dob' => '09-12-2016',
            'address' => '150 Cambridgepark Drive, Cambridge 02142',
            'phone_number' => '617-097-2242',
            'parent1_first_name' => 'Linda',
            'parent1_last_name' => 'Davidson',
            'parent2_first_name' => 'Eric',
            'parent2_last_name' => 'Davidson',
            'classroom_id' =>'1',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Matt',
            'last_name' => 'Chaves',
            'dob' => '10-01-2016',
            'address' => '20 Cambridge street, Cambridge 02141',
            'phone_number' => '617-092-2222',
            'parent1_first_name' => 'Lean',
            'parent1_last_name' => 'Chaves',
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
            'parent2_first_name' => 'Donald',
            'parent2_last_name' => 'Lines',
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
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),                    'first_name' => 'Ella',
            'last_name' => 'Perkins',
            'dob' => '08-19-2016',
            'address' => '2 School Street 02142',
            'phone_number' => '617-333-2212',
            'parent1_first_name' => 'Beth Ann',
            'parent1_last_name' => 'Perkins',
            'classroom_id' =>'2',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),                    'first_name' => 'Marc',
            'last_name' => 'Perkins',
            'dob' => '08-19-2016',
            'address' => '2 School Street 02142',
            'phone_number' => '617-333-2212',
            'parent1_first_name' => 'Beth Ann',
            'parent1_last_name' => 'Perkins',
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
            'parent2_first_name' => 'Dave',
            'parent2_last_name' => 'Keen',
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
            'first_name' => 'Alex',
            'last_name' => 'Moony',
            'dob' => '01-23-2016',
            'address' => '100 Saint Street, Cambridge 02138',
            'phone_number' => '617-754-2483',
            'parent1_first_name' => 'Rachel',
            'parent1_last_name' => 'Moony',
            'parent2_first_name' => 'Rich',
            'parent2_last_name' => 'Moony',
            'classroom_id' =>'3',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Patrick',
            'last_name' => 'Obrian',
            'dob' => '01-23-2016',
            'address' => '20 Third Street, Cambridge 02138',
            'phone_number' => '617-145-3423',
            'parent1_first_name' => 'Dana',
            'parent1_last_name' => 'Obrian',
            'parent2_first_name' => 'Dan',
            'parent2_last_name' => 'Obrian',
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
            'dob' => '01-16-2015',
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
            'first_name' => 'Albert',
            'last_name' => 'Malikov',
            'dob' => '02-01-2015',
            'address' => '98 Cenral Street, Cambridge 02138',
            'phone_number' => '617-111-1122',
            'parent1_first_name' => 'Sarah',
            'parent1_last_name' => 'Malikov',
            'classroom_id' =>'4',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Sarah',
            'last_name' => 'Jones',
            'dob' => '03-01-2015',
            'address' => '198 Main Street, Cambridge 02138',
            'phone_number' => '617-325-2342',
            'parent1_first_name' => 'Lorain',
            'parent1_last_name' => 'Jones',
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
            'first_name' => 'Maya',
            'last_name' => 'Zuckerberg',
            'dob' => '07-04-2014',
            'address' => '200 Third Street, Cambridge 02138',
            'phone_number' => '617-111-1234',
            'parent1_first_name' => 'Rachel',
            'parent1_last_name' => 'Zuckerberg',
            'parent2_first_name' => 'Jake',
            'parent2_last_name' => 'Zuckerberg',
            'classroom_id' =>'5',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Dylan',
            'last_name' => 'Cohn',
            'dob' => '08-19-2014',
            'address' => '100 Flagg Street, Cambridge 02137',
            'phone_number' => '617-465-5334',
            'parent1_first_name' => 'Natasha',
            'parent1_last_name' => 'Cohn',
            'parent2_first_name' => 'David',
            'parent2_last_name' => 'Cohn',
            'classroom_id' =>'5',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Dean',
            'last_name' => 'Collins',
            'dob' => '07-13-2014',
            'address' => '100 First Street, Cambridge 02138',
            'phone_number' => '617-232-1232',
            'parent1_first_name' => 'Nataly',
            'parent1_last_name' => 'Collins',
            'parent2_first_name' => 'Mark',
            'parent2_last_name' => 'Collins',
            'classroom_id' =>'5',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Lia',
            'last_name' => 'Shcaffer',
            'dob' => '08-10-2014',
            'address' => '20 Main Street, Cambridge 02138',
            'phone_number' => '617-222-7644',
            'parent1_first_name' => 'Nora',
            'parent1_last_name' => 'Shcaffer',
            'parent2_first_name' => 'Elon',
            'parent2_last_name' => 'Shcaffer',
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
            'first_name' => 'Stella',
            'last_name' => 'Williams',
            'dob' => '04-14-2014',
            'address' => '2000 Cambridge Street, Cambridge 02138',
            'phone_number' => '617-232-4322',
            'parent1_first_name' => 'Nate',
            'parent1_last_name' => 'Williams',
            'parent2_first_name' => 'Jack',
            'parent2_last_name' => 'Williams',
            'classroom_id' =>'6',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Tiffany',
            'last_name' => 'Krull',
            'dob' => '02-02-2014',
            'address' => '11 Central Street, Cambridge 02138',
            'phone_number' => '617-111-2223',
            'parent1_first_name' => 'Sidney',
            'parent1_last_name' => 'Krull',
            'parent2_first_name' => 'Steve',
            'parent2_last_name' => 'Krull',
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
            'parent2_first_name' => 'Tina',
            'parent2_last_name' => 'Hallman',
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
            'first_name' => 'Kelly',
            'last_name' => 'Clark',
            'dob' => '01-08-2014',
            'address' => '11 Throwbridge Street, Cambridge 02138',
            'phone_number' => '617-982-4322',
            'parent1_first_name' => 'Moira',
            'parent1_last_name' => 'Clark',
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

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Shirly',
            'last_name' => 'Weiss',
            'dob' => '04-20-2014',
            'address' => '80 North Street, Cambridge 02140',
            'phone_number' => '617-544-3423',
            'parent1_first_name' => 'Sidney',
            'parent1_last_name' => 'Weiss',
            'parent2_first_name' => 'Jack',
            'parent2_last_name' => 'Weiss',
            'classroom_id' =>'8',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'David',
            'last_name' => 'Jackson',
            'dob' => '04-20-2014',
            'address' => '110 South Street, Cambridge 02142',
            'phone_number' => '617-246-1234',
            'parent1_first_name' => 'Sarah',
            'parent1_last_name' => 'Jackson',
            'classroom_id' =>'8',
        ]);

        Baby::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Marion',
            'last_name' => 'Jablansky',
            'dob' => '05-11-2014',
            'address' => '97 Summer Street, Cambridge 02138',
            'phone_number' => '617-097-1252',
            'parent1_first_name' => 'Michael',
            'parent1_last_name' => 'Jablansky',
            'classroom_id' =>'8',
        ]);
}
}

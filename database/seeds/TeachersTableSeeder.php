<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Teacher::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'first_name' => 'Margaret',
              'last_name' => 'Shaw',
              'address' => '248 First street, Cambridge 02139',
              'phone_number' => '617-234-4323',
              'email' => 'mshaw12@gmail.com',
          ]);
        Teacher::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'first_name' => 'Linda',
                'last_name' => 'Sand',
                'address' => '248 Second street, Cambridge 02139',
                'phone_number' => '617-333-2344',
                'email' => 'linde3@gmail.com',
            ]);
        Teacher::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'first_name' => 'Rose',
                'last_name' => 'Gladstein',
                'address' => '222 Third street, Cambridge 02139',
                'phone_number' => '617-233-9999',
                'email' => 'rosegla333@gmail.com',
            ]);
        Teacher::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'first_name' => 'Mira',
                'last_name' => 'Occonell',
                'address' => '55 Fifth street, Cambridge 02139',
                'phone_number' => '617-232-1233',
                'email' => 'mira@gmail.com',
            ]);
        Teacher::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'first_name' => 'Deedee',
                'last_name' => 'Sylverman',
                'address' => '5 Faith street, Cambridge 02139',
                'phone_number' => '617-433-2343',
                'email' => 'deed@gmail.com',
            ]);
    }
}

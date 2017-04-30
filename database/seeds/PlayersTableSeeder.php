<?php

use Illuminate\Database\Seeder;
use App\Player;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Player::insert([
                  'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                  'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                  'first_name' => 'Ryan',
                  'last_name' => 'Murphy',
                  'age' => 30,
                  'email' => 'rmurphy@gmail.com'
              ]);

          Player::insert([
                  'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                  'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                  'first_name' => 'Ari',
                  'last_name' => 'Russo',
                  'age' => 36,
                  'email' => 'russo73@gmail.com'
              ]);

          Player::insert([
                  'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                  'updated_at' => Carbon\Carbon::now()->toDateTimeString(),                    'first_name' => 'Julia',
                  'last_name' => 'Meyers',
                  'age' => 32,
                  'email' => 'jmey@gmail.com'
              ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Game;
use App\Player;
use App\Meeting;

class MeetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      {
        Meeting::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'meeting_date' => Carbon\Carbon::now()->toDateTimeString(),
            'player_id' => '1',
            'game_id' => '1',
        ]);
        Meeting::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'meeting_date' => Carbon\Carbon::now()->toDateTimeString(),
            'player_id' => '2',
            'game_id' => '1',
        ]);
      }
    }
}

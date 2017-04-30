<?php

use Illuminate\Database\Seeder;
use App\Game;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Game::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'game_name' => 'Risk',
          'players' => '2',
          'age_range' => '10+',
          'estimated_play_time' => '2 hours',
          'genre' => 'Strategy',
      ]);
      Game::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'game_name' => 'Exploding kittens',
          'players' => '2',
          'age_range' => '16+',
          'estimated_play_time' => '30 minutes',
          'genre' => 'Strategy',
      ]);
    }
}

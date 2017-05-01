<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  /**
  * Relationship method
  */
  public function meetings() {
  # Game has many Meetings - one to many relationships
      return $this->hasMany('App\Meeting');
  }

  public static function gamesForDropdown() {

      $games = Game::orderBy('game_name','ASC')->get();

      $gamesForDropdown = [];

      foreach($games as $game) {
          $gamesForDropdown[$game['id']] = $game->game_name;
      }
      return $gamesForDropdown;
  }
}

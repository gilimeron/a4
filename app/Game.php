<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  /**
  * Relationship method
  */
  public function meetings() {
  # Player has many Meetings
  # Define a one-to-many relationship.
      return $this->hasMany('App\Meeting');
  }

  public static function getGamesForCheckboxes() {

      $players = Player::orderBy('first_name','ASC')->get();

      $playersForCheckboxes = [];

      foreach($players as $player) {
          $playersForCheckboxes[$player['id']] = $player->first_name;
      }
      return $playersForCheckboxes;
  }
}

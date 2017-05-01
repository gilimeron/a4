<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
  /**
  * Relationship method
  */
  public function meeting() {
  # Player has many meetings - one-to-many relationship.
      return $this->belongsToMany('App\Meeting');
  }

  public static function PlayersForCheckboxes() {

      $players = Player::orderBy('first_name','ASC')->get();

      $playersForCheckboxes = [];

      foreach($players as $player) {
          $playersForCheckboxes[$player['id']] = $player->first_name.', '.$player->last_name;
      }
      return $playersForCheckboxes;
  }

}

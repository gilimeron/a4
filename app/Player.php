<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    /**
  	* Relationship method
  	*/
    public function meetings() {
  	# Player has many Meetings
  	# Define a one-to-many relationship.
    		return $this->hasMany('App\Meeting');
    }

    public static function getPlayersForCheckboxes() {

        $games = Game::orderBy('game_name','ASC')->get();

        $gamesForCheckboxes = [];

        foreach($games as $game) {
            $gamesForCheckboxes[$game['id']] = $game->game_name;
        }
        return $gamesForCheckboxes;
    }

}

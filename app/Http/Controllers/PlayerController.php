<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Player;
use App\Game;
use Session;

class PlayerController extends Controller
{

    /**
    * GET
    * /players
    */
    public function index(Request $request) {

        $players = Player::orderBy('first_name')->get(); # Query DB

        $newPlayers = Player::orderBy('created_at', 'descending')->limit(3)->get(); # Query DB

        return view('players.index')->with([
            'players' => $players,
            'newPlayers' => $newPlayers,
        ]);
    }

    /**
    * GET
    * /players/new
    * Display the form to add a new player
    */
    public function addPlayer(Request $request) {

        return view('players.new');
    }


    /**
    * POST
    * /players/new
    * Process the form for adding a new player
    */
    public function saveNewPlayer(Request $request) {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);

        # Add new player to database
        $player = new Player();
        $player->first_name = $request->first_name;
        $player->last_name = $request->last_name;
        $player->age = $request->age;
        $player->email = $request->email;
        $player->save();

        Session::flash('message', 'The player '.$request->first_name.' was added to the database.');

        # Redirect the user to game index
        return redirect('/players');
    }


    /**
    * GET
    * /games/edit/{id}
    * Show form to edit a player
    */
    public function editPlayer($id) {

        $player = Player::find($id);

        if(is_null($player)) {
            Session::flash('message', 'The player you requested was not found.');
            return redirect('/players');
        }

        return view('players.edit')->with([
            'id' => $id,
            'player' => $player,
        ]);

    }

    /**
    * POST
    * /players/edit
    * Process form to save edits to a player
    */
    public function saveEdit(Request $request) {

        $this->validate($request, [
        ]);

        $player = Player::find($request->id);

        # Edit player in the database
        $player->first_name = $request->first_name;
        $player->last_name = $request->last_name;
        $player->age = $request->age;
        $player->email = $request->email;

        $player->save();

        Session::flash('message', 'Your changes to '.$player->first_name.' were saved.');
        return redirect('/players/edit/'.$request->id);

    }


    /**
    * GET
    * Page to confirm deletion
    */
    public function confirmPlayerDeletion($id) {

        $player = Player::find($id);

        if(!$player) {
            Session::flash('message', 'Player not found.');
            return redirect('/players');
        }

        return view('players.delete')->with('player', $player);
    }


    /**
    * POST
    * Actually delete the player
    */
    public function delete(Request $request) {

        $player = Player::find($request->id);

        if(!$player) {
            Session::flash('message', 'Deletion failed; player not found.');
            return redirect('/players');
        }

        #$player->meetings()->detach();

        $player->delete();

        # Finish
        Session::flash('message', $player->first_name.' was deleted.');
        return redirect('/players');
    }

}

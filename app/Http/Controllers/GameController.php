<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Player;
use App\Game;
use Session;

class GameController extends Controller
{

    /**
    * GET
    * /games
    */
    public function index(Request $request) {

        $games = Game::orderBy('game_name')->get(); # Query DB

        $newGames = Game::orderBy('created_at', 'descending')->limit(3)->get(); # Query DB

        return view('games.index')->with([
            'games' => $games,
            'newGames' => $newGames,
        ]);
    }

    /**
    * GET
    * /games/new
    * Display the form to add a new game
    */
    public function addGame(Request $request) {

        return view('games.new');
    }


    /**
    * POST
    * /games/new
    * Process the form for adding a new game
    */
    public function saveNewGame(Request $request) {

        $this->validate($request, [
            'game_name' => 'required',
        ]);

        # Add new game to database
        $game = new Game();
        $game->game_name = $request->game_name;
        $game->players = $request->players;
        $game->age_range = $request->age_range;
        $game->estimated_play_time = $request->estimated_play_time;
        $game->save();

        Session::flash('message', 'The game '.$request->game_name.' was added to the database.');

        # Redirect the user to games index
        return redirect('/games');
    }


    /**
    * GET
    * /games/edit/{id}
    * Show form to edit a game
    */
    public function editGame($id) {

        $game = Game::find($id);

        if(is_null($game)) {
            Session::flash('message', 'The game you requested was not found.');
            return redirect('/games');
        }

        return view('games.edit')->with([
            'id' => $id,
            'game' => $game,
        ]);

    }

    /**
    * POST
    * /games/edit
    * Process form to save edits to a game
    */
    public function saveGame(Request $request) {

        $this->validate($request, [
        ]);

        $game = Game::find($request->id);

        # Edit a game in the database
        $game->game_name = $request->game_name;
        $game->players = $request->players;
        $game->age_range = $request->age_range;
        $game->estimated_play_time = $request->estimated_play_time;
        $game->genre = $request->genre;

        $game->save();

        Session::flash('message', 'Your changes to '.$game->game_name.' were saved.');
        return redirect('/games');

    }


    /**
    * GET
    * Page to confirm deletion
    */
    public function confirmGameDeletion($id) {

        $game = Game::find($id);

        if(!$game) {
            Session::flash('message', 'Game not found.');
            return redirect('/games');
        }

        return view('games.delete')->with('game', $game);
    }


    /**
    * POST
    * Actually delete the game
    */
    public function delete(Request $request) {

        $game = Game::find($request->id);

        if(!$game) {
            Session::flash('message', 'Deletion failed; game not found.');
            return redirect('/games');
        }

        #$game->meetings()->detach();

        $game->delete();

        # Finish
        Session::flash('message', $game->game_name.' was deleted.');
        return redirect('/games');
    }

}

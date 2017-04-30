<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Player;
use App\Game;
use App\Meeting;
use Session;

class MeetingController extends Controller
{

    /**
    * GET
    * /meetings
    */
    public function index(Request $request) {

        $meetings = Meeting::orderBy('meeting_date')->get(); # Query DB
        $newMeetings = Meeting::orderBy('created_at', 'descending')->limit(3)->get(); # Query DB

        return view('meetings.index')->with([
            'meetings' => $meetings,
            'newMeetings' => $newMeetings,
        ]);
    }


    /**
    * GET
    * /meetings/new
    * Display the form to add a new book
    */
    public function addMeeting(Request $request) {

        $gamesForCheckboxes = Game::getGamesForCheckboxes();
        $playersForCheckboxes = Player::getPlayersForCheckboxes();

        return view('meetings.new')->with([
            'gamesForCheckboxes' => $gamesForCheckboxes,
            'playersForCheckboxes' => $playersForCheckboxes
        ]);
    }


    /**
    * POST
    * /meetings/new
    * Process the form for adding a new game
    */
    public function saveGame(Request $request) {

        #Custom error message
        $messages = [
            'game_id.not_in' => 'No games were selected',
            'player_id.not_in' => 'No players were selected',
        ];

        $this->validate($request, [
            'game_id' => 'not_in:0',
            'player_id' => 'not_in:0',
            'game_date' => 'required',
        ], $messages);

        # Add new game to database
        $meeting = new Meeting();
        $meeting->meeting_date = $request->meeting_date;
        $meeting->players = $request->players;
        $meeting->games = $request->games;
        $game->save();

        Session::flash('message', 'The meeting '.$request->game_name.' was added to the database.');

        # Redirect the user to book index
        return redirect('/meetings');
    }


    /**
    * GET
    * /books/edit/{id}
    * Show form to edit a book
    */
    public function editGame($id) {

        $game = Game::find($id);

        if(is_null($game)) {
            Session::flash('message', 'The game you requested was not found.');
            return redirect('/games');
        }

        #$authorsForDropdown = Author::getAuthorsForDropdown();

        #$tagsForCheckboxes = Tag::getTagsForCheckboxes();

        # Create a simple array of just the tag names for tags associated with this book;
        # will be used in the view to decide which tags should be checked off
        #$tagsForThisBook = [];
        #foreach($book->tags as $tag) {
      #      $tagsForThisBook[] = $tag->name;
      #  }
        # Results in an array like this: $tagsForThisBook => ['novel','fiction','classic'];

        return view('games.edit')->with([
            'id' => $id,
            'game' => $game,
          #  'authorsForDropdown' => $authorsForDropdown,
        #    'tagsForCheckboxes' => $tagsForCheckboxes,
      #      'tagsForThisBook' => $tagsForThisBook,
        ]);

    }

    /**
    * POST
    * /games/edit
    * Process form to save edits to a game
    */
    public function saveEdit(Request $request) {

        # Custom error message
        #$messages = [
        #    'author_id.not_in' => 'Author not selected.',
        #];

        $this->validate($request, [
        ]);

        $game = Game::find($request->id);

        # Edit book in the database
        $game->game_name = $request->game_name;
        $game->players = $request->players;
        $game->age_range = $request->age_range;
        $game->estimated_play_time = $request->estimated_play_time;
        $game->genre = $request->genre;

        # If there were tags selected...
        #if($request->tags) {
        #    $tags = $request->tags;
        #}
        # If there were no tags selected (i.e. no tags in the request)
        # default to an empty array of tags
        #else {
        #    $tags = [];
        #}

        # Above if/else could be condensed down to this: $tags = ($request->tags) ?: [];

        # Sync tags
        #$book->tags()->sync($tags);
        $game->save();

        Session::flash('message', 'Your changes to '.$game->game_name.' were saved.');
        return redirect('/games/edit/'.$request->id);

    }


    /**
    * GET
    * Page to confirm deletion
    */
    public function confirmGameDeletion($id) {

        # Get the book they're attempting to delete
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

        # Get the book to be deleted
        $game = Game::find($request->id);

        if(!$game) {
            Session::flash('message', 'Deletion failed; game not found.');
            return redirect('/games');
        }

        #$book->tags()->detach();

        $game->delete();

        # Finish
        Session::flash('message', $game->game_name.' was deleted.');
        return redirect('/games');
    }

}

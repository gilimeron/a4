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

        $meetings = Meeting::get();
        $games = Game::get();


        return view('meetings.index')->with([
            'meetings' => $meetings,
            'games' => $games,
        ]);
    }


    /**
    * GET
    * /meetings/new
    * Display the form to add a new meeting
    */
    public function addMeeting(Request $request) {

        $gamesForDropdown = Game::gamesForDropdown();
        $playersForCheckboxes = Player::playersForCheckboxes();

        return view('meetings.new')->with([
            'gamesForDropdown' => $gamesForDropdown,
            'playersForCheckboxes' => $playersForCheckboxes,
        ]);
    }


    /**
    * POST
    * /meetings/new
    * Process the form for adding a new meeting
    */
    public function saveNewMeeting(Request $request) {

        #Custom error message
        $messages = [
            'game_id.not_in' => 'No games were selected',

        ];

        $this->validate($request, [
            'game_id' => 'not_in:0',
        #    'player_id' => 'required',
            'meeting_date' => 'required'
        ], $messages);

        # Add new meeting to database
        $meeting = new Meeting();
        $meeting->meeting_date = $request->meeting_date;
        $meeting->game_id = $request->game_id;
        #$meeting->save();
        $meeting->meeting_id = $meeting->id;

        $players = $request->player_id;
        $meeting->players_id->sync($players);

        $meeting->save();

        Session::flash('message', 'The meeting was added to the database.');

        # Redirect the user to book index
        return redirect('/meetings');
    }

}

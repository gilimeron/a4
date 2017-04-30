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
    * Display the form to add a new meeting
    */
    public function addMeeting(Request $request) {

        $gamesForCheckboxes = Game::getGamesForCheckboxes();
        $playersForCheckboxes = Player::getPlayersForCheckboxes();

        return view('meetings.new')->with([
            'gamesForCheckboxes' => $gamesForCheckboxes,
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
            'player_id.not_in' => 'No players were selected',
        ];

        $this->validate($request, [
            'game_id' => 'required',
            'player_id' => 'required',
            'meeting_date' => 'required',
        ], $messages);

        # Add new meeting to database
        $meeting = new Meeting();
        $meeting->meeting_date = $request->meeting_date;
        $meeting->players = $request->player_id;
        $meeting->games = $request->game_id;
        $meeting->save();

        Session::flash('message', 'The meeting was added to the database.');

        # Redirect the user to book index
        return redirect('/meetings');
    }

}

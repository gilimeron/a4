<?php

use Illuminate\Database\Seeder;
use App\Player;
use App\Meeting;

class MeetingPlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      #loop through meetings and associate player ids
      $meetings = [
        '1'=>['1','3'], '2'=>['1','2','3'],'3'=>['2']
      ];

      foreach($meetings as $id=>$players) {

            $meeting = Meeting::where('id','like',$id)->first();
            # loop through each player for the meeting
            foreach($players as $playerId) {
                $player_id = Player::where('id','LIKE',$playerId)->first();
                # Connect this player to this meeting
                $meeting->players()->save($player_id);
            }
        }
      }
}

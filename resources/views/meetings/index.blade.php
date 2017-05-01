@extends('layouts.master')

@section('title')
    All the meetings
@endsection

@section('content')
    <h1> All scheduled meetings </h2>
    <div class='meeting'>
        @foreach($meetings as $meeting)
            <li>
                Date:{{ $meeting->meeting_date }},
                <br/>
                @foreach($games as $game)
                    @if ($game->id == $meeting->game_id)
                        Game:{{ $game->game_name }}
                    @endif
                @endforeach
            </li>
        @endforeach
    </div>
@endsection

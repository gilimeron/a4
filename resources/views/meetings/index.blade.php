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
                Players:{{ $meeting->player_id }}, 
                Games:{{ $meeting->game_id }}
            </li>
        @endforeach
    </div>
@endsection

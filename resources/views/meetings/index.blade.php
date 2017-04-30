@extends('layouts.master')

@section('title')
    All the meetings
@endsection

@section('content')
    <h1> Here is a list of all the meetings </h2>
    <div class='meeting'>
        @foreach($meetings as $meeting)
            <h2>{{ $meeting->meeting_date }}</h2>
            <h2>{{ $meeting->player_id }}</h2>
            <h2>{{ $meeting->game_id }}</h2>
        @endforeach
    </div>
@endsection

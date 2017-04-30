@extends('layouts.master')

@section('title')
    All the games
@endsection

@section('content')
    <h1> Here is a list of all the games </h2>
    <div class='game'>
        @foreach($games as $game)
            <h2>{{ $game->game_name }}</h2>
            <a href='/games/edit/{{ $game->id}}'> Edit </a> ,
            <a href='/games/delete/{{ $game->id}}'> Delete </a>
        @endforeach
    </div>
@endsection

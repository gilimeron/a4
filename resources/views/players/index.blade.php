@extends('layouts.master')

@section('title')
    All the players
@endsection

@section('content')
    <h1> Here is a list of all the players </h2>
    <div class='player'>
        @foreach($players as $player)
            <h2>{{ $player->first_name }} {{ $player->last_name }}</h2>
            <a href='/players/edit/{{ $player->id}}'> Edit </a> ,  
            <a href='/players/delete/{{ $player->id}}'> Delete </a>

        @endforeach
    </div>
@endsection

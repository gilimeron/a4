{{-- /resources/views/games/edit.blade.php --}}
@extends('layouts.master')

@section('title')
    Edit game: {{ $game->game_name }}
@endsection

@push('head')
    <link href='/css/styles.css' rel='stylesheet'>
@endpush

@section('content')
    <h1>Edit</h1>
    <h2>{{ $game->game_name }}</h2>

    <form method='POST' action='/games/edit'>
        {{ csrf_field() }}

        <p>* Required fields</p>

        <input type='hidden' name='id' value='{{$game->id}}'>

        <label for='game_name'>* Game name</label>
        <input type='text' name='game_name' id='game_name' value='{{ old('game_name', $game->game_name) }}'>

        <label for='players'>Number of players</label>
        <input type='text' name='players' id='players' value='{{ old('players', $game->players) }}'>

        <label for='age_range'>Age range</label>
        <input type='text' name='age_range' id='age_range' value='{{ old('age_range', $game->age_range) }}'>

        <label for='estimated_play_time'>Estimated play time</label>
        <input type='text' name='estimated_play_time' id='estimated_play_time' value='{{ old('estimated_play_time', $game->estimated_play_time) }}'>

        <label for='genre'>Genre</label>
        <input type='text' name='genre' id='genre' value='{{ old('genre', $game->genre) }}'>


        <br><input class='btn btn-primary' type='submit' value='Save changes'><br><br>

    </form>



@endsection

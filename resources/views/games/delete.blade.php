@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $game->game_name }}
@endsection

@section('content')

    <h1>Confirm deletion</h1>
    <form method='POST' action='/games/delete'>

        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $game->id }}'?>

        <h2>Are you sure you want to delete <em>{{ $game->game_name }}</em>?</h2>

        <input type='submit' value='Yes, delete this game.' class='btn btn-danger'>

    </form>

@endsection

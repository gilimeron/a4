@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $player->first_name }}
@endsection

@section('content')

    <h1>Confirm deletion</h1>
    <form method='POST' action='/players/delete'>

        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $player->id }}'?>

        <h2>Are you sure you want to delete <em>{{ $player->first_name }}</em>?</h2>

        <input type='submit' value='Yes, delete this player.' class='btn btn-danger'>

    </form>

@endsection

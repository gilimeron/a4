{{-- /resources/views/players/edit.blade.php --}}
@extends('layouts.master')

@section('title')
    Edit player: {{ $player->first_name }}
@endsection

@section('content')
    <h1>Edit</h1>
    <h2>{{ $player->first_name }}</h2>

    <form method='POST' action='/players/edit'>
        {{ csrf_field() }}

        <p>* Required fields</p>

        <input type='hidden' name='id' value='{{$player->id}}'>

        <label for='first'>* first name</label>
        <input type='text' name='first_name' id='first_name' value='{{ old('first_name', $player->first_name) }}'>

        <label for='last'>* last name</label>
        <input type='text' name='last_name' id='last_name' value='{{ old('last_name', $player->last_name) }}'>

        <label for='age'>Age</label>
        <input type='number' name='age' id='age' value='{{ old('age', $player->age) }}'>

        <label for='email'>email address</label>
        <input type='text' name='email' id='email' value='{{ old('email', $player->email) }}'>

        <br><input class='btn btn-primary' type='submit' value='Save changes'><br><br>

    </form>



@endsection

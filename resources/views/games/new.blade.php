{{-- /resources/views/games/new.blade.php --}}
@extends('layouts.master')

@section('title')
    Add a new game
@endsection

@push('head')
    <link href='/css/styles.css' rel='stylesheet'>
@endpush


@section('content')
    <h1>Add a new game</h1>

    <form method='POST' action='/games/new'>
        {{ csrf_field() }}

        <small>* Required fields</small>

        <label for='game_name'>* Game name</label>
        <input type='text' name='game_name' id='game_name' value='{{ old('game_name', 'Settlers of Catan') }}'>

        <label for='players'>Number of players</label>
        <input type='text' name='players' id='players' value='{{ old('players', 2-4) }}'>

        <label for='age'>Age range</label>
        <input type='text' name='age' id='age' value='{{ old('age', '7-70') }}'>

        <label for='time'>Estimated play time</label>
        <input type='text' name='time' id='time' value='{{ old('time', '2 hours') }}'>

        <label for='genre'>Genre</label>
        <input type='text' name='genre' id='genre' value='{{ old('genre', 'strategy') }}'>


        @if(count($errors) > 0)
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <input class='btn btn-primary' type='submit' value='Add new game'>
    </form>

@endsection

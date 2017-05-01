{{-- /resources/views/meetings/new.blade.php --}}
@extends('layouts.master')

@section('title')
    Add a new meeting
@endsection

@section('content')
    <h1>Add a new meeting</h1>

    <form method='POST' action='/meetings/new'>
        {{ csrf_field() }}

        <small>* Required fields</small>

        <label for='meeting_date'>* Meeting date</label>
        <input type='text' name='meeting_date' id='meeting_date' value='{{ old('meeting_date', '') }}'>

        <label for='game_id'>* Game:</label>
        <select id='game_id' name='game_id'>
            <option value='0'>Choose</option>
            @foreach($gamesForDropdown as $game_id => $game_name)
                <option value='{{ $game_id }}'>
                    {{ $game_name }}
                </option>
            @endforeach
        </select>

        <label>* Players</label>
        <ul id='players'>
            @foreach($playersForCheckboxes as $id => $first_name)
                <li><input
                    type='checkbox'
                    value='{{ $id }}'
                    id='player_{{ $id }}'
                    name='players[]'
                >&nbsp;
                <label for='player_{{ $id }}'>{{ $first_name }}</label></li>
            @endforeach
        </ul>

        @if(count($errors) > 0)
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <input class='btn btn-primary' type='submit' value='Add new meeting'>
    </form>

@endsection

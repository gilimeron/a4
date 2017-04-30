{{-- /resources/views/players/new.blade.php --}}
@extends('layouts.master')

@section('title')
    Add a new player
@endsection

@push('head')
    <link href='/css/styles.css' rel='stylesheet'>
@endpush


@section('content')
    <h1>Add a new player</h1>

    <form method='POST' action='/players/new'>
        {{ csrf_field() }}

        <small>* Required fields</small>

        <label for='first_name'>* First name</label>
        <input type='text' name='first_name' id='first_name' value='{{ old('first_name', 'John') }}'>

        <label for='last_name'>* Last name</label>
        <input type='text' name='last_name' id='last_name' value='{{ old('last_name', 'Doh') }}'>

        <label for='age'>Age</label>
        <input type='text' name='age' id='age' value='{{ old('age', '30') }}'>

        <label for='email'>email Address</label>
        <input type='text' name='email' id='email' value='{{ old('email', 'johnd@gmail.com') }}'>


        @if(count($errors) > 0)
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <input class='btn btn-primary' type='submit' value='Add new player'>
    </form>

@endsection
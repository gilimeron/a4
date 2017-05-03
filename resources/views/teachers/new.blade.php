{{-- /resources/views/teachers/new.blade.php --}}
@extends('layouts.master')

@section('title')
    Add a new teacher
@endsection

@section('content')
    <h2>Add a new teacher</h2>

    <form method='POST' action='/teachers/new'>
        {{ csrf_field() }}

        <small>* Required fields</small>

        <label for='first_name'>* First name</label>
        <input type='text' name='first_name' id='first_name' value='{{ old('first_name', '') }}'>

        <label for='last_name'>* Last name</label>
        <input type='text' name='last_name' id='last_name' value='{{ old('last_name', '') }}'>

        <label for='address'>* Address</label>
        <input type='text' name='address' id='address' value='{{ old('address', '') }}'>

        <label for='phone_number'>* Phone number</label>
        <input type='text' name='phone_number' id='phone_number' value='{{ old('phone_number', '') }}'>

        <label for='email'>* email Address</label>
        <input type='text' name='email' id='email' value='{{ old('email', '') }}'>

        <label for='teacher_type'>* Teacher type</label>
        <input type='text' name='teacher_type' id='teacher_type' value='{{ old('teacher_type', '') }}'>

        @if(count($errors) > 0)
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <input class='btn btn-primary' type='submit' value='Save'>
        <input class='btn btn-primary' type="reset">
    </form>

@endsection

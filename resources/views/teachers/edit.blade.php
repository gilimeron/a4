{{-- /resources/views/teachers/edit.blade.php --}}
@extends('layouts.master')

@section('title')
    Edit teacher: {{ $teacher->first_name }} {{ $teacher->last_name }}
@endsection

@section('content')
    <h2>Edit: {{ $teacher->first_name }} {{ $teacher->last_name }}</h2>

    <form method='POST' action='/teachers/edit'>
        {{ csrf_field() }}

        <p>* Required fields</p>

        <input type='hidden' name='id' value='{{$teacher->id}}'>

        <label for='first_name'>* first name</label>
        <input type='text' name='first_name' id='first_name' value='{{ old('first_name', $teacher->first_name) }}'>

        <label for='last_name'>* last name</label>
        <input type='text' name='last_name' id='last_name' value='{{ old('last_name', $teacher->last_name) }}'>

        <label for='address'>* Address</label>
        <input type='text' name='address' id='address' value='{{ old('address', $teacher->address) }}'>

        <label for='phone_number'>* Phone number</label>
        <input type='text' name='phone_number' id='phone_number' value='{{ old('phone_number', $teacher->phone_number) }}'>

        <label for='email'>* email address</label>
        <input type='text' name='email' id='email' value='{{ old('email', $teacher->email) }}'>

        <label>Classrooms</label>
        <ul id='classrooms'>
            @foreach($classroomList as $id => $classroom_name)
                <li><input
                    type='checkbox' value='{{ $id }}' id='classroom_{{ $id }}'
                    name='classrooms[]'
                    {{ (in_array($classroom_name, $classroomsForTeacher)) ? 'CHECKED' : '' }}>
                    <label for='classroom_{{ $id }}'>{{ $classroom_name }}
                    </label>
                </li>
            @endforeach
        </ul>

        <br><input class='btn btn-primary' type='submit' value='Save changes'><br><br>

    </form>

@endsection

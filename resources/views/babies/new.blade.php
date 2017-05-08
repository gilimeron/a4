{{-- /resources/views/babies/new.blade.php --}}
@extends('layouts.master')

@section('title')
    Add a new child
@endsection

@section('content')
    <h2>Add a new child</h2>

    <form method='POST' action='/babies/new'>
        {{ csrf_field() }}

        <small>* Required fields</small>

        <label for='first_name'>* First name</label>
        <input type='text' name='first_name' id='first_name' value='{{ old('first_name') }}'>

        <label for='last_name'>* Last name</label>
        <input type='text' name='last_name' id='last_name' value='{{ old('last_name') }}'>

        <label for='dob'>* Date of birth</label>
        <input type='date' name='dob' id='dob' value='{{ old('dob') }}'>

        <label for='classroom_id'>* Classroom:</label>
        <select id='classroom_id' name='classroom_id'>
            <option value='0'>Choose</option>
            @foreach($classroomList as $classroom_id => $classRoom)
                <option value='{{ $classroom_id }}'>
                    {{ $classRoom }}
                </option>
            @endforeach
        </select>

        <label for='address'>* Address</label>
        <input type='text' name='address' id='address' value='{{ old('address') }}'>

        <label for='phone_number'>* Phone number</label>
        <input type='text' name='phone_number' id='phone_number' value='{{ old('phone_number') }}'>

        <label for='parent1_first_name'>* Name of first parent</label>
        <input type='text' name='parent1_first_name' id='parent1_first_name' value='{{ old('parent1_first_name') }}'>

        <label for='parent1_last_name'>* Surename of first parent</label>
        <input type='text' name='parent1_last_name' id='parent1_last_name' value='{{ old('parent1_last_name') }}'>

        <label for='parent2_first_name'>Name of second parent</label>
        <input type='text' name='parent2_first_name' id='parent2_first_name' value='{{ old('parent2_first_name') }}'>

        <label for='parent2_last_name'>Surename of second parent</label>
        <input type='text' name='parent2_last_name' id='parent2_last_name' value='{{ old('parent2_last_name')}}'>

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

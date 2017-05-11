{{-- /resources/views/babies/edit.blade.php --}}
@extends('layouts.master')

@section('title')
    Edit details: {{ $baby->first_name }} {{ $baby->last_name }}
@endsection


@section('content')
    <h2> Edit: {{ $baby->first_name }} {{ $baby->last_name }}</h2>

    @if(count($errors) > 0)
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method='POST' action='/babies/edit'>
        {{ csrf_field() }}

        <p>* Required fields</p>

        <input type='hidden' name='id' value='{{$baby->id}}'>

        <label for='first_name'>* First name</label>
        <input type='text' name='first_name' id='first_name' value='{{ old('first_name', $baby->first_name) }}'>

        <label for='last_name'>* Last name</label>
        <input type='text' name='last_name' id='last_name' value='{{ old('last_name', $baby->last_name) }}'>

        <label for='dob'>* Date of birth</label>
        <input type='text' name='dob' id='dob' value='{{ old('dob', $baby->dob) }}'>

        <label for='classroom_id'>* Classroom:</label>
        <select id='classroom_id' name='classroom_id'>
            <option value='0'>Choose</option>
            @foreach($classroomList as $classroom_id => $classRoom)
                <option value='{{ $classroom_id }}' {{ ($baby->classroom_id == $classroom_id) ? 'SELECTED' : '' }}>
                    {{ $classRoom }}
                </option>
            @endforeach
        </select>

        <label for='address'>* Address</label>
        <input type='text' name='address' id='address' value='{{ old('address', $baby->address) }}'>

        <label for='phone_number'>* Phone number</label>
        <input type='text' name='phone_number' id='phone_number' placeholder='123-456-7891' value='{{ old('phone_number', $baby->phone_number) }}'>

        <label for='parent1_first_name'>* Name of first parent</label>
        <input type='text' name='parent1_first_name' id='parent1_first_name' value='{{ old('parent1_first_name', $baby->parent1_first_name) }}'>

        <label for='parent1_last_name'>* Surename of first parent</label>
        <input type='text' name='parent1_last_name' id='parent1_last_name' value='{{ old('parent1_last_name', $baby->parent1_last_name) }}'>

        <label for='parent2_first_name'>Name of second parent</label>
        <input type='text' name='parent2_first_name' id='parent2_first_name' value='{{ old('parent2_first_name', $baby->parent2_first_name) }}'>

        <label for='parent2_last_name'>Surename of second parent</label>
        <input type='text' name='parent2_last_name' id='parent2_last_name' value='{{ old('parent2_last_name', $baby->parent2_last_name) }}'>

        <br><input class='btn btn-primary' type='submit' value='Save changes'><br><br>

    </form>

@endsection

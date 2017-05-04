@extends('layouts.master')

@section('title')
    {{ $classroom->classroom_name }} classroom details
@endsection

@section('content')
    <h2> {{ $classroom->classroom_name }} classroom details </h2>
    <div class='classroom'>
        <h3>Classroom age group: </h3>
        {{ $classroom->age_group }}
        <br>
        <h3>Teachers:</h3>
        @foreach($teachers as $teacher)
            {{$teacher->first_name}} {{$teacher->last_name}}
        <br>
        @endforeach
        <h3>Babies:</h3>
        @foreach($babies as $baby)
            {{$baby->first_name}} {{$baby->last_name}}
        <br>
        @endforeach
    </div>
@endsection

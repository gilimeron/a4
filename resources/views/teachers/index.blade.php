@extends('layouts.master')

@section('title')
    All the teachers
@endsection

@section('content')
    <h1> Here is a list of all the teachers </h2>
    <div class='teacher'>
        @foreach($teachers as $teacher)
            <h2>{{ $teacher->first_name }} {{ $teacher->last_name }}</h2>
            <a href='/teachers/edit/{{ $teacher->id}}'> Edit </a> ,
            <a href='/teachers/delete/{{ $teacher->id}}'> Delete </a>

        @endforeach
    </div>
@endsection

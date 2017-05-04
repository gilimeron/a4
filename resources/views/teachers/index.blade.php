@extends('layouts.master')

@section('title')
    Teachers list
@endsection

@section('content')
    <h2> Teachers list </h2>
    <div class='teacher'>
        @foreach($teachers as $teacher)
            <ul>
                <h3>{{ $teacher->first_name }} {{ $teacher->last_name }}</h3>
                <a href='/teachers/view/{{ $teacher->id}}'> View </a> ,
                <a href='/teachers/edit/{{ $teacher->id}}'> Edit </a> ,
                <a href='/teachers/delete/{{ $teacher->id}}'> Delete </a>
            </ul>
        @endforeach
    </div>
@endsection

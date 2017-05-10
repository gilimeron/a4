{{-- /resources/views/teachers/index.blade.php --}}
@extends('layouts.master')

@section('title')
    Teachers list
@endsection

@section('content')
    <h2> Teachers list </h2>
    <div>
        @foreach($teachers as $teacher)
            <h3>{{ $teacher->first_name }} {{ $teacher->last_name }}</h3>
            <a href='/teachers/view/{{ $teacher->id}}'> View </a> ,
            <a href='/teachers/edit/{{ $teacher->id}}'> Edit </a> ,
            <a href='/teachers/delete/{{ $teacher->id}}'> Delete </a>
        @endforeach
    </div>
@endsection

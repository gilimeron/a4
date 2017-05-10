{{-- /resources/views/classrooms/index.blade.php --}}
@extends('layouts.master')

@section('title')
    Classrooms list
@endsection

@section('content')
    <h2> Classrooms list </h2>
    <div>
        @foreach($classrooms as $classroom)
            <h3>{{ $classroom->classroom_name }}</h3>
            <a href='/classrooms/view/{{ $classroom->id}}'> Details </a>
        @endforeach
    </div>
@endsection

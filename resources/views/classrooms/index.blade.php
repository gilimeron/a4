@extends('layouts.master')

@section('title')
    All the classrooms
@endsection

@section('content')
    <h1> All classrooms </h2>
    <div class='classroom'>
        @foreach($classrooms as $classroom)
            <h3>
                    Classroom name:{{ $classroom->classroom_name }}
                  </h3>
                    
                    <a href='/classrooms/view/{{ $classroom->id}}'> View all classroom details </a>


        @endforeach
    </div>
@endsection

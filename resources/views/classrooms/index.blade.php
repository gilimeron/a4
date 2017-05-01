@extends('layouts.master')

@section('title')
    All the classrooms
@endsection

@section('content')
    <h1> All classrooms </h2>
    <div class='meeting'>
        @foreach($classrooms as $classroom)
            <li>
                Classroom name:{{ $classroom->classroom_name }},
                <br/>
                @foreach($babies as $baby)
                    @if ($baby->id == $classroom->baby_id)
                        Baby:{{ $baby->first_name }} {{ $baby->last_name }}
                    @endif
                @endforeach
            </li>
        @endforeach
    </div>
@endsection

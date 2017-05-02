@extends('layouts.master')

@section('title')
    {{ $classroom->classroom_name }} classroom details
@endsection

@section('content')
    <h1> {{ $classroom->classroom_name }} classroom details </h2>
    <div class='classroom'>
                    <h2>Classroom age group: </h2>
                    @foreach($ageGroup as $group)
                        {{ $group->age_group_name }}
                    @endforeach
                    <br>
                    <h2>Babies:</h2>
                    <br>
                    @foreach($babies as $baby)
                            {{$baby->first_name}} {{$baby->last_name}}
                            <br>
                    @endforeach
                    <h2>Teachers:</h2>
                    <br>

                    @foreach($teachers as $teacher)
                            {{$teacher->first_name}} {{$teacher->last_name}}
                            <br>
                    @endforeach


    </div>
@endsection

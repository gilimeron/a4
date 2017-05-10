{{-- /resources/views/teachers/view.blade.php --}}
@extends('layouts.master')

@section('title')
    {{ $teacher->first_name }} {{ $teacher->last_name }}
@endsection

@section('content')
    <h2> Teacher - {{ $teacher->first_name }} {{ $teacher->last_name }} </h2>
    <div>
        <h3>Address</h3>
        {{$teacher->address}}
        <h3>Phone number</h3>
        {{$teacher->phone_number}}
        <h3>Email</h3>
        {{$teacher->email}}
        <h3>Classrooms</h3>
        @foreach ($classroomsForTeacher as $classroom)
        {{$classroom}}
        <br>
        @endforeach
    </div>

@endsection

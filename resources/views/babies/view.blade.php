{{-- /resources/views/babies/view.blade.php --}}
@extends('layouts.master')

@section('title')
    {{ $baby->first_name }} {{ $baby->last_name }}
@endsection

@section('content')
    <h2> {{ $baby->first_name }} {{ $baby->last_name }} </h2>
    <div class='baby'>
        <h3>Date of birth</h3>
        {{$baby->dob}}
        <h3>Classroom</h3>
        {{$classroom}}
        <h3>Age group</h3>
        {{$age_group}}
        <h3>Address</h3>
        {{$baby->address}}
        <h3>Phone number</h3>
        {{$baby->phone_number}}
        <h3>Parents</h3>
        {{$baby->parent1_first_name}} {{$baby->parent1_last_name}}
        <br>
        {{$baby->parent2_first_name}} {{$baby->parent2_last_name}}
    </div>
@endsection

@extends('layouts.master')

@section('title')
    All the babies
@endsection

@section('content')
    <h1> Here is a list of all the children currently enrolled to the daycare </h2>
    <div class='baby'>
        @foreach($babies as $baby)
            <h2>{{ $baby->first_name }} {{ $baby->last_name }}</h2>
            <a href='/babies/edit/{{ $baby->id}}'> Edit </a> ,
            <a href='/babies/delete/{{ $baby->id}}'> Delete </a>
        @endforeach
    </div>
@endsection

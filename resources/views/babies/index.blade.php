@extends('layouts.master')

@section('title')
    Children list
@endsection

@section('content')
    <h2> Children list </h2>
    <div class='baby'>
        @foreach($babies as $baby)
            <ul>
                <h3>{{ $baby->first_name }} {{ $baby->last_name }}</h3>
                <a href='/babies/view/{{ $baby->id}}'> View </a> ,
                <a href='/babies/edit/{{ $baby->id}}'> Edit </a> ,
                <a href='/babies/delete/{{ $baby->id}}'> Delete </a>
            </ul>
        @endforeach
    </div>
@endsection

{{-- /resources/views/babies/index.blade.php --}}
@extends('layouts.master')

@section('title')
    Children list
@endsection

@section('content')
    <h2> Children list </h2>
    <div>
        @foreach($babies as $baby)
            <h3>{{ $baby->first_name }} {{ $baby->last_name }}</h3>
            <a href='/babies/view/{{ $baby->id}}'> View </a> ,
            <a href='/babies/edit/{{ $baby->id}}'> Edit </a> ,
            <a href='/babies/delete/{{ $baby->id}}'> Delete </a>
        @endforeach
    </div>
@endsection

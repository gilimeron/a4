{{-- /resources/views/babies/delete.blade.php --}}
@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $baby->first_name }} {{ $baby->last_name }}
@endsection

@section('content')

    <h2>Confirm deletion</h2>
    <form method='POST' action='/babies/delete'>

        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $baby->id }}'>

        <h3>Are you sure you want to remove {{ $baby->first_name }} {{ $baby->last_name }} from the daycare application?</h3>

        <input type='submit' value='Yes' class='btn btn-danger'>
        <a href='../'>No, take me back to children list</a>
    </form>

@endsection

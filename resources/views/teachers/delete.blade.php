@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $teacher->first_name }}
@endsection

@section('content')

    <h1>Confirm deletion</h1>
    <form method='POST' action='/teachers/delete'>

        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $teacher->id }}'>

        <h2>Are you sure you want to delete {{ $teacher->first_name }}?</h2>

        <input type='submit' value='Yes, delete this teacher.' class='btn btn-danger'>

    </form>

@endsection

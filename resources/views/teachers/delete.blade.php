{{-- /resources/views/teachers/delete.blade.php --}}
@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $teacher->first_name }} {{ $teacher->last_name }}
@endsection

@section('content')

    <h2>Confirm deletion</h2>
    <form method='POST' action='/teachers/delete'>

        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $teacher->id }}'>

        <h3>Are you sure you want to delete {{ $teacher->first_name }} {{ $teacher->last_name }} from the daycare application?</h3>

        <input type='submit' value='Yes' class='btn btn-danger'>
        <a href='../'>No, take me back to teachers list</a>

    </form>

@endsection

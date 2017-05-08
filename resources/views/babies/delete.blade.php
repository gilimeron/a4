@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $baby->first_name }} {{ $baby->last_name }}
@endsection

@section('content')

    <h1>Confirm deletion</h1>
    <form method='POST' action='/babies/delete'>

        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $baby->id }}'>

        <h2>Are you sure you want to remove {{ $baby->first_name }} {{ $baby->last_name }} from the db?</h2>

        <input type='submit' value='Yes, remove this baby from the database.' class='btn btn-danger'>

    </form>

@endsection

@extends('layouts.master')

@section('title')
    TinyFeet Daycare
@endsection

@section('content')
    <h2> Welcome to TinyFeet Daycare management application </h2>
    <div>
        <p> This web application is designed to help TinyFeet Daycare manage their children, teachers and classrooms.
        </p>
        <p> In this website you can add more children to the daycare database, view and edit their details (for example if a child is moving to a different classroom), or remove them from the application once a child is taken out of the daycare.
        </p>
        <p> You can also add more teachers, edit teacher's details, or remove a teacher from the application. Teachers are rotating between the classrooms, so a teacher can belong to multiple classroom, and a classroom can have multiple teachers assigned to it.
        </p>
        <p> Lastly, there is a list of classrooms (classrooms are named after famous childrens' books), from there you can view each classroom and see which teacher is assigned to the classroom and a list of children that attend it.
        </p>
    </div>
    <div>
        <img src="/images/daycare1.jpg" alt="daycare1">
    </div>
@endsection

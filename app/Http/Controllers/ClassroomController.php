<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Baby;
use App\Teacher;
use App\Classroom;
use Session;

class ClassroomController extends Controller
{
    /**
    * GET
    * /classrooms list of all classrooms
    */
    public function index(Request $request) {

        $classrooms = Classroom::get();
        $babies = Baby::get();
        $teachers = Teacher::get();

        return view('classrooms.index')->with([
            'classrooms' => $classrooms,
        ]);
    }

    /**
    * GET
    * /classrooms/view/{id} show details of a specific classroom
    */
    public function viewClassroom($id) {
        $classroom = Classroom::with('teachers')->find($id);
        $babies = Baby::where('classroom_id','like',$id)->get();
        $teachers = [];
        foreach($classroom->teachers as $teacher) {
            $teachers[]=$teacher;
        };

        return view('classrooms.view')->with([
            'classroom' => $classroom,
            'babies' => $babies,
            'teachers' => $teachers,
        ]);
    }

}

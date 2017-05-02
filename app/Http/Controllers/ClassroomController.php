<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Baby;
use App\Teacher;
use App\Classroom;
use App\AgeGroup;
use Session;

class ClassroomController extends Controller
{

    /**
    * GET
    * /classrooms
    */
    public function index(Request $request) {

        $classrooms = Classroom::get();
        $babies = Baby::get();
        $teachers = Teacher::get();


        return view('classrooms.index')->with([
            'classrooms' => $classrooms,
            'babies' => $babies,
            'teachers' => $teachers,
        ]);
    }

    public function viewClassroom($id) {
        $classroom = Classroom::find($id);

        $babies = Baby::where('classroom_id','like',$id)->get();
        $teachers = Teacher::with('classrooms')->get();
        $ageGroup = AgeGroup::where('id','like',$classroom->age_group_id)->get();



        return view('classrooms.view')->with([
            'classroom' => $classroom,
            'babies' => $babies,
            'teachers' => $teachers,
            'ageGroup' => $ageGroup,
        ]);
    }

}

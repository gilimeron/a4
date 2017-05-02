<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Teacher;
use App\Classroom;
use Session;

class TeacherController extends Controller
{

    /**
    * GET
    * /teachers
    */
    public function index(Request $request) {

        $teachers = Teacher::orderBy('first_name')->get(); # Query DB

        return view('teachers.index')->with([
            'teachers' => $teachers,
        ]);
    }

    /**
    * GET
    * /teachers/new
    * Display the form to add a new teacher
    */
    public function addTeacher(Request $request) {
        return view('teachers.new');
    }


    /**
    * POST
    * /teachers/new
    * Process the form for adding a new teacher
    */
    public function saveNewTeacher(Request $request) {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required',

        ]);

        # Add new teacher to database
        $teacher = new Teacher();
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->address = $request->address;
        $teacher->phone_number = $request->phone_number;
        $teacher->email = $request->email;
        $teacher->teacher_type = $request->teacher_type;
        $teacher->save();

        Session::flash('message', 'The teacher '.$request->first_name.' '.$request->last_name. ' was added to the database.');

        # Redirect the user to teachers index
        return redirect('/teachers');
    }


    /**
    * GET
    * /teachers/edit/{id}
    * Show form to edit a teacher
    */
    public function editTeacher($id) {

        $teacher = Teacher::find($id);

        if(is_null($teacher)) {
            Session::flash('message', 'The teacher you requested was not found.');
            return redirect('/teachers');
        }

        return view('teachers.edit')->with([
            'id' => $id,
            'teacher' => $teacher,
        ]);

    }

    /**
    * POST
    * /teachers/edit
    * Process form to save edits to a teacher
    */
    public function saveTeacher(Request $request) {

        $this->validate($request, [
          'first_name' => 'required',
          'last_name' => 'required',
          'address' => 'required',
          'phone_number' => 'required',
          'email' => 'required',

        ]);

        $teacher = Teacher::find($request->id);

        # Edit player in the database
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->address = $request->address;
        $teacher->phone_number = $request->phone_number;
        $teacher->email = $request->email;
        $teacher->teacher_type = $request->teacher_type;
        $teacher->save();

        Session::flash('message', 'Your changes to '.$request->first_name.' '.$request->last_name. ' were saved.');
        return redirect('/teachers');

    }


    /**
    * GET
    * Page to confirm deletion
    */
    public function confirmTeacherDeletion($id) {

        $teacher = Teacher::find($id);

        if(!$teacher) {
            Session::flash('message', 'Teacher not found.');
            return redirect('/teachers');
        }

        return view('teachers.delete')->with('teacher', $teacher);
    }


    /**
    * POST
    * Actually delete the teacher
    */
    public function delete(Request $request) {

        $teacher = Teacher::find($request->id);

        if(!$teacher) {
            Session::flash('message', 'Requested teacher was not found, failed to delete.');
            return redirect('/teachers');
        }

        $teacher->classrooms()->detach();

        $teacher->delete();

        # Finish
        Session::flash('message', $teacher->first_name.' '.$teacher->last_name. 'was deleted.');
        return redirect('/teachers');
    }

}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Baby;
use App\Classroom;
use Session;

class BabyController extends Controller
{
    /**
    * GET
    * /babies
    */
    public function index(Request $request) {

        $babies = Baby::orderBy('first_name')->get(); # Query DB

        return view('babies.index')->with([
            'babies' => $babies,
        ]);
    }

    /**
    * GET
    * /babies/view/{id}
    * Show form to view a specific baby
    */
    public function viewBaby($id) {

        $baby = Baby::with('classroom')->find($id);

        if(is_null($baby)) {
            Session::flash('message', 'The baby you requested was not found.');
            return redirect('/babies');
        }

        $classroom = $baby->classroom->classroom_name;
        $age_group = $baby->classroom->age_group;

        return view('babies.view')->with([
            'id' => $id,
            'baby' => $baby,
            'classroom' => $classroom,
            'age_group' => $age_group,
        ]);

    }

    /**
    * GET
    * /babies/new
    * Display the form to add a new baby to the database
    */
    public function addBaby(Request $request) {

        $classroomList = Classroom::classroomList();

        return view('babies.new')->with([
            'classroomList' => $classroomList,
        ]);
    }


    /**
    * POST
    * /babies/new
    * Process the form for adding a new baby to the database
    */
    public function saveNewBaby(Request $request) {

        # Custom error message
        $messages = [
           'classroom_id.not_in' => 'Please select a classroom',
           'dob.required' => 'The date of birth field is required',
           'parent1_first_name.required' => 'First name of parent is required',
           'parent1_last_name.required' => 'Last name of parent is required',
           'phone_number' => 'Please enter a valid phone number'
        ];

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'phone_number' => 'required|regex:/^(\+0?1\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/',
            'parent1_first_name' => 'required',
            'parent1_last_name' => 'required',
            'classroom_id' => 'not_in:0',
        ], $messages);

        # Add new baby to database
        $baby = new Baby();
        $baby->first_name = $request->first_name;
        $baby->last_name = $request->last_name;
        $baby->dob = $request->dob;
        $baby->address = $request->address;
        $baby->phone_number = $request->phone_number;
        $baby->parent1_first_name = $request->parent1_first_name;
        $baby->parent1_last_name = $request->parent1_last_name;
        $baby->parent2_first_name = $request->parent2_first_name;
        $baby->parent2_last_name = $request->parent2_last_name;
        $baby->classroom_id = $request->classroom_id;
        $baby->save();

        Session::flash('message',$request->first_name.' ' .$request->last_name. ' was added to the database.');

        # Redirect the user to babies index
        return redirect('/babies');
    }


    /**
    * GET
    * /babies/edit/{id}
    * Show form to edit a baby
    */
    public function editBaby($id) {

        $baby = Baby::find($id);
        $classroomList = Classroom::classroomList();

        if(is_null($baby)) {
            Session::flash('message', 'The baby you requested was not found.');
            return redirect('/babies');
        }

        return view('babies.edit')->with([
            'id' => $id,
            'baby' => $baby,
            'classroomList' => $classroomList,
        ]);
    }

    /**
    * POST
    * /babies/edit
    * Process form to save changes
    */
    public function saveBaby(Request $request) {

        # Custom error message
        $messages = [
            'classroom_id.not_in' => 'Please select a classroom',
            'dob.required' => 'The date of birth field is required',
            'parent1_first_name.required' => 'First name of parent is required',
            'parent1_last_name.required' => 'Last name of parent is required',
            'phone_number' => 'Please enter a valid phone number',
        ];

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'phone_number' => 'required|regex:/^(\+0?1\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/',
            'parent1_first_name' => 'required',
            'parent1_last_name' => 'required',
            'classroom_id' => 'required',
        ], $messages);
        $baby = Baby::find($request->id);

        # Edit a baby in the database
        $baby->first_name = $request->first_name;
        $baby->last_name = $request->last_name;
        $baby->dob = $request->dob;
        $baby->address = $request->address;
        $baby->phone_number = $request->phone_number;
        $baby->parent1_first_name = $request->parent1_first_name;
        $baby->parent1_last_name = $request->parent1_last_name;
        $baby->parent2_first_name = $request->parent2_first_name;
        $baby->parent2_last_name = $request->parent2_last_name;
        $baby->classroom_id = $request->classroom_id;
        $baby->save();

        Session::flash('message', 'Your changes to '.$baby->first_name.' ' .$baby->last_name. ' were saved.');
        return redirect('/babies');
    }


    /**
    * GET
    * Page to confirm deletion
    */
    public function confirmBabyDeletion($id) {

        $baby = Baby::find($id);

        if(!$baby) {
            Session::flash('message', 'Baby not found.');
            return redirect('/babies');
        }

        return view('babies.delete')->with('baby', $baby);
    }


    /**
    * POST
    * Actually delete the baby from the db
    */
    public function delete(Request $request) {

        $baby = Baby::find($request->id);

        if(!$baby) {
            Session::flash('message', 'Deletion failed; baby not found.');
            return redirect('/babies');
        }

        $baby->delete();

        Session::flash('message', $baby->first_name.' ' .$baby->last_name. ' was deleted from the daycare database.');
        return redirect('/babies');
    }

}

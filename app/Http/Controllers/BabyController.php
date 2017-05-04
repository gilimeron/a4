<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Baby;
use App\AgeGroup;
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
    * /babies/new
    * Display the form to add a new baby
    */
    public function addBaby(Request $request) {

        $classroomList = Classroom::classroomList();
        $ageGroupList = AgeGroup::ageGroupList();

        return view('babies.new')->with([
            'classroomList' => $classroomList,
            'ageGroupList' => $ageGroupList,
        ]);
    }


    /**
    * POST
    * /babies/new
    * Process the form for adding a new baby
    */
    public function saveNewBaby(Request $request) {

        # Custom error message
        $messages = [
           'age_group_id.not_in' => 'Please select an age group',
           'classroom_id.not_in' => 'Please select a classroom',
           'dob.required' => 'The date of birth field is required',
           'parent1_first_name.required' => 'First Name of parent is required',
           'parent1_last_name.required' => 'Last name of parent is required',
        ];
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'parent1_first_name' => 'required',
            'parent1_last_name' => 'required',
            'age_group_id' => 'not_in:0',
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
        $baby->age_group_id = $request->age_group_id;
        $baby->classroom_id = $request->classroom_id;
        $baby->save();

        Session::flash('message',$request->first_name.' ' .$request->last_name. 'was added to the database.');

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
        $ageGroupList = AgeGroup::ageGroupList();

        if(is_null($baby)) {
            Session::flash('message', 'The baby you requested was not found.');
            return redirect('/babies');
        }

        return view('babies.edit')->with([
            'id' => $id,
            'baby' => $baby,
            'classroomList' => $classroomList,
            'ageGroupList' => $ageGroupList,
        ]);

    }

    /**
    * POST
    * /babies/edit
    * Process form to save edits to a baby
    */
    public function saveBaby(Request $request) {

        $this->validate($request, [
          'first_name' => 'required',
          'last_name' => 'required',
          'dob' => 'required',
          'address' => 'required',
          'phone_number' => 'required',
          'parent1_first_name' => 'required',
          'parent1_last_name' => 'required',
          'age_group_id' => 'required',
          'parent1_last_name' => 'required',
          'age_group_id' => 'required',
          'classroom_id' => 'required',

        ]);
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
        $baby->age_group_id = $request->age_group_id;
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

        #$baby->meetings()->detach();

        $baby->delete();

        # Finish
        Session::flash('message', $baby->first_name.' was deleted.');
        return redirect('/babies');
    }

}

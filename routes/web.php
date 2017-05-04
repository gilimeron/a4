<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

#main page
Route::get('/', function () {
    return view('welcome');
});

#GET route to view all babies
Route::get('/babies', 'BabyController@index');

#GET route to view baby details
Route::get('/babies/view/{id}', 'BabyController@viewBaby');

#GET route to add a new babies
Route::get('/babies/new', 'BabyController@addBaby');

#POST route to process the new baby
Route::post('/babies/new', 'BabyController@saveNewBaby');

#GET route to edit a baby
Route::get('/babies/edit/{id}', 'BabyController@editBaby');

#POST route to save an edited baby
Route::post('/babies/edit', 'BabyController@saveBaby');

# Get route to confirm deletion of a baby
Route::get('/babies/delete/{id}', 'BabyController@confirmBabyDeletion');

# Post route to actually remove the baby from db
Route::post('/babies/delete', 'BabyController@delete');

#GET route to view all teachers
Route::get('/teachers', 'TeacherController@index');

#GET route to view teacher details
Route::get('/teachers/view/{id}', 'TeacherController@viewTeacher');

#GET route to add a Teacher
Route::get('/teachers/new', 'TeacherController@addTeacher');

#POST route to process the new Teacher
Route::post('/teachers/new', 'TeacherController@saveNewTeacher');

#GET route to edit a Teacher
Route::get('/teachers/edit/{id}', 'TeacherController@editTeacher');

#POST route to save an edited Teacher
Route::post('/teachers/edit', 'TeacherController@saveTeacher');

#GET route to confirm deletion of a Teacher
Route::get('/teachers/delete/{id}', 'TeacherController@confirmTeacherDeletion');

#POST route to remove the Teacher from db
Route::post('/teachers/delete', 'TeacherController@delete');

#GET route to view list of classrooms
Route::get('/classrooms', 'ClassroomController@index');

#GET route to view classroom details
Route::get('/classrooms/view/{id}', 'ClassroomController@viewClassroom');
/**
* Log viewer
* (only accessible locally)
*/
if(config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

# drop db and rebuild
if(App::environment('local')) {
    Route::get('/drop', function() {
        DB::statement('DROP database daycare');
        DB::statement('CREATE database daycare');
        return 'Dropped daycare; created daycare.';
    });
};

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

#GET route to view all players
Route::get('/players', 'PlayerController@index');

#GET route to add a player
Route::get('/players/new', 'PlayerController@addPlayer');

#POST route to process the new player
Route::post('/players/new', 'PlayerController@saveNewPlayer');

#GET route to edit a player
Route::get('/players/edit/{id}', 'PlayerController@editPlayer');

#POST route to save an edited player
Route::post('/players/edit', 'PlayerController@savePlayer');

#GET route to confirm deletion of a player
Route::get('/players/delete/{id}', 'PlayerController@confirmPlayerDeletion');

#POST route to remove the player from db
Route::post('/players/delete', 'PlayerController@delete');

#GET route to view all scheduled meetings
Route::get('/meetings', 'MeetingController@index');

#GET route to schedule a new meeting
Route::get('/meetings/new', 'MeetingController@addMeeting');

#POST route to process the new meeting
Route::post('/meetings/new', 'MeetingController@saveNewMeeting');

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

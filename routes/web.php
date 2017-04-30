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

#GET route to view all games
Route::get('/games', 'GameController@index');

#GET route to add a new game
Route::get('/games/new', 'GameController@addGame');

#POST route to process the new game
Route::post('/games/new', 'GameController@saveGame');

#GET route to edit a game
Route::get('/games/edit/{id}', 'GameController@editGame');

#POST route to save an edited game
Route::post('/games/edit', 'GameController@saveGame');

# Get route to confirm deletion of a game
Route::get('/games/delete/{id}', 'GameController@confirmGameDeletion');

# Post route to actually remove the game from db
Route::post('/games/delete', 'GameController@delete');

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

#GET route to view all scheduled game nights
Route::get('/meetings', 'MeetingController@index');

#POST route to schedule a new game night
Route::post('/meetings/new', 'MeetingController@addMeeting');

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
        DB::statement('DROP database games');
        DB::statement('CREATE database games');
        return 'Dropped games; created games.';
    });
};

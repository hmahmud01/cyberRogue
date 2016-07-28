<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('rogues', 'RogueController@rogues');

Route::get('rogues/{rogue_data}', 'RogueController@showRogue');

Route::get('games', 'RogueController@games');

Route::get('games/{game_data}', 'RogueController@showGame');

Route::get('friends', 'RogueController@friends');

Route::get('friends/{friend_data}', 'RogueController@showFriend');
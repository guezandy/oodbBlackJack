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
    return view('inputStrategy')->with('session_token', NULL);
});

Route::get('input2', function() {
	return view('input2')->with('session_token', NULL);
});

//SQL CONTROLLERS

Route::any('submitStrategy', 'BlackJackController@strategy');

Route::any('simulation', array('as' => 'simulation', 'uses' => 'BlackJackController@simulation'));

Route::any('insertcards', array('as'=>'insertcards', 'uses'=>'BlackJackController@insertcards'));

Route::any('simulate', array('as'=>'simulate', 'uses'=>'BlackJackController@simulate'));

Route::any('play/{id}', array('as' => 'play', 'uses' => 'BlackJackController@play'));

Route::any('results', array('as'=>'results', 'uses' => 'BlackJackController@results'));

//MONGO CONTROLLERS

Route::any('msubmitStrategy', 'MongoController@strategy');

Route::any('msimulation', array('as' => 'simulation', 'uses' => 'MongoController@simulation'));

Route::any('minsertcards', array('as'=>'minsertcards', 'uses'=>'MongoController@insertcards'));

Route::any('msimulate', array('as'=>'msimulate', 'uses'=>'MongoController@simulate'));

Route::any('mplay/{id}', array('as' => 'mplay', 'uses' => 'MongoController@play'));

Route::any('mresults', array('as'=>'mresults', 'uses' => 'MongoController@results'));
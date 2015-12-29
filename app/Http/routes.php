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

Route::get('/composer', function () {
    return view('index');
});


Route::get('/gewinnspiel', function () {
    return view('gewinnspiel');
});

Route::get('/gewinnspiel-formular', function () {
    return view('gewinnspiel-formular');
});

Route::post('/upload','ShareController@upload');

Route::post('/shareemail','ShareController@shareemail');


Route::post('/confirm','PageControllerUser@create');
Route::get('/canvas-view/{canvasId}', function ($canvasId) {
  return view('canvas-view')->with(array('canvasId'=>$canvasId));
});

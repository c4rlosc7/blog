<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| post,get,put,delete.
|
*/
Route::get('test', function () {
    return 'welcome test 1';
});

Route::get('nombre/{nombre}', function($nombre){
	return 'My name is: '.$nombre;
});

Route::get('edad/{edad}', function($edad){
	return 'My age is: '.$edad;
});

Route::get('edad2/{edad?}', function($edad=27){
	return 'My age is: '.$edad;
});

Route::get('/', function () {
    return view('welcome');
});

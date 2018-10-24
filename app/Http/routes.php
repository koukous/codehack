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

Route::get('/about', function () {
    return "khelow this is about page";
});

Route::get('/values', function () {
    return "good day sir this is values page";
});

Route::get('/post/{id}/{name}', function ($id, $name) {
    return "this is poste page and you passed the:". $id ." and the".$name;
});
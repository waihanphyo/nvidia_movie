<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('backend.movies.create');

   
    

});

Route::get('/getcontact', function () {
    echo "I'm getcontact";

   
    

});

Route::resource('movies','MovieController');


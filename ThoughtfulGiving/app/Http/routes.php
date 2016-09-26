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

// Route::get('/welcome', function () {
//     return view('home');
// });

Route::auth();

Route::get('/charityPortal', 'HomeController@index');

Route::get('/welcome', 'HomeController@welcome');

Route::resource('/', 'GuestController');


// Route::get('welcome', function() {
// 	return view('welcome'); 
// }); 

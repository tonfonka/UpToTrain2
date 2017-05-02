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
Route::get('/', function()
{
	return View::make('index');
});
Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});

Route::get('/app', function()
{
	return View::make('app');
});

Route::get('/tripuser', function()
{
	return View::make('tripuser');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/add', 'tripController@addTrip');

//Route::get('/addtripround', 'tripController@add_tripRound');

Route::resource('/addtrip','addtripController');
Route::resource('/show','showtripController');
Route::resource('/showtrip','tripAgencyController'); 
Route::resource('/trip','tripController');
Route::resource('/addtripround','addtriproundController');

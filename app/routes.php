<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// GET
// HOMEPAGE
Route::get('/', 'CalendarEventsController@index');

// LOGIN
Route::get('/login', 'HomeController@showLogin');

// LOGOUT
Route::get('/logout', 'HomeController@doLogout');

// POST
// LOGIN
Route::post('login', 'HomeController@doLogin');

// RESOURCE
// CALENDAR EVENT
Route::resource('/calendarEvents', 'CalendarEventsController');

// USER
Route::resource('/users', 'UsersController');

// LOCATION
Route::resource('/locations', 'locationsController');
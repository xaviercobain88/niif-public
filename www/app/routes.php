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

Route::get('/login', 'AuthController@loginPage');
Route::get('/signup', 'AuthController@signupPage');
Route::post('/login_form', 'AuthController@login');
Route::post('/signup_form', 'AuthController@signup');
Route::get('/dashboard', "LicensedUserController@getDashboard");

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
    return view('welcome');
});

Route::resource('users', 'UserController');

//User can access these pages after login
Route::resource('investments', 'InvestmentController')->middleware('auth');
Route::resource('feedback', 'FeedbackController')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('api/', "ApiController");

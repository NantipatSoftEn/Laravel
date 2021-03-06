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
route::get('/home',function()
{
  return view('home');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','ReminderController@home');

Route::post('/reminder/new','ReminderController@addReminder');
Route::delete("/reminder/delete",'ReminderController@deleteReminder');


Route::get('/profile','ProfileController@getProfile');
Route::get('/bithday','ProfileController@getYear');

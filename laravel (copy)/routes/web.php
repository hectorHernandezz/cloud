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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('friendrequest', 'FriendRequestController');

Route::get('/myaccount', 'UserController@myaccount')->name('myaccount');

Route::get('/change_password', 'UserController@change_password')->name('change_password');

Route::get('/messageboard', 'UserController@messageboard')->name('messageboard');

Route::get('/messages', 'UserController@messages')->name('messages');

Route::get('/people', 'UserController@people')->name('people');


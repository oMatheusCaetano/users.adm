<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'UsersController@index')->name('users.index')->middleware('auth');

Route::get('/users/create', 'UsersController@create')->name('users.create')->middleware('auth');

Route::get('/users/edit', 'UsersController@edit')->name('users.edit')->middleware('auth');

Route::post('/users/store', 'UsersController@store')->name('users.store')->middleware('auth');

Route::post('/users/update', 'UsersController@update')->name('users.update')->middleware('auth');

Route::get('/login', 'LoginController@index')->name('login.index');

Route::post('/login', 'LoginController@login')->name('login.login');

Route::get('/register', 'RegisterController@index')->name('register.index');

Route::post('/register', 'RegisterController@store')->name('register.store');

Route::get('/logout', 'LoginController@logout')->name('login.logout');

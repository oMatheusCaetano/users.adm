<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'UsersController@index')->name('users.index');

Route::get('/users/create', 'UsersController@create')->name('users.create');

Route::post('/users/store', 'UsersController@store')->name('users.store');

Route::get('/login', 'LoginController@index')->name('login.index');

Route::get('/logout', 'LoginController@logout')->name('login.logout');

Route::post('/login', 'LoginController@access')->name('login.access');

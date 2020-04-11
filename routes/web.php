<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'UsersController@index')->name('users.index');

Route::get('/users/create', 'UsersController@create')->name('users.create');

Route::post('/users/store', 'UsersController@store')->name('users.store');

Route::get('/login', 'LoginController@index')->name('login.index');

Route::post('/login', 'LoginController@access')->name('login.access');

Route::get('/register', 'LoginController@create')->name('login.create');

Route::post('/register', 'LoginController@register')->name('login.register');

Route::get('/logout', 'LoginController@logout')->name('login.logout');

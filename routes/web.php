<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'App\Http\Controllers\UserController@showUsers')->name('user.list');
Route::get('/user/create', 'App\Http\Controllers\UserController@createUser')->name('user.create');
Route::post('/user/create', 'App\Http\Controllers\UserController@saveUser');
Route::get('/user/edit/{id}', 'App\Http\Controllers\UserController@getUser')->name('user.edit');
Route::put('/user/edit/{id}', 'App\Http\Controllers\UserController@saveUser')->name('user.update');
Route::get('/user/delete/{id}', 'App\Http\Controllers\UserController@deleteUser')->name('user.delete');

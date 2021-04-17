<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\TodolistController@showAllData');

Route::get('delete/{id}', '\App\Http\Controllers\TodolistController@delete');

Route::get('create', '\App\Http\Controllers\TodolistController@create');

Route::get('todo_submit', '\App\Http\Controllers\TodolistController@todo_submit');

Route::get('edit/{id}', '\App\Http\Controllers\TodolistController@edit');

Route::get('edit_submit/{id}', '\App\Http\Controllers\TodolistController@edit_submit');



<?php

use Illuminate\Http\Request;

Route::get('/tasks','NewController@show');
Route::post('/add-task','NewController@store');


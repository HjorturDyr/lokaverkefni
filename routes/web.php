<?php

use App\Film;

Route::get('/', 'HomeController@home');

Route::get('/films', 'FilmsController@index');
Route::get('/films/{film}', 'FilmsController@show');
Route::get('/timeline', 'FilmsController@timeline');

Route::post('films/{film}/comment', 'CommentsController@store')->middleware('auth');
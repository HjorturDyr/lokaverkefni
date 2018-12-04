<?php

use App\Film;

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function() {
	return view('home');
});

Route::get('/films', 'FilmsController@index');
Route::get('/films/{film}', 'FilmsController@show');
Route::get('/timeline', 'FilmsController@timeline');

Route::post('films/{film}/comment', 'CommentsController@store')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

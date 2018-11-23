<?php

use App\Film;

Route::get('/', 'HomeController@home');

Route::get('/films', 'FilmsController@index');
Route::get('/films/{id}', 'FilmsController@show');
Route::get('/timeline', 'FilmsController@timeline');

Route::get('/Films/{film}', function () {
    return view('films.timeline', compact('films'));
});

Route::get('/Login', function () {
    return view('login');
});
<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/films', 'FilmsController@index');
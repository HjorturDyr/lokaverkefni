<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Films', function () {
    return view('films.index', compact('films'));
});

Route::get('/Timeline', function () {
    return view('films.timeline', compact('films'));
});

Route::get('/Films/{film}', function () {
    return view('films.timeline', compact('films'));
});

Route::get('/Login', function () {
    return view('login');
});
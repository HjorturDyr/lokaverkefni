<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmsController extends Controller
{
    public function index() 
    {
    	$films = Film::all();

    	return view('films.index', compact('films'));
    }

    public function timeline() 
    {
    	return view('films.timeline', compact('films'));
    }

    public function show() 
    {

    }
}

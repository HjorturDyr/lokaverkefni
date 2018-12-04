<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Film;

class CommentsController extends Controller
{
    public function store(Film $film)
    {
    	Comment::create([
    		'body' => request('body'),
    		'film_id' => $film->id,
    		'user_id' => auth()->id()
    	]);

    	return back();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['title', 'synopsis',];

	public function comments()
	{
		return $this->hasMany('App\Comment');
	}

	public function path()
	{
		return "/films/{$this->id}";
	}
}

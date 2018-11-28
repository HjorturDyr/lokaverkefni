@extends('layout')
	
@section('content')
    <h1>All Films!!!</h1>
    <button>A -> Z</button>
    <button>Z -> A</button>
    <button>Release Date</button>
    @foreach ($films as $film)
    	<div class="container card text-white bg-dark mb-3" style="max-width: 18rem;">
    		<a href="/films/{{$film->id}}">{{$film->title}}</a>
    		<p>???</p>
    		<p>{{$film->synopsis}}</p>
    	</div>
    @endforeach
@endsection
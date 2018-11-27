@extends('layout')
	
@section('content')
    <h1>All Films!!!</h1>
    @foreach ($films as $film)
    	<div class="container card text-white bg-dark mb-3" style="max-width: 18rem;">
    		<h5 class="card-title">{{$film->title}}</h5>
    		<p>Poster????</p>
    		<p>{{$film->synopsis}}</p>
    	</div>
    @endforeach
@endsection
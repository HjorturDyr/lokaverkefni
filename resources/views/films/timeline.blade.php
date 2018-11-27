@extends('layout')
	
@section('content')
	@foreach ($films as $film)
    	<div>
    		<h3>{{$film->title}}</h3>
    		<h4>{{$film->synopsis}}</h4>
    	</div>
    @endforeach

@endsection
@extends('layout')
	
@section('content')
    <h1 class="text-white">All Films!!!</h1>
    <button style="border-radius: 10px; background-color: lightblue; border-color: lightblue;" >A -> Z</button>
    <button style="border-radius: 10px; background-color: lightblue; border-color: lightblue;">Z -> A</button>
    <button style="border-radius: 10px; background-color: lightblue; border-color: lightblue;">Release Date</button>
    
    <div class="row" style="padding: 20px 20px 20px 20px;">
        @foreach ($films as $film)
    	   <div class="container card text-white bg-dark mb-3" style="max-width: 18rem;">
    		  <a href="/films/{{$film->id}}">{{$film->title}}</a>
    		  <img src="{{$film->poster}}">
    		  <p>{{$film->synopsis}}</p>
              <h6>{{$film->release_date}}</h6>
    	   </div>
        @endforeach
    </div>
@endsection
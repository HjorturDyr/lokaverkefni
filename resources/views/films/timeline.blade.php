@extends('layout')
	
@section('content')
	<div class="container-fluid bg-dark" style="margin-bottom: 10px;">
		<div>
			<h1 class="d-flex justify-content-around">Phase 1</h1>
			<div class="row">
				@foreach ($films as $film)
    				<div class="container" style="max-width: 18rem; margin-bottom: 2px; background-color: #D73B3B; border-radius: 10px;">
    					<a href="/films/{{$film->id}}">{{$film->title}}</a>
    					<p>???</p>
    					<p>{{$film->synopsis}}</p>
    				</div>
    			@endforeach
    		</div>
    	</div>

    	<div>
			<h1 class="d-flex justify-content-around">Phase 2</h1>
			<div class="row">
				
    		</div>
    	</div>

    	<div>
			<h1 class="d-flex justify-content-around">Phase 3</h1>
			<div class="row">
				
    		</div>
    	</div>
    </div>
    

@endsection
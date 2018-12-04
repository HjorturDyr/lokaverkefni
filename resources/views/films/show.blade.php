@extends('layout')

@section('content')
<div class="bg-secondary" style="border-radius: 10px; margin: 50px 100px 50px 100px; padding: 10px 10px 10px 10px">
	<h1>
		{{ $film->title }}
	</h1>
	<p>
		{{ $film->synopsis }}
	</p>
</div>

<form method="POST" action="/films/{{ $film->id }}/comment">
	@csrf
	<div class="form-group">
		<textarea placeholder="Comment..." name="body" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-primary">comment</button>
	</div>
</form>

<div>
@foreach($film->comments as $comment)
	<form class="text-dark" style="background-color: white; border-radius: 10px; margin: 20px 20px 20px 20px; padding: 10px 10px 10px 10px;">
		<h4>{{$comment->body}}</h4>
		<h6>comment by - {{$comment->user->name}}</h6>
	</form>
@endforeach
</div>

@endsection
@extends('layout')

@section('content')
<div class="bg-secondary" style="border-radius: 10px; margin-right: 600px;">
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
		<textarea name="body" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-primary">comment</button>
	</div>
</form>


@endsection
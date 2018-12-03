@extends('layout')

@section('content')
<div class="bg-white" style="border-radius: 10px; margin-right: 600px;">
	<h1>
		{{ $film->title }}
	</h1>
	<p>
		{{ $film->synopsis }}
	</p>
</div>


@endsection
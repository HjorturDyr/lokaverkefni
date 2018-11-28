@extends('layout')

@section('content')
<h1>
	{{ $film->title }}
</h1>
<p>
	{{ $film->synopsis }}
</p>


@endsection
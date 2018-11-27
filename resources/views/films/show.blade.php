@extends('layout')

@section('content')
<h1>
	{{ $films->title }}
</h1>
<p>
	{{ $films->synopsis }}
</p>
@endsection
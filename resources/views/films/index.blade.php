<!DOCTYPE html>
<html>
<head>
    <title>Welkoom</title>
</head>
<body>
	<a href="/">Home</a>
    <h1>All Films!!!</h1>
    @foreach ($films as $film)
    	<div>
    		<h3>{{$film->title}}</h3>
    		<h4>{{$film->synopsis}}</h4>
    	</div>
    @endforeach
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Welkoom</title>
</head>
<body>
	<a href="/">Home</a>
    <h1>All Films!!!</h1>
    @foreach ($films as $film)
    	<li>{{$film}}</li>
    @endforeach
</body>
</html>
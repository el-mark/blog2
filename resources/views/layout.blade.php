<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Application</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<header>Este es el header. 
		@if (Auth::check())
			<span>Buenos días {{ Auth::user()->name }}</span>
		@endif
	</header>
	@yield('content')
</body>
</html>
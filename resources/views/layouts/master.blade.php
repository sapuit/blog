<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('head.title')</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	@yield('head.css')
</head>
<body>
	
	@include ('partials.navbar')

	@yield('body.content')

	@include ('partials.footer')
	@yield('body.js')
</body>
</html>


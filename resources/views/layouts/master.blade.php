<!DOCTYPE html>
<html>
<head>
	<title>{{ $title or "Demo"}}</title>
</head>
<body>
	@include('layouts/partials/_nav')
	@yield('content')

	<footer>
		@yield('footer')
	</footer>
</body>
</html>
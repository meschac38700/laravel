<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>@yield('title', "Home")</title>
</head>
<body>
	{{-- include partial NAV --}}
	@include('layouts/partials/_nav')
	
	{{-- Positionnement du content --}}
	@yield('content')

	{{-- Positionnement du footeer --}}
	<footer>
		@yield('footer')
	</footer>
	@stack('scripts.footer')
</body>
</html>
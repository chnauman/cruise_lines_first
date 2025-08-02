<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'AKAD - Creative Digital Agency')</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
	<meta name="author" content="Amine Akhouad">
	<meta name="description" content="@yield('description', 'AKAD is a creative and modern template for digital agencies')">

	<!-- STYLES -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animsition.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	
	@stack('styles')
</head>
<body class="animsition">
	@include('partials.header')

	@yield('content')

	@include('partials.footer')

	<!-- SCRIPTS -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/smoothScroll.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.animsition.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

	@stack('scripts')
</body>
</html>

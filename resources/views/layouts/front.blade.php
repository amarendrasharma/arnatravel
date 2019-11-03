<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/glide.min.js') }}"></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/glide.core.min.css') }}">
	<script src="https://kit.fontawesome.com/aaed27dffa.js" crossorigin="anonymous"></script>

	<style>
		.glide__slide {
			height: 350px;
		}
	</style>
</head>

<body>
	<div id="app">
		<section id="topbar" class="d-none d-lg-block">
			<div class="container clearfix">
				<div class="contact-info float-left">
					<i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
					<i class="fa fa-phone"></i> +1 5589 55488 55
				</div>
				<div class="social-links float-right">
					<a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
					<a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a>
					<a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
					<a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
					<a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>
		</section>
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm border-top  border-danger">
			<div class="container py-2">
				<a class="navbar-brand font-weight-bold text-danger" href="{{ url('/') }}">
					ARNA TRAVELS
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->

						<li class="nav-item">
							<a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('packages') }}">{{ __('Packages') }}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('contact') }}">{{ __('Contact') }}</a>
						</li>
						@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
						@endif
						@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST"
									style="display: none;">
									@csrf
								</form>
							</div>
						</li>
						@endguest
					</ul>
				</div>
		</nav>
		<main class="">
			@yield('content')
		</main>

	</div>
	@yield('js')
	</div>

</body>

</html>
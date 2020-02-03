<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	{{-- <link rel="stylesheet" href="{{asset("css/bootstrap4.min.css")}}" /> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	@yield('script')
	<style>
		.hidden {
			display: none;
		}

		[x-cloak] {
			display: none;
		}

		.opacity-0 {
			opacity: 0;
		}

		.opacity-100 {
			opacity: 1;
		}

		.transition-slow {
			transition-duration: 300ms;
		}

		.transition-medium {
			transition-duration: 200ms;
		}

		.transition-faster {
			transition-duration: 100ms;
		}

		.scale-90 {
			transform: scale(0.9);
		}

		.scale-100 {
			transform: scale(1);
		}

		.ease-in {
			transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
		}

		.ease-out {
			transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="/admin/dashboard">Dashboard</a>
			<div class="collapse navbar-collapse text-white" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="/admin/dashboard">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/admin/packages">Packages</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/admin/messages">Messages</a>
					</li>
				</ul>
			</div>
	</nav>

	<main class="py-4">
		@yield('content')
	</main>

</body>

</html>
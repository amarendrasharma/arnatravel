<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset("css/bootstrap4.min.css")}}" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	</script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
		<a class="navbar-brand" href="#">Navbar</a>
		<div class="collapse navbar-collapse text-white" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
				</li>
			</ul>
	</nav>
	<div class="container-fluid">
		<div class="row vh-100">
			<div class="d-flex">
				<div class=" bg-success mb-n5 w-25 ">
					<ui>
						<li>lom</li>
						<li>sdsd</li>
						<li>fgg</li>
						<li>ty</li>
						<li>ppp</li>
					</ui>
				</div>
				<div class="d-flex w-75 overflow-auto">

					@yield('content')
				</div>
			</div>
		</div>
	</div>
</body>

</html>
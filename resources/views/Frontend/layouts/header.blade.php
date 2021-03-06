<!DOCTYPE html>
<html>
<head>
	<title>Laravel First Project</title>
	<link rel="stylesheet" href="{{ asset('Frontend') }}/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('Frontend') }}/css/customize.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<!-- Header Section -->
	<section class="header">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light">
				<a href="" class="navbar-brand"><img src="{{ url('upload/Logo_images/'.$logo->image) }}" style="height: 50px;"></a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
					<div class="navbar-nav popular">
						<a href="{{ url('') }}" class="nav-item nav-link active">Home</a>
						<div class="nav-item dropdown">
							<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
							<div class="dropdown-menu" style="background: #BADDFB;">
								<a href="{{ route('aboutUs') }}" class="dropdown-item">About Us</a>
								<a href="{{ route('mission') }}" class="dropdown-item">Mission</a>
								<a href="{{ route('vission') }}" class="dropdown-item">Vision</a>
							</div>
						</div>
						<a href="{{ route('newsevents') }}" class="nav-item nav-link">News and Event</a>
						<a href="{{ route('contactUs') }}" class="nav-item nav-link">Contact Us</a>
						<a href="" class="nav-item nav-link">Login</a>
					</div>
					<div class="navbar-nav">
						<form class="form-inline">
							<div class="input-group">
								<input type="text" name="search" placeholder="Search">
								<div class="input-group-append">
									<button type="button" class="btn btn-secondary">Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</nav>
		</div>
	</section>

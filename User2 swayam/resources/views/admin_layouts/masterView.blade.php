<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link
	href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
	rel="stylesheet">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{URL::to('/')}}/css/style1.css">
	

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Aahan Ali</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="admin">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="user">
					<i class='bx bxs-user' ></i>
					<span class="text">Users</span>
				</a>
			</li>
			<li>
				<a href="donate">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Donations</span>
				</a>
			</li>
			<li>
				<a href="store">
					<i class='bx bxs-store' ></i>
					<span class="text">Store</span>
				</a>
			</li>
			<li>
				<a href="help">
					<i class='bx bxs-contact' ></i>
					<span class="text">Ask For Help</span>
				</a>
			</li>
			<li>
				<a href="launch">
					<i class='bx bxs-group' ></i>
					<span class="text">Launch Program</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-store' ></i>
					<span class="text">Orders</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			
			<li>
				<a href="admin_logout" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="" >
				<div class="form-input">
					<input type="search" name="search" placeholder="Search..." value="">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			{{-- <input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a> --}}
			<a href="admin_profile" class="profile">
				 Profile <i class="bi bi-person"></i>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
		
@yield('body')
</main>
<!-- MAIN -->

</section>
<!-- CONTENT -->


<script src="css/script.js"></script>

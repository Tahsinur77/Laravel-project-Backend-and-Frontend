<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/welcome.css')}}">
</head>
<body>
	<div class="container">
		<div class="navigation">
			<!-- <img src="images/logo.png" class=""> -->
			<nav>
				<ul>
					<li><a href="">HOME</a></li>
					<li><a href="{{route('about')}}">ABOUT US</a></li>
					<li><a href="{{route('contact')}}">CONTACT US</a></li>
				</ul>
			</nav>
			<!-- <img src="images/menu.png" class=""> -->
		</div>

		<div class="row">
			<div class="coloumn">
				<h1>Welcome</h1>
				<p>Welcome to our world of hardwares. Explore now and Unleash your dream setup with your desired rig.</p>

				<!-- <button type="button">Explore</button> -->
			</div>

			<div class="coloumn">
				<a href="{{route('home')}}" class="card card1">
					<h2>Explore</h2>
					
				</a>

				<a href="{{route('pcBuilder')}}" class="card card2">
					<h2>Build PC</h2>
					
				</a>

				<a href="{{route('login')}}" class="card card3">
					
					<h2>Login</h2>
				</a>

				<a href="{{route('customer.registration')}}" class="card card4">
					<h2>Registration</h2>		
				</a>
			</div>
		
		</div>
	</div>

</body>
</html>
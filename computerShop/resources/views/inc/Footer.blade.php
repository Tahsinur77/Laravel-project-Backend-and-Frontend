<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
</head>
<body>
	<div class="footer">
		
		<div class="f-container">
			<div class="f-row">
				<div class="f-col1">
					<h3>Download Our App</h3>
					<p>Download App For Android and IOs.</p>
					<div class="app-logo">
						<a href="https://play.google.com/store/apps"><img src="{{asset('storage/uploads/footer/play-store.jpg')}}"></a>
						<a href="https://www.apple.com/app-store/"><img src="{{asset('storage/uploads/footer/app-store.jpg')}}"></a>
					</div>	
				</div>
				<div class="f-col2">
					<!--<img src="">-->
					<h3>About Us</h3>
					<!--<p>About Us Text</p>-->
					<ul>
						<li><a href="{{route('about')}}">About Us</a></li>
						<li><a href="{{route('contact')}}">Contact Us</a></li>
						<li>Coupons</li>
						<li>Blog Post</li>
					</ul>
				</div>
				<div class="f-col3">
					<h3>Userful Links</h3>
					<ul>
						<li>Online Delivery</li>
						<li>Refund Policy</li>
						<li>Terms and Conditions</li>
						<li>Contact Us</li>
					</ul>
				</div>
				<div class="f-col4">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="https://www.facebook.com/"><img src="{{asset('storage/uploads/footer/facebook.svg')}}"></a></li>
						<li><a href="https://twitter.com/?lang=en"><img src="{{asset('storage/uploads/footer/twitter.svg')}}"></a></li>
						<li><a href="https://www.linkedin.com/signup"><img src="{{asset('storage/uploads/footer/in.svg')}}"></a></li>
						<li><a href="https://www.instagram.com/"><img src="{{asset('storage/uploads/footer/instagram.svg')}}"></a></li>
					</ul>
				</div>
				
			</div>
			<hr>
			
			<div class="f-row2">
				<div class="f-col5">
					<p>&copy; 2021 Trojan Horse Tech & Engineering Ltd | All Rights Reserved</p>
				</div>
				<div class="f-col6">
					<p class="f-col6">Powered By: Team Trojan Horse</p>
				</div>
			</div>
						
		</div>
	</div>
</body>
</html>
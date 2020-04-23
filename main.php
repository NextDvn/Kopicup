<?php
include '../login/proses-login.php';
?>
<!DOCTYPE html>
<html lang="eng" class="no-js">
<head>
	<link rel="icon" type="image/png" href="img/LogoWeb.png"/>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="Devon">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Kopicup &mdash; Authentic Coffee Bean</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
	<!--
	CSS
	============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="main-wrapper-first">
		<div class="hero-area relative">
			<header>
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="main.php"><img src="img/kopicup.png" alt=""></a>
							</div>
							<a>
								<?php
								if(isset($_SESSION['logged']))
								{
									echo '<a style="color:#c8a684";>Hello, Admin</a>';
								}
								?>
							</a>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="main.php">Home</a>
									<a href="#about-me">About</a>
									<a href="product.php">Products</a>
									<a href="http://localhost/Covid/login/login.php">Sign In</a>
									<?php
									if(isset($_SESSION['logged']))
									{
										echo '<a href="http://localhost/Covid/login/logout.php">Sign Out</a>';
									}
									?>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="banner-area">
				<div class="container">
					<div class="row height align-items-center">
						<div class="col-lg-7">
							<div class="banner-content">
								<h1 class=" text-uppercase mb-10" style="color:#c8a684";>Authentic Coffee Factory</h1>
								<p class="text-white mb-30">Made from oriented coffee beans.</p>
								<a href="#about-me" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">About</span><span class="lnr lnr-arrow-right"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="about-me" class="main-wrapper">
		<div class="working-process-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section-title">
							<h2 class="text-center" >About Creator</h2>
						</div>
					</div>
				</div>
				<div class="single-remark">
					<div class="row no-gutters">
						<div class="col-lg-7 col-md-6">
							<div class="remark-thumb" style="background: url(img/r1.png);"></div>
						</div>
						<div class="col-lg-5 col-md-6">
							<div class="remark-desc">
								<h4 class="text-left">About</h4>
								<p class="text-left">Name     : Gregorius Devon Bramantyo</p>
								<p class="text-left">Nickname : Devon</p>
								<p class="text-left">Born     : 9th September 2004</p>
								<p class="text-left">Location : Malang, Indonesia</p>
								<h4 class="text-left">Contact</h4>
								<p class="text-left">Instagram : <a target="_blank" href="https://www.instagram.com/gregoriusdevon/">@gregoriusdevon</a></p>
								<p class="text-left">Twitter  : <a target="_blank" href="https://twitter.com/gregoriusdevon">@gregoriusdevon</a></p>
								<p class="text-left">Email    : <a href="mailto:grandthefauto77@gmail.com">grandthefauto77@gmail.com</a></p>
								<p class="text-left">Phone    : <a href="tel:081336267047">(+62) 813 3626 7047</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main-wrapper">
		<!-- Start Feature Area -->
		<section id="products"  class="featured-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section-title text-center">
							<h2 style="color:#c8a684";>Our Exclusive Features</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="single-feature">
							<div class="thumb" style="background: url(img/t1.png);"></div>
							<div class="desc text-center mt-30">
								<h4 class="text-white">Kopicup Espresso</h4>
								<p class="text-white mb-30">$12,00</p>
								<a href="http://localhost/Covid/buy/buy.php" class="primary-btn"><span>Buy Now</span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-feature">
							<div class="thumb" style="background: url(img/t2.png);"></div>
							<div class="desc text-center mt-30">
								<h4 class="text-white">Kopicup Organic</h4>
								<p class="text-white mb-30">$8,30</p>
								<a href="http://localhost/Covid/buy/buy.php" class="primary-btn"><span>Buy Now</span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-feature">
							<div class="thumb" style="background: url(img/t3.png);"></div>
							<div class="desc text-center mt-30">
								<h4 class="text-white">Kopicup Dark Roast</h4>
								<p class="text-white mb-30">$13,00</p>
								<a href="http://localhost/Covid/buy/buy.php" class="primary-btn"><span>Buy Now</span></a>
							</div>
						</div>
					</div>
				</div>
				<br>
				<br>
				<a href="http://localhost/Covid/main/product.php" class="primary-btn" style="float: right;"><span>More >>></span></a>
			</div>
		</section>
		<!-- End Feature Area -->

		<!-- Start Subscription Area -->
		<section class="subscription-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="section-title">
							<h3>Subscribe with email</h3>
							<span>To get our latest information</span>
						</div>
					</div>
					<div class="col-lg-6">
						<div id="mc_embed_signup">
							<form target="_blank" novalidate action="https://www.youtube.com/watch?v=dQw4w9WgXcQ" method="get" class="subscription relative">
								<input type="email" name="EMAIL" placeholder="Your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required>
								<div style="position: absolute; left: -5000px;">
									<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
								</div>
								<button class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></button>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Subscription Area -->

		<!-- Start Footer Widget Area -->
		<section class="footer-widget-area">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="single-widget">
							<div class="desc">
								<h6 class="title">Address</h6>
								<p>Jl.Kemuning no.8 <br> Lowokwaru, East Java, Indonesia</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-widget">
							<div class="desc">
								<h6 class="title">Email Address</h6>
								<div class="contact">
									<a href="mailto:grandthefauto77@gmail.com">grandthefauto77@gmail.com</a> <br>
									<a href="mailto:gregorius_devon_28rpl@student.smktelkom-mlg.sch.id">gregorius_devon_28rpl@student.smktelkom-mlg.sch.id</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-widget">
							<div class="desc">
								<h6 class="title">Phone Number</h6>
								<div class="contact">
									<a href="tel:081336267047">(+62) 813 3626 7047</a> <br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer>
				<div class="container">
					<div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
						<div class="logo">
							<a href="main.php"><img src="img/kopicup.png" alt=""></a>
						</div>
						<div class="copy-right-text">Copyright &copy; |  All rights reserved to <a href="#">Gregorius Devon Bramantyo.</a></div>
						<div class="footer-social">
							<a target="_blank" href="https://www.facebook.com/Devonzzz"><i class="fa fa-facebook"></i></a>
							<a target="_blank" href="https://twitter.com/gregoriusdevon"><i class="fa fa-twitter"></i></a>
							<a target="_blank" href="https://www.instagram.com/gregoriusdevon/"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</footer>
		</section>
		<!-- End Footer Widget Area -->

	</div>




	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

<?php
include '../login/proses-login.php';
include '../buy/koneksi.php';

$sql = "SELECT * FROM beli";

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
  $pinjam[] = $data;
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<link rel="icon" type="image/png" href="img/LogoWeb.png"/>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
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
									<a href="main.php#about-me">About</a>
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
		</div>
	</div>
	<div class="main-wrapper">
		<div class="banner-area">
			<div class="container">
				<div class="row justify-content-center generic-height align-items-center">
					<div class="col-lg-8">
						<div class="banner-content text-center">
							<h1 class="text-uppercase mb-10" style="color:#c8a684";>OUR PRODUCTS</h1>
							<div class="button-group-area mt-10">
								<a style="color:#212125"; href="#products" class="genric-btn default-border radius">SHOP NOW</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Start Align Area -->
		<section>
			<div class="working-process-area">
				<div class="container">
					<h2 class="text-center">Orders</h2>
					<div class="section-top-border">
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">No</div>
									<div class="nama">Nama</div>
									<div class="phone">Phone</div>
									<div class="product">Product</div>
									<div class="size">Size</div>
									<div class="region">Region</div>
									<div class="coupon">Coupon</div>
								</div>
								<div class="table-row">
									<?php
									$no = 1;
		              foreach ($pinjam as $p ) { ?>
		                    <div class="serial"><?= $no ?></div>
												<div class="nama"><?= $p['first_name'] ?></div>
												<div class="phone"><?= $p['phone'] ?></div>
												<div class="product"><?= $p['varian'] ?></div>
												<div class="size"><?= $p['size'] ?></div>
												<div class="region"><?= $p['region'] ?></div>
												<div class="coupon"><?= $p['code'] ?></div>
		                  <?php
											$no++;
		                }
		                ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Align Area -->

		<section id="products"  class="featured-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section-title text-center">
							<h2 style="color:#c8a684";>Products</h2>
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
								<a href="http://localhost/Covid/buy/buy.php" class="primary-btn"><span>Order Now</span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-feature">
							<div class="thumb" style="background: url(img/t2.png);"></div>
							<div class="desc text-center mt-30">
								<h4 class="text-white">Kopicup Organic</h4>
								<p class="text-white mb-30">$8,30</p>
								<a href="http://localhost/Covid/buy/buy.php" class="primary-btn"><span>Order Now</span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-feature">
							<div class="thumb" style="background: url(img/t3.png);"></div>
							<div class="desc text-center mt-30">
								<h4 class="text-white">Kopicup Dark Roast</h4>
								<p class="text-white mb-30">$13,00</p>
								<a href="http://localhost/Covid/buy/buy.php" class="primary-btn"><span>Order Now</span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-feature">
							<div class="thumb" style="background: url(img/t1.png);"></div>
							<div class="desc text-center mt-30">
								<h4 class="text-white">Kopicup Luwak</h4>
								<p class="text-white mb-30">$10,50</p>
								<a href="http://localhost/Covid/buy/buy.php" class="primary-btn"><span>Order Now</span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-feature">
							<div class="thumb" style="background: url(img/t2.png);"></div>
							<div class="desc text-center mt-30">
								<h4 class="text-white">Kopicup Hazelnut</h4>
								<p class="text-white mb-30">$11,99</p>
								<a href="http://localhost/Covid/buy/buy.php" class="primary-btn"><span>Order Now</span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-feature">
							<div class="thumb" style="background: url(img/t3.png);"></div>
							<div class="desc text-center mt-30">
								<h4 class="text-white">Kopicup Black Forest</h4>
								<p class="text-white mb-30">$13,00</p>
								<a href="http://localhost/Covid/buy/buy.php" class="primary-btn"><span>Order Now</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Start Footer Widget Area -->
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

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>@yield('title')</title>
	<!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,700,700italic,900,900italic,500italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- Flaticon CSS -->
	<link href="fonts/flaticon/flaticon.css" rel="stylesheet">
	<!-- font-awesome CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Offcanvas CSS -->
	<link href="css/off-canvas.css" rel="stylesheet">
	<!-- animate CSS -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- language CSS -->
	<link href="css/language-select.css" rel="stylesheet">
	<!-- owl.carousel CSS -->
	<link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet">
	<!-- magnific-popup -->
	<link href="css/magnific-popup.css" rel="stylesheet">
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Template Core Styles -->
	<link href="css/template.css" rel="stylesheet">
	<!-- Main Menu Styles -->
	<link href="css/menu.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	<!-- Responsive CSS -->
	<link href="css/responsive.css" rel="stylesheet">

	<script src="js/vendor/modernizr-2.8.1.min.js"></script>
	<!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
		    <script src="js/vendor/html5shim.js"></script>
		    <script src="js/vendor/respond.min.js"></script>
		    <![endif]-->
		</head>


		<body class="home" id="page-top">
			<header class="header home">
				<div class="container mainnav">
					<div class="navbar-header">

						<div id="search">
							<button type="button" class="close">×</button>
							<form>
								<input type="search" value="" placeholder="type keyword(s) here" />
								<button type="submit" class="btn btn-primary btn-lg">Search</button>
							</form>
						</div>
					</div>

					<nav class="navbar navbar-default" role="navigation">
						<span class="search-button visible-xs"><a href="#search"><i class="fa fa-search"></i></a></span>

						<!-- offcanvas-trigger -->
						<button type="button" class="navbar-toggle collapsed" >
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-bars"></i>
						</button>

						@yield('navbar')

					</nav>
				</div><!-- /.container -->
			</header>
            
            @yield('content')

		<!-- footer-widget-section start -->
		<section class="footer-widget-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="footer-widget">
							<h3>SISTEM Fasilkom UI 2017<br>#UnleashISPotential</h3>
							<br>
							<address>
								<a href="#">sistem.csui@gmail.com</a>
								<br>
								<br>
								<span class="map-marker">Pondok Cina, Beji<br>Depok<br>West Java, 16424</span>
							</address>
						</div><!-- /.footer-widget -->
					</div><!-- /.col-sm-4 -->

					<div class="col-sm-4">
						<div class="footer-widget">
							<h3>Useful Links</h3>
							<div class="row">
								<div class="col-sm-6">
									<ul class="quick-links">
										<li><a href="about.html">About us</a></li>
										<li><a href="article.html">Article</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="product.html">Products</a></li>
										<li><a href="news.html">News</a></li>
									</ul>
								</div>
							</div>
						</div><!-- /.footer-widget -->
					</div><!-- /.col-md-4 -->

					<div class="col-sm-4">
						<div class="footer-widget">
							<h3>Stay in Touch</h3>
							<p>Enter your email address to receive news &amp; offers from us</p>
							<form class="newsletter-form">
								<div class="form-group">
									<label class="sr-only" for="InputEmail1">Email address</label>
									<input type="email" class="form-control" id="InputEmail1" placeholder="Your email address">
									<button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
								</div>
							</form>		
							<ul class="social-links list-inline">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>        				
						</div><!-- /.footer-widget -->
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.cta-section -->
		<!-- footer-widget-section end -->

		<!-- copyright-section start -->
		<footer class="copyright-section text-center">
			<span>Copyright © SISTEM Fasilkom UI 2017</span>
		</footer>
		<!-- copyright-section end -->
	</div> <!-- .st-content -->
</div> <!-- .st-pusher -->

<!-- OFFCANVAS MENU -->
<div class="offcanvas-menu offcanvas-effect">
	<div class="offcanvas-wrap">
		<div class="off-canvas-header">
			<button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
		</div>
		<ul id ="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
			<li class="active"><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
			<li><a href="about.html">About</a></li>
			<li>
				<a href="#">Services</a>
				<ul>
					<li>
						<a href="service.html">Service</a>
					</li>
					<li>
						<a href="service-single.html">Single service</a>
					</li>
				</ul>

			</li>
			<li><a href="#">Blog</a>
				<ul>
					<li>
						<a href="blog.html">Blog Standard</a>
					</li>
					<li>
						<a href="blog-single.html">Single blog</a>
					</li>
				</ul>
			</li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="typography.html">Typography</a></li>
		</ul>
		<div class="offcanvas-widgets hidden-sm hidden-xs">
			<div id="twitterWidget">
				<h2>Tweeter feed</h2>				    	
				<div class="twitter-widget"></div>
			</div>
			<div class="newsletter-widget">
				<h2>Stay in Touch</h2>
				<p>Enter your email address to receive news &amp; offers from us</p>

				<form class="newsletter-form">
					<div class="form-group">
						<label class="sr-only" for="InputEmail1">Email address</label>
						<input type="email" class="form-control" id="InputEmail2" placeholder="Your email address">
						<button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
					</div>
				</form>		
			</div><!-- newsletter-widget -->
		</div>
	</div>
</div><!-- .offcanvas-menu -->
</div><!-- /st-container -->


<!-- Preloader -->
<div id="preloader">
	<div id="status">
		<div class="status-mes"></div>
	</div>
</div>


<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- owl.carousel -->
<script src="owl.carousel/owl.carousel.min.js"></script>
<!-- Magnific-popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Offcanvas Menu -->
<script src="js/hippo-offcanvas.js"></script>
<!-- stellar -->
<script src="js/jquery.stellar.js"></script>
<!-- classie -->
<script src="js/classie.js"></script>
<!-- sticky kit -->
<script src="js/jquery.sticky-kit.min.js"></script>
<!-- language select -->
<script src="js/selectFx.js"></script>
<!-- Twitter feed -->
<script src="js/twitterFetcher_min.js"></script>
<!-- Youtube Video-player -->
<script src="js/jquery.mb.YTPlayer.js"></script>
<!-- Custom Script -->
<script src="js/scripts.js"></script>
@yield('footer')
</body>
</html>
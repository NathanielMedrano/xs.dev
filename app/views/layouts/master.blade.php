<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>CC GROUP</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/demo/favicon.ico" />

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="css/sky-forms.css" rel="stylesheet" type="text/css" />
		<link href="css/weather-icons.min.css" rel="stylesheet" type="text/css" />
		<link href="css/line-icons.css" rel="stylesheet" type="text/css" />
		<link href="plugins/owl-carousel/owl.pack.css" rel="stylesheet" type="text/css" />
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
		<link href="css/animate.css" rel="stylesheet" type="text/css" />
		<link href="css/flexslider.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="css/revolution-slider.css" rel="stylesheet" type="text/css" />
		<link href="css/layerslider.css" rel="stylesheet" type="text/css" />

		<!-- BLOG -->
		<link href="css/layout-blog.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="css/layout.css" rel="stylesheet" type="text/css" />
		<link href="css/header-default.css" rel="stylesheet" type="text/css" />
		<link href="css/footer-default.css" rel="stylesheet" type="text/css" />
		<link href="css/color_scheme/red.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- Morenizr -->
		<script type="text/javascript" src="plugins/modernizr.min.js"></script>

		@yield('top-script')
		<!--[if lte IE 8]>
			<script src="plugins/respond.js"></script>
		<![endif]-->
	</head>
	
	<!-- 
		Available body classes: 
			smoothscroll			= enable chrome browser smooth scroll
			grey 					= grey content background
			boxed 					= boxed style
			pattern1 ... pattern10 	= background pattern

		Background Image - add to body: 
			data-background="images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll">

		<div id="wrapper">

			<div id="header"><!-- class="sticky" for sticky menu -->

				<!-- Top Bar -->
				<header id="topBar">
					<div class="container">

						<div class="pull-right fsize13 margin-top10 hide_mobile">

							<!-- mail , phone -->
							<a href="mailto:pcontreras@theccgroup.co"> <i class="fa fa-envelope"></i> pcontreras@theccgroup.co</a>

							<div class="block text-right"><!-- social -->
								(210) 324 4222 &bull;
								<a href="www.linkedin.com/pub/priscilla-contreras/28/379/879" class="social fa fa-linkedin"></a>
							</div><!-- /social -->

						</div>

						<!-- Logo -->
						<a class="logo" href="index.html">
							<img src="img/newCC.png" height="70" alt="" />
						</a>

					</div><!-- /.container -->
				</header>
				<!-- /Top Bar -->


				<!-- Top Nav -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Top Nav -->
						<div class="navbar-collapse nav-main-collapse collapse">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="mega-menu dropdown active">
										<a href="{{{ action('HomeController@index') }}}">
											HOME 
										</a>
									</li>
									<li>
										<a href="{{{ action('HomeController@about') }}}">ABOUT US </a>
									</li>
									<li class="dropdown">
										<a href="{{{ action('HomeController@services') }}}">SERVICES </a>
									</li>
									<li class="dropdown">
										<a href="{{{ action('HomeController@cert') }}}">CERTIFICATIONS </a>
									</li>
								</ul>

							</nav>
						</div>
						<!-- /Top Nav -->

					</div><!-- /.container -->
				</header>
				<!-- /Top Nav -->

			</div>


		@yield('content')
			

			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">

						<!-- col #1 -->
						<div class="logo_footer col-md-8">

							<h4>About <strong>Us</strong></h4>

							<p class="block">
								<p>
									<strong><em>Why choose us? </em></strong> 
									The CCGroup is a growing woman owned business founded upon a commitment to strong client relationships and building a reputation of excellence. Our philosophy is to establish lasting relationships with our customers by exceeding their expectations and attaining their trust through exceptional performance. We strive to over-deliver so we always meet our customer’s cost, schedule and technical performance requirements.
									<a href="{{{ action('HomeController@about') }}}">View More <i class="fa fa-arrow-right"></i></a>
								</p>
								
							</p>
						</div>
						<!-- /col #1 -->

						<!-- col #2 -->
						<div class="spaced col-md-4">
							<h4>Contact <strong>Us</strong></h4>
							<h4><a href="mailto:pcontreras@theccgroup.co"> <i class="fa fa-envelope"></i> pcontreras@theccgroup.co</a></h4>
							<h4>(210) 324 4222</h4>
						</div>
						<!-- /col #2 -->

					</div>

				</div>

				<hr />

				<div class="copyright">
					<div class="container text-center fsize12">
						Developed by <a href="http://www.natstech.me" target="_blank" title="bootstrap themes &amp; templates" class="copyright">NatsTech</a> &bull;
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div><!-- /#wrapper -->

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript" src="plugins/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="plugins/jquery.isotope.js"></script>
		<script type="text/javascript" src="plugins/masonry.js"></script>

		<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="plugins/knob/js/jquery.knob.js"></script>
		<script type="text/javascript" src="plugins/flexslider/jquery.flexslider-min.js"></script>

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="plugins/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="plugins/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="js/revolution_slider.js"></script>

		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>
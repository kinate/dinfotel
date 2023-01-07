<!DOCTYPE html>
<html lang="zxx"> 
	
<head>
		<!-- meta tag -->
		<meta charset="utf-8">
		<title>@yield('page_title')</title>
		<meta name="description" content="">
		<!-- responsive tag -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
		<link rel="apple-touch-icon" href="apple-touch-icon.html">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
		<!-- Bootstrap v4.4.1 css -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<!-- Uicons Regular Rounded css -->
		<link rel="stylesheet" type="text/css" href="assets/css/uicons-regular-rounded.css">
		<!-- flaticon css -->
		<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
		<!-- animate css -->
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<!-- slick css -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- off canvas css -->
		<link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
		<!-- magnific popup css -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Main Menu css -->
		<link rel="stylesheet" href="assets/css/rsmenu-main.css">
		<!-- nivo slider CSS -->
		<link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/nivo-slider.css">
		<link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/preview.css">
		<!-- spacing css -->
		<link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
		<!-- style css -->
		<link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
		<!-- responsive css -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		
	</head>
	<body class="defult-home">
		
		<div class="offwrap"></div>

		<!--Preloader start here-->
	   	<div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="assets/images/favicon.png" alt="Konstruk - Construction & Building Html Template "></div>
                </div>
            </div>              
        </div>
		<!--Preloader area end here-->
			
		<!-- Main content Start -->
		<div class="main-content">

			<!--Full width header Start-->
			<div class="full-width-header">
				<!--Header Start-->
                    @include('Layouts.header')
				<!--Header End-->
			</div>
			<!--Full width header End-->

			@yield('page_contents')

		</div> 
		<!-- Main content End -->
	 
		<!-- Footer Start -->
		<footer id="rs-footer" class="rs-footer footer-main-home">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 pr-20 md-pr-15 md-mb-20">
							<div class="footer-logo mb-51 md-mb-30">
								<a href="index.html"><img src="assets/images/logo-dark.png" alt=""></a>
							</div>
							<div class="textwidget">
								<p class="pb-20">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor in cididunt ut labore.</p>
								<p class="pb-25"><strong>Opening Hours</strong> : Monday – Sat: 9am to 6pm</p>
							</div>
							<ul class="footer-social md-mb-30">  
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>                     
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>                     
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>                     
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>                     
                          	</ul>
						</div>
						<div class="col-lg-3 md-mb-10">
							<h3 class="footer-title">Contact Info</h3>
							<ul class="address-widget">
                                <li>
                                    <i class="fi fi-rr-map-marker-home"></i>
                                    <div class="desc">
                                    	Ta-134/A, Gulshan Badda Link<br>
                                    	Rd, Dhaka
									</div>
                                </li>
                                <li>
                                    <i class="fi fi-rr-phone-call"></i>
                                    <div class="desc">
                                       <a href="tel:(+880)15569569365">(+880)155 69569 365</a><br>
                                       <a href="tel:(+880)15569569366">(+880)155 69569 366</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="fi fi-rr-envelope-plus"></i>
                                    <div class="desc">
                                        <a href="mailto:support@devsdesign.com">support@devsdesign.com</a><br>
                                        <a href="mailto:infoname@gmail.com">infoname@gmail.com</a>
                                    </div>
                                </li>
                            </ul>
						</div>
						<div class="col-lg-3 md-mb-10">
							<h3 class="footer-title">Our Services</h3>
							<ul class="site-map">
                                <li><a href="general-construction.html">General Construction</a></li>
                                <li><a href="property-maintenance.html">Property Maintenance</a></li>
                                <li><a href="project-managment.html">Project Managment</a></li>
                                <li><a href="virtual-design-build.html">Virtual Design & Build</a></li>
                                <li><a href="preconstruction.html">Preconstruction</a></li>
                                <li><a href="design-build.html">Design Build</a></li>
                            </ul>
						</div>
						<div class="col-lg-3">
							<h3 class="footer-title">Newsletter</h3>
							<p class="widget-desc">Tetur adipiscing elit, sed do eiusmod tempor in cididunt ut labore.</p>
							<p>
                                <input type="email" name="email" placeholder="Your Email Address" required="">
                                <input type="submit" value="Subscribe Now">
                            </p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                            <ul class="copy-right-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright text-lg-start text-center">
                                <p>© 2022 Konstruk.  Designed By <a href="https://devsdesign.net/" target="blank">Devsdesign</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</footer>
		<!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->

		<!-- Search Modal Start -->
		<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
		    <div class="modal-dialog modal-dialog-centered">
		        <div class="modal-content">
		            <div class="search-block clearfix">
		                <form>
		                    <div class="form-group">
		                        <input class="form-control" placeholder="Search Here..." type="text">
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Search Modal End -->

		<!-- modernizr js -->
		<script src="assets/js/modernizr-2.8.3.min.js"></script>
		<!-- jquery latest version -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap v4.4.1 js -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- op nav js -->
		<script src="assets/js/jquery.nav.js"></script>
		<!-- owl.carousel js -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- isotope.pkgd.min js -->
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<!-- wow js -->
		<script src="assets/js/wow.min.js"></script>
		<!-- Skill bar js -->
		<script src="assets/js/skill.bars.jquery.js"></script>
		<!-- imagesloaded js -->
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>
		<!-- Slick js -->
		<script src="assets/js/slick.min.js"></script>
		<!-- waypoints.min js -->
		<script src="assets/js/waypoints.min.js"></script>
		<!-- magnific popup js -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- counterup.min js -->
		<script src="assets/js/jquery.counterup.min.js"></script> 
		<!-- Nivo slider js -->
		<script src="assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>		
		<!-- contact form js -->
		<script src="assets/js/contact.form.js"></script>
		<!-- main js -->
		<script src="assets/js/main.js"></script>
	</body>

</html>
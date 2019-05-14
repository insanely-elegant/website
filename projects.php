<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Insanely Elegant - Web Development & Design Studio</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<?php
		include 'headerjs.php';
		 ?>
	</head>
	<body>
	<!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- prelaoder -->
	<!-- <div id="preloader">
    <div class="preloader-wrapper">
        <div class="spinner"></div>
    </div>
    <div class="preloader-cancel-btn">
        <a href="#" class="btn btn-secondary prelaoder-btn">Cancel Preloader</a>
    </div>
</div> -->
	<!-- END prelaoder -->
<!-- header section -->
<!-- End header section -->

<!-- welcome section -->
<!--breadcumb start here-->
<?php
include ('menu.php');
?>
<div class="xs-inner-banner inner-banner2" >
	<div class="container">
		<div class="row">
			<div class="col-md-7 mx-auto">
				<div class="inner-banner">
					<h2 class="inner-banner-title">Projects</h2>
					<ul class="breadcumbs list-inline">
						<li><a href="index.php">Home</a></li>
						<li>Projects</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--breadcumb end here--><!-- End welcome section -->

<!-- agency portfolio masonry section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row no-gutters agency-filter-wraper">
            <div class="col-lg-6">
                <div class="agency-section-title">
                    <h3 class="main-title">Recent <em>Projects</em></h3>
                </div><!-- .agency-section-title END -->
            </div>
            <div class="col-lg-6">
                <div class="filter-button-wraper">
                    <ul id="filters" class="option-set clearfix main-filter" data-option-key="filter">
                        <li><a href="#" data-option-value="*" class="selected">ALL PROJECTS</a></li>
                        <li><a href="#" data-option-value=".item1">TYPE OF WORKS</a></li>
                        <li><a href="#" data-option-value=".item2">TYPE OF CLIENTS</a></li>
                    </ul>
                </div><!-- .filter-button-wraper END -->
            </div>
        </div><!-- .row end -->
        <div class="cases-grid">
            <div class="grid-item item1">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="assets/images/cases-card/case-card-1.jpg" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">Software Festivals Stall</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->
            <div class="grid-item item2">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="assets/images/cases-card/case-card-2.jpg" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">Platform 10: Live Feed</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->
            <div class="grid-item item1">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="assets/images/cases-card/case-card-3.jpg" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">Fashion Week (AW18)</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->
            <div class="grid-item item2">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="assets/images/cases-card/case-card-4.jpg" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">Penn Station Concourse</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->
            <div class="grid-item item2">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="assets/images/cases-card/case-card-5.jpg" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">Dubai Poster House</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->
            <div class="grid-item item1">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="assets/images/cases-card/case-card-6.jpg" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">The Atlantic Theater</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->
        </div><!-- .cases-grid END -->
    </div><!-- .container END -->
</section><!-- agency portfolio masonry section end -->

<!-- language switcher strart -->
<!-- xs modal -->
<!-- End xs modal --><!-- end language switcher strart -->

<!-- search panel strart -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="xs-search-panel">
                <form action="#" method="POST" class="xs-search-group">
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                    <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div><!-- End xs modal --><!-- end search panel strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group cart-group">
    <div class="xs-overlay black-bg"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading media">
                <div class="media-body">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
            </div>
            <div class="xs-empty-content">
                <h3 class="widget-title">Shopping cart</h3>
                <h4 class="xs-title">No products in the cart.</h4>
                <p class="empty-cart-icon">
                    <i class="icon icon-shopping-cart"></i>
                </p>
                <p class="xs-btn-wraper">
                    <a class="btn btn-primary" href="shop.html">Return To Shop</a>
                </p>
            </div>
        </div>
    </div>
</div>    <!-- END sidebar cart item -->    <!-- END offset cart strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay black-bg"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    <i class="icon icon-cross"></i>
                </a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-logo-wraper">
                    <a href="index-2.html">
                        <img src="assets/images/color-logo.png" alt="sidebar logo">
                    </a>
                </div>
                <p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of  </p>
                <ul class="sideabr-list-widget">
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/location.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>759 Pinewood Avenue</p>
                                <span>Marquette, Michigan</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/mail.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="mailto:info@domain.com">info@domain.com</a>
                                <span>Online Support</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/phone.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="tel:906-624-2565">906-624-2565</a>
                                <span>Mon-Fri 8am-5pm</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                </ul><!-- .sideabr-list-widget -->
                <div class="subscribe-form-wraper">
                    <p>Get Subscribed!</p>
                    <form action="#" method="POST" class="subscribe-form">
                        <label for="sub-input"></label>
                        <div class="form-group">
                            <input type="email" name="email" id="sub-input" placeholder="Enter your mail here" class="form-control">
                            <button class="sub-btn" type="submit"><i class="icon icon-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="social-list version-2">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                </ul><!-- .social-list -->
                <div class="text-center">
                    <a href="https://themeforest.net/user/xpeedstudio/portfolio" class="btn btn-primary">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</div>    <!-- END sidebar widget item -->    <!-- END offset cart strart -->

		<!-- footer section start -->
		<footer class="xs-footer-section">
			<div class="footer-top-area">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="footer-widget">
								<div class="footer-logo-wraper">
									<a href="index-2.html" class="footer-logo">
										<img src="assets/images/footer-logo.png" alt="footer logo">
									</a>
								</div>
								<p><a href="https://www.google.com/maps/place/London,+UK/@51.528308,-0.3817812,10z/data=!3m1!4b1!4m5!3m4!1s0x47d8a00baf21de75:0x52963a5addd52a99!8m2!3d51.5073509!4d-0.1277583" target="_blank">5272 Lyngate Ct Burke, VA <br> 2015-1688</a> </p>
								<p>Tel.:<a href="tel:+1%20998%20150%30%2020"> +1 998 150 30 20</a> <br> Mail : <a href="mailto:info@agencify.com">info@agencify.com</a></p>
							</div><!-- .footer-widget END -->
						</div>
						<div class="col-md-6 col-lg-2">
							<div class="footer-widget">
								<h4 class="widget-title">About</h4>
								<ul class="xs-list">
									<li><a href="about.html">About us</a></li>
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="service.html">Services</a></li>
									<li><a href="portfolio.html">Portfolio</a></li>
								</ul><!-- .xs-list END -->
							</div><!-- .footer-widget END -->
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="footer-widget">
								<h4 class="widget-title">Instagram</h4>
								<div class="insta-feed-wraper">
									<ul class="insta-feed"></ul>
								</div><!-- .insta-feed-wraper END -->
							</div><!-- .footer-widget END -->
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="footer-widget">
								<h4 class="widget-title">Subscribe</h4>
								<form action="#" class="newsletter-form subscribe-form" method="POST">
									<input type="email" name="email" id="sub-input-one" placeholder="Your Email" class="form-control">
									<label for="sub-input-one"></label>
									<button type="submit" class="send-button"><i class="icon icon-paper-plane"></i></button>
								</form><!-- .newsletter-form END -->
								<ul class="social-list">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul><!-- .social-list END -->
							</div><!-- .footer-widget END -->
						</div>
					</div><!-- .row END -->
				</div><!-- .container END -->
			</div><!-- .footer-top-area END -->
			<div class="footer-bottom-area">
				<div class="container">
					<div class="copyright-section text-center">
						<p>Copyright &copy; 2018 <a href="https://themeforest.net/user/xpeedstudio/portfolio">Agencify</a> Theme</p>
					</div><!-- .copyright-section END -->
				</div>
			</div><!-- .footer-bottom-area END -->
		</footer>
		<!-- footer section end -->
		<!-- js file start -->
		<?php
		include 'footerjs.php';
		 ?>
			<!-- End js file -->
	</body>

<!-- Mirrored from html.xpeedstudio.com/agmycoo/portfolio-masonry.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 May 2019 12:06:46 GMT -->
</html>

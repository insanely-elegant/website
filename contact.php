<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="zxx">
	
<!-- Mirrored from html.xpeedstudio.com/agmycoo/contact-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 May 2019 12:06:47 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Contact Us</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php
		include 'headerjs.php';
		?>
	</head>
	<body>
	<!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
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
    <!-- header section starts -->
    <?php
    include ('menu.php');
    ?>
    <!-- Header section ends -->
<!-- welcome section -->
<!--breadcumb start here-->
<div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/2.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 mx-auto">
				<div class="inner-banner">
					<h2 class="inner-banner-title">Contact Us</h2>
					<ul class="breadcumbs list-inline">
						<li><a href="index.php">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--breadcumb end here--><!-- End welcome section -->

<!-- agency contact info section -->
<section class="xs-section-padding contact-info-area" data-scrollax-parent="true">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="contact-info2">
                    <div class="agency-section-title">
                        <h3 class="sub-title">Insanely Elegant</h3>
                        <h4 class="main-title">We love coding</h4>
                    </div><!-- .agency-section-title END -->
                    <p>We work systematically to integrate corporate responsibility in our core business and make our expertise available the benefit of the societies where we</p>
                    <ul class="contact-info-list">
                        <li>
                            <strong>Address</strong>
                            <div class="list-content">
                               <a href=""> Kormangala Bengaluru</a>
                            </div>
                        </li>
                        <li>
                            <strong>Phone</strong>
                            <div class="list-content">
                                <a href="#">+91 123-456-789</a>
                            </div>
                        </li>
                        <li>
                            <strong>Email</strong>
                            <div class="list-content">
                                <a href="#">hello@insanelyelegant.com</a>
                            </div>
                        </li>
                    </ul><!-- .contact-info-list END -->                    
                    <ul class="social-list version-2">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul><!-- .social-list .version-2 END -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-info-image-wraper">
                    <div class="contact-info-image">
                        <img src="assets/images/contact-info-image.jpg" alt="">
                    </div>
                </div><!-- .contact-info-image-wraper END -->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
    <div class="doodle-parallax">
        <img src="assets/images/doodle/parallax-7.png" data-scrollax="properties: { translateY: '50%' }" class="single-doodle one" alt="">
        <img src="assets/images/doodle/parallax-8.png" data-scrollax="properties: { translateY: '-50%' }" class="single-doodle two" alt="">
    </div>
</section><!-- agency contact info section end -->
<!-- agency contact section -->
<div class="agency-contactus">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="agency-section-title text-center style4">
                    <h4 class="main-title">Have an Idea?</h4>
                    <p>Don't worry we would never sell your information, We respect your privacy.</p>
                    <span class="line"></span>
                </div>
            </div>
        </div>        
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="from-wraper">
                    <form action="" id="xs-contact-form" class="contact-form style2" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="First Name *" name="firstname" id="xs_contact_name" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Last Name *" name="lastname" id="xs_contact_last_name" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="number" placeholder="Phone Number *" name="phonenumber" id="xs_contact_number" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Email *" name="lastname" id="xs_contact_email" class="form-control">
                            </div>
                        </div>
                        <input type="text" placeholder="Subject *" name="subject" id="xs_contact_subject" class="form-control">
                        <textarea name="massage" id="x_contact_massage" placeholder="Your Message... *" class="form-control" cols="30" rows="10"></textarea>
                        <div class="btn-wraper">
                            <input type="submit" name="submit" id="xs_contact_submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</div><!-- agency contact section end -->
		<!-- footer section start -->
        <?php
        include ('footer.php');
        ?>
		<!-- footer section end -->	
        <!-- js file start -->
    <?php
    include 'footerjs.php';
    ?>
		<!-- End js file -->
	</body>
</html>
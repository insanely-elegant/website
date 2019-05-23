<?php
$result="";
$result2="";
if(isset($_POST['submit'])) {
    require 'phpmailer\PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure;
    $mail->Username='insanewebdevs@gmail.com';
    $mail->Password='Bullshit9895'; 
    $mail->setFrom($_POST['email']);
    $mail->addAddress('insanewebdevs@gmail.com');
    $mail->addReplyTo($_POST['email']);

    $mail->isHTML(true);
    $mail->Subject='From Contact Form : ' .$_POST['subject'];
    $mail->Body='<h2 align=center>Name  :  '.$_POST['firstname'] .$_POST['lastname'] .'<br>Email  :  '.$_POST['email']. '<br>
    Message  :  '.$_POST['message']. '</h2>';

    if(!$mail->send()){
        $result="Something went wrong! Try Again.";
    }
    else{
        $result2="Thanks " .$_POST['firstname']." for contacting us. We'll get back to you soon!";
    }
    
    
}

?>



<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="zxx">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Contact Us - Insanely Elegant</title>
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
                               <a href="">12th Cross, BTM 1st Stage, Bengaluru
                                </a>
                            </div>
                        </li>
                        <li>
                            <strong>Phone</strong>
                            <div class="list-content">
                                <a href="#">+91 636-236-8425</a>
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
                    <h4 class="main-title">Have an Idea? Talk to Us</h4>
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
                                <input type="email" placeholder="Email *" name="email" id="xs_contact_email" class="form-control">
                            </div>
                        </div>
                        <input type="text" placeholder="Subject *" name="subject" id="xs_contact_subject" class="form-control">
                        <textarea name="message" id="x_contact_massage" placeholder="Your Message... *" class="form-control" cols="30" rows="10"></textarea>
                        <div class="btn-wraper">
                            <input type="submit" name="submit" id="xs_contact_submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- .row END -->
        <div class="alert alert-success">
    <?= $result2; ?>
  </div>
  <div class="alert alert-danger">
  <?= $result; ?>
  </div>
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
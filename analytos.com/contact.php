<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Analytos - Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
    #contactForm label {
	float: left;
	font-size: 14px;
	margin-right: 15px;
	text-align: right;
	width: 100px;
}
span{
	text-align:center;
	    color: #3498db;}
    </style>
</head>
<body>
   <?php
		if (isset($_POST['submit'])) {
		$error = "";
 
		if (!empty($_POST['name'])) {
		$name = $_POST['name'];
		} else {
		$error .= "You didn't type in your name. <br />";
		}
 
		if (!empty($_POST['email'])) {
		$email = $_POST['email'];
		  if (!preg_match("/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)){ 
		  $error .= "The e-mail address you entered is not valid. <br/>";
		  }
		} else {
		$error .= "You didn't type in an e-mail address. <br />";
		}
 
        if (!empty($_POST['phone'])) {
  $phone= $_POST['phone'];
  } else {
  $error .= "You didn't type in a phone number. <br />";
}
         
		if (!empty($_POST['message'])) {
		$message = $_POST['message'];
		} else {
		$error .= "You didn't type in a message. <br />";
		}
 
		if (!empty($_POST['code'])) { 
		$code = $_POST['code'];
		} else { 
		$error .= "The captcha code you entered does not match. Please try again. <br />";    
		}
 
		if (empty($error)) {
		$from = 'From: ' . $name . ' <' . $email . '>';
		$to = "vinay.mistry@nipponitsolutions.com , harika.dhandu@nipponitsolutions.com";
		$subject = "[Web Enquiry Analytos] " .$name. " - " .$email ;
        $content = "\n Name: " .$name . "\n Phone number: " . $phone . "\n Message: " . $message . "\n Email Address: " . $email;
		$success = "<h2><span>Thank you! Your message has been sent!</span></h2>";
		mail($to,$subject,$content,$from);
		}
		}
		?> 
    <div id="page" class="page">
		<div class="item" id="top-bar">
			<div class="container">
				
				</div>	
			</div>
    	</div><!-- /.item -->
		<div class="item header padding-bottom-0" id="header">
    
    		<div class="wrapper">
    	
    			<div class="container">
    		<a href="index.html" class="navbar-brand"><img src="images/logo_analytos.png" alt="Analytos" class="logo"></a>
    				<nav role="navigation" class="navbar plain">
    					<div class="navbar-header">
    						
    						
    						</div>
    								
    					<div id='cssmenu'>
                         <ul>
                         <li class='active propClone'><a href='index.html'><i class="fa fa-home"></i></a></li>
                         <li class='has-sub'><a href='#'>About Us</a>
                         <ul>
                       <li><a href='company.html'>Company</a></li>
                        <li><a href='team.html'>Team</a></li>
                        <!-- <li><a href='new&updates.html'>News and Updates</a></li>-->
                        </ul>
                         </li>
                         <li class='has-sub'><a href='#'>Services</a>
                        <ul>
                        <li><a href='bigdata.html'>Big Data on Cloud</a></li>
                        <li><a href='methodology.html'>Methodologies</a></li>
                        <li><a href='strategy.html'>Strategy</a></li>
                        <li><a href='data-sceince.html'>Data Science</a></li>
                        <li><a href='consulting-services.html'>Consulting Services</a></li>
                         <li><a href='valueaddservices.html'>Value Add Services</a></li>
                        </ul>
                       </li>
                      <!--<li><a href='#'>Training</a></li>-->
                      <li><a href='usecases.html'>Use Cases</a></li>
                      <li><a href='tech.html'>Technology</a></li>
                      <li><a href='career.html'>Career</a></li>
                     <li><a href='contact.php'>Contact Us</a></li>
                   
                  </ul>
                 </div>
    				</nav>
    		
    			</div><!-- /.container -->
    	
    		</div><!-- /.wrpaper -->
    	</div><!-- /.item -->
    	<!--<div class="item padding-top-150 padding-bottom-150" id="slider3">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12 text-center">
						<img src="images/logo.png" alt="logo">
						<div class="slider-decription">	
							<h2>ANALYTOS CONSULTING CAN HELP TRANSFORM</h2>
							<h1 class="color-white">YOUR BUSINESS</h1>
						</div>	
						<div class="slider-btn">
							<a href="">View Our Projects <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>	
				</div>	
			</div>
    		
    	
    	</div>--><!-- /.item -->
		<div class="item padding-top-74">
			<div class="container">
				<div class="row">
					<div class="title text-center">
							<h1>Get in Touch <span>With Us</span></h1>
							<div class="title-border background-color-blue"></div>
							<div class="col-md-8 sub-title">
								<p><span class="main-color"> WE ARE HAPPY </span> to talk you through any projects.If you are interested in our construction services 
please contact us to discuss the opportunity at <span>info@analytos.com</span>
</p>
							</div>
					</div>	
				</div>	
			</div>
			<div class="padding-top-70 padding-bottom-70" id="contact">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4 contact-info">
							<h3>USA ADDRESS</h3>	
							<p>10699 Hale Pl, </p>
							<p>cupertino,</p>
							<p>ca 95014</p>
                            
                            
						</div>	
						<div class="col-md-4 col-sm-4 col-xs-4 contact-info">
							<h3>INDIA ADDRESS</h3>	
							<p>5, Vishal Apartments</p>
							<p>S.V.Patel Road Kandivali(W),</p>
                            <p>Mumbai - 400067</p>
                            
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 margin-top-50 contact-info">
							<!--<h3>OFFICE HOURS</h3>	-->
							<p><strong>USA:</strong> 001 408 898 2474</p>
                            <p><strong>India:</strong> 0091 9821884629</p>
							<p><strong>Email:</strong> info@analytos.com</p>
						</div>	
					</div>
				</div>
			</div>
		
		</div><!-- /.item -->
		<div class="item padding-top-77 padding-bottom-110" id="contact-form">
			<div class="container">
				<div class="row" id="contactForm">
                <?php
			if (!empty($error)) {
			echo '<p class="error"><strong>Your message was NOT sent<br/> The following error(s) returned:</strong><br/>' . $error . '</p>';
			} elseif (!empty($success)) {
			echo $success;
			}
		?>
					<form action="contact.php" method="post">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" name="name" placeholder="NAME" value="<?php if ($_POST['name']) { echo $_POST['name']; } ?>" />
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" name="email" placeholder="EMAIL" value="<?php if ($_POST['email']) { echo $_POST['email']; } ?>" />
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" name="phone" placeholder="PHONE" value="<?php echo $_POST['phone']; ?>" />
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea name="message" placeholder="MESSAGE"><?php if ($_POST['message']) { echo $_POST['message']; } ?></textarea>
						</div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                        <label><img src="captcha.php"></label>
				         <input type="text" name="code" placeholder="ENTER CAPTCHA"> 
                         </div>
						<div>
							<button type="submit" class="message-btn" name="submit">Send The Message</button>
						</div>
					</form>	
				</div>	
			</div>
			
		
		</div><!-- /.item -->
		<div class="item clearfix" id="footer-map">
			<div class="map">
				<h4 class="map-btn">Map<i class="fa fa-angle-double-down"></i><span class="dowen"><i class="fa fa-angle-double-up"></i></span>
</h4>
				<div class="mapp">		
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.4087217399356!2d-122.04548840000001!3d37.332831299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4365d0cf401%3A0xfa8aa86b55a9d7b5!2s10699+Hale+Pl%2C+Cupertino%2C+CA+95014%2C+USA!5e0!3m2!1sen!2sin!4v1443509986258" style="border:0;width:50%;height:290px; float:left;"></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.8734253957814!2d72.845783!3d19.20073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6de9d1ac5b7%3A0x31ab439c79480ec7!2sNippon+IT+Solutions!5e0!3m2!1sen!2sin!4v1443509867234" style=" border-left:20px solid #fff; border-top:0px; width:50%;height:290px;"></iframe>
				</div> 
			</div>
		</div>
				<!-- /.item -->
		
    		
		<div class="item padding-top-150 padding-bottom-74" id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-xs-5 copy">
						<p>Copyright © 2015 ANALYTOS</p>		
						
					</div>
					<!--<div class="col-md-2 col-sm-2 col-xs-12 footer-logo">
						<a href="index.html"><img src="images/logo.jpg" alt="Analytos"></a>	
					</div>-->
					<div class="col-md-5 col-sm-5 col-xs-5 footer-social">
						 <a href="#"><i class="fa fa-linkedin-square"></i></a>
						<a href="#"><i class="fa fa-facebook-square"></i></a>		
						<a href="#"><i class="fa fa-twitter-square"></i></a>		
						<a href="#"><i class="fa fa-youtube-square"></i></a>		
								
					</div>	
				</div>	
			</div>
			
		
		</div><!-- /.item -->
    </div><!-- /#page -->
	
     <!-- Load JS here for greater good =============================-->
	 <script src="js/jquery.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.sly.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	
    <script src="js/triger.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {	
		"use strict";
		$("#owl-testimonial-1").owlCarousel({
		autoPlay: true, //Set AutoPlay to 3 seconds
		
      items : 1,
	navigation : true
  });
	
 }); 
	</script>
	<script src="js/viedobox/video.js"></script>
	<script src="js/modernizr.custom.js"></script>
	 
	<script src="js/toucheffects.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/simple-timeline.jquery.js"></script>
	<script>
		$('div.tlcontainer').simpleTimeline();
  
	</script>
	<script src="js/migrate.js"></script>
	<script src="js/slick.min.js"></script>
	<script>
	$('.class').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
	});
	</script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script src="js/paper-collapse.js"></script>
	<script type="text/javascript" src="js/goalProgress.js"></script>
	 <script type="text/javascript" src="js/sorting.js"></script>
	<script src="js/application.js"></script>
	
</body>
</html>
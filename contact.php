<?php

	error_reporting(0);
	$con =  mysqli_connect("localhost", "root", "", "rent2");
		
		if(mysqli_connect_error($con)){
		echo "There was an error connecting to database";
	}
	
	if($_POST){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['msg'];
		
		$dname = mysqli_real_escape_string($con, $name);
		$demail = mysqli_real_escape_string($con, $email);
		$dmessage = mysqli_real_escape_string($con, $message);
		
		if($name){
			
			if($email){
				
				if($message){
					
					$query = "INSERT INTO cont(name, email, message) VALUES ('$dname', '$demail', '$dmessage')";
					
					if(mysqli_query($con, $query)){
						
						echo "Your message has been sent!";
					}else{
						
						echo "Something went wrong - Please retry!";
					}
					
				}else{
					
					echo "Please enter your message!";
				}
				
				
			}else{
				
				
				echo "Enter your email please!";
			}
			
		}else{
			
			echo "Enter your name please!";
		}
		
	}
	
	
	$query = "INSERT INTO cont(name, email, message) VALUES (' ".mysqli_real_escape_string($con, $_POST['name']). " ', ' ".mysqli_real_escape_string($con, $_POST['email']). " ', ' ".mysqli_real_escape_string($con, $_POST['msg']). " ')";
?> 
<!DOCTYPE html>
<html>
<head>
<title>Mavis Rental | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mavis Rental" />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--start-smoth-scrolling-->
</head>
<body>
	<!--start-header-->
	<div class="header" id="home">
		<div class="container">
			<div class="head">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" /></a>
			</div>
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<li><a href="index.php"  class="active hvr-bounce-to-bottom">Home</a></li>
						<li><a href="about.php" class="hvr-bounce-to-bottom" >About</a></li>
						<li><a href="services.php" class="hvr-bounce-to-bottom" >Services</a></li>
						<!--<li><a href="booking.php" class="hvr-bounce-to-bottom" onClick="notR()">Booking</a></li>-->
						<li><a href="contact.php" class="hvr-bounce-to-bottom" >Contact</a></li>
					</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->

		<div class="banner">
		<div class="container">
			<div class="banner-top">
				<h1>Contact Us</h1>
				<form method="POST">
				<div class="banner-bottom">
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Name</p>
						</div>
						<div class="bnr-right">
							<input class="text" id="name" type="text" name="name" placeholder="Enter Name" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Email</p>
						</div>
						<div class="bnr-right">
							<input class="text" id="email" type="text" name="email" placeholder="Enter Email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Message</p>
						</div>
						<div class="bnr-right">
							<textarea  class="text" id="message" type="text" name="msg"> </textarea>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="bnr-btn">
						
							<input type="submit" value="submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end-banner-->
	<!---start-date-piker---->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<div class="footer">
		<div class="container">
		<div class="touch-top heading">
				<h3>FOLLOW US</h3>
			</div>
			<div class="touch-bottom">
				<p>Mavis Rentals, Suit 756 globel Place, Adetola Street, Surulere.</p>
				<h6 >+2348130519127, 1 234 567 9871 ,</h6>
				<p>The best amongst its kind . @Mavis Rental.</p>
				<p>Good idea cost good money</p>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="google"> </span></a></li>
				</ul>
			</div>
			<div class="footer-top">
				<p class="footer-class">© 2017 Mavis Rental All Rights Reserved | Design by  Chidi </p>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-->
</body>
</html>
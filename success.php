
<!DOCTYPE html>
<html>
<head>
<title>Mavis Rental | View Cart</title>
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
				<a href="index.html"><img src="images/logo.png" alt="" /></a>
			</div>
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<!--<li><a href="index.php"  class="active hvr-bounce-to-bottom">Home</a></li>
						<!--<li><a href="about.php" class="hvr-bounce-to-bottom">About</a></li>-->
						<li><a href="services.php" class="hvr-bounce-to-bottom" >Services</a></li>
						<li><a href="booking.php" class="hvr-bounce-to-bottom">Booking</a></li>
						<!--<li><a href="contact.php" class="hvr-bounce-to-bottom">Contact</a></li>-->
					</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--start-banner-->
	<div class="banner">
		<div class="container">			
			<div class="banner-bottom">
				<h1>Successfully booked</h1>
				
				<div class="banner-bottom">
			
				</div>
				</div>
			
			
			
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

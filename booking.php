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
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	function notR(){
		alert('Sorry the page is not ready yet, still under development');
		 return false;
	}
		</script>
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
			<div class="banner-top">
				<h1>Reserve @Mavis Rentals</h1>
				<form method="post" action="booking.php">
				<div class="banner-bottom">
				<div class="bnr-one">
						<div class="bnr-left">
							<p>Item Name</p>
						</div>
						<div class="bnr-right">
							<input class="text" id="name" type="text" name="name" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check In</p>
						</div>
						<div class="bnr-right">
							<input class="date" id="datepicker" type="text" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					
					
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check Out</p>
						</div>
						<div class="bnr-right">
							<input class="date" id="datepicker1" type="text" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Contact Address</p>
						</div>
						<div class="bnr-right">
							<input class="text" id="address" type="text" name="cc" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Quantity</p>
						</div>
						<div class="bnr-right">
							<select name="qty" id="quantity">
								<option   value="1">1</option>
								<option   value="2">2</option>
								<option   value="3">3</option>
								<option   value="4">4</option>
								<option   value="5">5</option>
								<option   value="6">6</option>
								<option   value="7">7</option>
								<option   value="8">8</option>
								<option   value="9">9</option>
								<option   value="10">10</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="bnr-one">
					<div class="bnr-left">
							<p>Phone Number</p>
						</div>
						<div class="bnr-right">
							<input class="text" id="number" type="text" name="amount" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-btn">
							<input type="submit" name="submit" value="Book">
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
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
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
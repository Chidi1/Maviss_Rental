<?php
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['name']) || empty($_POST['uname']) || empty($_POST['pass']) || empty($_POST['email']) || empty($_POST['contact']) || empty($_POST['location']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		if($msg!="")
		{
			echo("Error occurred");
			//header("location:register.php?error=".$msg);
		}
		else
		{
		
	$name = (mysql_real_escape_string ($_POST['name']));
	$uname = (mysql_real_escape_string ($_POST['uname']));
	$pass = (mysql_real_escape_string($_POST['pass']));
	$email =  (mysql_real_escape_string ($_POST['email']));
	$contact =  (mysql_real_escape_string ($_POST['contact']));
	$location = (mysql_real_escape_string ($_POST['location']));
			
			
		
			$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
			mysql_select_db("mavis",$link) or die("Can't Connect to Database...");
			
			$query="insert into user(name,uname,pass,email,contact,location)
			values('$name','$uname','$pass','$email','$contact','$location')";
			
			mysql_query($query,$link) or die("Can't Execute Query...");
			
			header("Location:registersuccess.php");
		}
	}
		
?>

<!DOCTYPE html>
<html>
<head>
<title>Mavis Rental | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mavis Rental" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
		});
		</script>

	<div class="events" id="events">
		<div class="container">
			<div class="events-top heading">
				<h3>PAST EVENTS</h3>
			</div>
			<div class="events-bottom">
				<div class="col-md-4 events-main">
					<div class="events-left">
						<img src="images/e-1.jpg" alt="" />
						<div class="event-btm">
							<h4>March 14, 2017</h4>
						</div>
						<p>Lake side vacation booking @Mavis Rental.</p>
					</div>
				</div>
				<div class="col-md-4 events-main">
					<div class="events-left">
						<img src="images/e-2.jpg" alt="" />
						<div class="event-btm">
							<h4>August 21, 2017</h4>
						</div>
						<p>Boat trip vacation bookings @Mavis Rental.</p>
					</div>
				</div>
				<div class="col-md-4 events-main">
					<div class="events-left">
						<img src="images/e-3.jpg" alt="" />
						<div class="event-btm">
							<h4>August 26, 2017</h4>
						</div>
						<p>Tourism @Mavis Rental.</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--end-events-->
	
	<div class="events" id="events">
		<div class="container">
			<div class="events-top heading">
				<h3>UPCOMING EVENTS</h3>
			</div>
			<div class="events-bottom">
				<div class="col-md-4 events-main">
					<div class="events-left">
						<img src="images/e-1.jpg" alt="" />
						<div class="event-btm">
							<h4>October 14, 2017</h4>
						</div>
						<p>Beach side vacation booking @Mavis Rental.</p>
					</div>
				</div>
				<div class="col-md-4 events-main">
					<div class="events-left">
						<img src="images/e-2.jpg" alt="" />
						<div class="event-btm">
							<h4>Novenmber 15, 2017</h4>
						</div>
						<p>Boat trip vacation bookings @Mavis Rental.</p>
					</div>
				</div>
				<div class="col-md-4 events-main">
					<div class="events-left">
						<img src="images/e-3.jpg" alt="" />
						<div class="event-btm">
							<h4>November 24, 2017</h4>
						</div>
						<p>Tourism @Mavis Rental.</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<!--start-footer-->
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
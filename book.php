<?php  
  
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass ="";
	$db = "mavis";
	
	
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db($db,$conn);

	if(!$conn){

		die ("Can not connect to database:". mysql_error());
	}
	 
	 mysql_select_db($db, $conn);
	 $sql = ("select * from booking");
$Recordset1 = mysql_query($sql) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
 
  
	
?>




<!DOCTYPE html>
<html>
<head>
<title>Mavis Rental | View Cart</title>
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
				<h1>Item Cart</h1>
				
				<div class="banner-bottom">
				<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Item ID</th>
				<th>Item Name</th>
				<th>Date In</th>
				<th>Date Out</th>
				<th>Quantity</th>	
				<th>Amount</th>
				<th>Total</th>
				<th>Cart</th>
			</tr>
		</thead>
		<tbody class="detail">
		
		<?php do { ?>
	
	
	<tr>
		<td><?php echo $row_Recordset1['id'] ?> </td>
		<td><?php echo $row_Recordset1['name'] ?> </td>
         <td><?php echo $row_Recordset1['date_in'] ?></td>
         <td><?php echo $row_Recordset1['date_out'] ?></td>
         <td><?php echo $row_Recordset1['qty'] ?> </td>
         <td><?php echo $row_Recordset1['amount'] ?> </td>
		 <td><?php echo $row_Recordset1['amount'] * $row_Recordset1['qty'] ?></td>
		 <td><a href='success.php'> Cart Item</a></td>        

		 <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
		</tr>
		</tbody>
	</table>
				</div>
				</div>
			
			
			
			<div class="footer">
		<div class="container">
		<div class="touch-top heading">
				<h3>FOLLOW US</h3>
			</div>
			<div class="touch-bottom">
				<p>756 gt globel Place, CD-Road,M 07 435.</p>
				<h6 >1 234 567 9871 , 800-2345-679</h6>
				<p>purus tincidunt egestas</p>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="google"> </span></a></li>
				</ul>
			</div>
			<div class="footer-top">
				<p class="footer-class">© 2016 Mavis Rental All Rights Reserved | Design by  Mavis </p>
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

<?php 
session_start();
require_once('config.php');
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

$db = mysql_select_db(DB_DATABASE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Alicia A Jasmine
http://www.100webhosting.com
Released for free under a Creative Commons Attribution 3.0 License

Name       : Red Hot   
Description: A two-column, fixed-width design with red hot color scheme. Lightweight and fast loading. Easy to customize to your website needs.
Version    : 1.0
Released   : 28-08-2010

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Parking Solution</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel='stylesheet' type='text/css' href='styles-menu.css' />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<img src="images/logo-parking.png" width="340px" height="91px"/>
	</div>
	<!-- end #header -->
<!--<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Home</a></li>
			<li><a href="#">Products</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>-->
	
	<!-- end #menu -->
	
	<div id="page">
	
	<?php include('menu.php'); ?>	
	<div id="page-bgbtm">

		<div id="content">
		
					<div class="post">
						<h2 class="title">Booking Reciept</h2>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<h2>Your Booking Details</h2>
							<hr><br>
							<p><?php if(isset($_SESSION['id']) && isset($_SESSION['amount']) && isset($_SESSION['table'])){
							$res1 = mysql_query("select * from ".$_SESSION['table']." where id = ".$_SESSION['id']."");
							$row1 = mysql_fetch_array($res1);
							echo "Order ID: ".$row1['id']. "<br>";
							echo "Name: ".$row1['name']."<br>";
							if($_SESSION['type'] == "commercial")
								echo "Amount: Rs.".$_SESSION['amount'];
							}
							?></p>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php include('bottom.php');?>
</body>
</html>

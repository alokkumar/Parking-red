<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Parking Solutions</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel='stylesheet' type='text/css' href='styles-menu.css' />
<style>
input{
padding:10px;
border:1px solid #ccc;
border-radius: 10px;
}
</style>
</head>
<body>
<script type="text/javascript">
function validateForm()
{
var name=document.forms["booking"]["name"].value;
var vno=document.forms["booking"]["vno"].value;
var wing=document.forms["booking"]["wing"].value;
var qtr=document.forms["booking"]["qtr"].value;
if (name==null || name=="")
  {
  alert("Name must be filled out");
  return false;
  }
else if (vno==null || vno=="")
  {
  alert("Vehicle number must be filled.");
  return false;
  }
else if (wing==null || wing=="")
  {
  alert("Provide your wing");
  return false;
  }
else if (qtr==null || qtr=="")
  {
  alert("Provide your quarter number.");
  return false;
  }

}

</script>
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
			<h2 class="title"><a>Parking Booking</a></h2>
			<div style="clear: both;">&nbsp;</div>
				    <h2><?php if(isset($_POST['vehicle'])) echo $_POST['vehicle'];?> Parking booking: </h2>
					<form method="POST" action="bookexec.php" onsubmit="return validateForm();" name="booking">
					<p><?php
						if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
							echo '<ul class="err">';
							foreach($_SESSION['ERRMSG_ARR'] as $msg) {
								echo '<li>',$msg,'</li>'; 
							}
							echo '</ul>';
							unset($_SESSION['ERRMSG_ARR']);
						}
					?>
					</p>
					<table align="center" cellpadding="5px" >
					<tr>
					<td>Name: </td>
					<td><input type="text" name="name"/></td>
					</tr>
					<tr>
					<td>Booking Type: </td>
					<td><input type="text" name="type" readonly value="<?php if(isset($_POST['type'])) echo $_POST['type']; else echo "";?>"   /></td>
					</tr>
					<tr>
					<td>Vehicle Type: </td>
					<td><input type="text" name="vehicle" readonly  value="<?php if(isset($_POST['vehicle'])) echo $_POST['vehicle']; else echo "";?>"   /></td>
					</tr>
					<tr>
					<td>Slot: </td>
					<td><input type="number" name="slot" readonly value="<?php if(isset($_POST['slot'])) echo $_POST['slot']; else echo "";?>"   /></td>
					<tr>
					<td>Vehicle no.: </td>
					<td><input type="text" name="vno"/></td>
					</tr>
					<tr>
					<td>Wing: </td>
					<td><input type="text" name="wing"/></td>
					</tr>
					<tr>
					<td>Qtr no.: </td>
					<td><input type="text" name="qtr"/></td>
					</tr>
					<tr>
					<td>Start: </td>
					<td><input type="date" name="startdate" readonly value="<?php if(isset($_POST['startdate'])) echo $_POST['startdate']; else echo "";?>"   /><br/> <input type="number" readonly size="2" maxlength="2" name="sh" value="<?php if(isset($_POST['sh'])) echo $_POST['sh']; else echo "";?>"   /> <input type="number" size="2" readonly maxlength="2"name="sm" value="<?php if(isset($_POST['smin'])) echo $_POST['smin']; else echo "";?>"   /></td>
					</tr>
					<tr>
					<td>End: </td>
					<td><input type="date" name="enddate" readonly value="<?php if(isset($_POST['enddate'])) echo $_POST['enddate']; else echo "";?>"   /><br/> <input type="number" size=2 readonly maxlength=2 name="eh" value="<?php if(isset($_POST['eh'])) echo $_POST['eh']; else echo "";?>"   /> <input type="number" size="2" readonly maxlength="2" name="em" value="<?php if(isset($_POST['emin'])) echo $_POST['emin']; else echo "";?>"   /></td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					<td><input type="submit" Value="<?php if($_POST['type'] == "residential") echo "Proceed to Booking"; else echo "Proceed to payment";?>" style="cursor:pointer"/></td>
					</tr>
					</table>
					</form>
		
		
		</div>
		
					
		</div>
		<!-- end #content -->
		<?php include('bottom.php')?>
	<!-- end #footer -->
</body>
</html>


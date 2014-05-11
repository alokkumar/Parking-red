<html>
<head>
<title>Book</title>
<link href="css/style.css" rel="stylesheet"></link>
<style>
input{
padding:10px;
border:1px solid #ccc;
border-radius: 10px;
}
</style>
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
</head>
<body>
<div id="head">
<img src = "images/logo-parking.png" width="340px" style="margin-left:10%;"/>
<hr style="margin-left:5%;">
<div class="clearfix"></div>
</div>
<div id="page">
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
<td><input type="text" name="type" value="<?php if(isset($_POST['type'])) echo $_POST['type']; else echo "";?>"   /></td>
</tr>
<tr>
<td>Vehicle Type: </td>
<td><input type="text" name="vehicle" value="<?php if(isset($_POST['vehicle'])) echo $_POST['vehicle']; else echo "";?>"   /></td>
</tr>
<tr>
<td>Slot: </td>
<td><input type="number" name="slot" value="<?php if(isset($_POST['slot'])) echo $_POST['slot']; else echo "";?>"   /></td>
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
<td><input type="date" name="startdate" value="<?php if(isset($_POST['startdate'])) echo $_POST['startdate']; else echo "";?>"   /> <input type="number" size="2" maxlength="2" name="sh" value="<?php if(isset($_POST['sh'])) echo $_POST['sh']; else echo "";?>"   /> <input type="number" size="2" maxlength="2"name="sm" value="<?php if(isset($_POST['smin'])) echo $_POST['smin']; else echo "";?>"   /></td>
</tr>
<tr>
<td>End: </td>
<td><input type="date" name="enddate" value="<?php if(isset($_POST['enddate'])) echo $_POST['enddate']; else echo "";?>"   /> <input type="number" size=2 maxlength=2 name="eh" value="<?php if(isset($_POST['eh'])) echo $_POST['eh']; else echo "";?>"   /> <input type="number" size=2 maxlength=2 name="em" value="<?php if(isset($_POST['emin'])) echo $_POST['emin']; else echo "";?>"   /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" Value="Proceed to Payment" style="cursor:pointer"/></td>
</tr>
</table>
</form>
</div>
<div id="clearfix"></div>
<div id="footer">
<span> &copy; Meterpreter</span>
</div>
</body>
</html>
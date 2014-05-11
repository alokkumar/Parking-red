<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/jQuery.js"></script>
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
button{
border-radius:10px;
padding:10px;
border:1px solid #ccc;

}

</style>
</head>
<body>
<script type="text/javascript">


$(function(){
var startdate = $( "#datestart" ), enddate = $( "#dateend" ), sh = $( "#sh" ),eh = $( "#eh" ),smin = $( "#smin" ),emin = $( "#emin" ),vehicle = $( "#vehicle" ),  allFields = $( [] ).add( startdate ).add( enddate ).add( sh ).add( eh).add(smin).add(emin).add(vehicle);
$("#check").click(function(){
	 $.ajax({
		url: 'check.php?date1='+startdate.val()+'&date2='+enddate.val()+'&sh='+sh.val()+'&eh='+eh.val()+'&smin='+smin.val()+'&emin='+emin.val()+'&vehicle='+vehicle.val(), 
		type: 'GET', 
		success: function(response){ 
									if(response == "Time has already passed"|| response == "All fields are mandatory"){
									$("#note").show("slow");
									$("#slot").hide("slow");
									document.getElementById('note').innerHTML = response ;
									}
									else{
									$("#note").hide("slow");
									document.getElementById('slot').hidden = false;
									var arr = response.split(" ");
									for(var i=0; i<arr.length; i++){
									 document.getElementById(""+arr[i]+"").style.backgroundColor = "red";
									 document.getElementById("b"+arr[i]+"").innerHTML = "Slot is already booked !!";
									}
									
									}
									
																	
									}
		});
});

});
</script>
<!-- Javascript goes in the document HEAD -->
<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 
		 
		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}      
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>

<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.altrowstable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #a9c6c9;
	border-collapse: collapse;
}
table.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: black;
}
table.altrowstable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: black;
}
.oddrowcolor{
	background-color:#a9c6c9;
}
.evenrowcolor{
	background-color:#c3dde0;
}
</style>

<!-- Table goes in the document BODY -->

<!--  The table code can be found here: http://www.textfixer/tutorials/css-tables.php#css-table03 -->


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
				<h2 class="title">Residential Parking ( 4 wheeler )</h2>
				<div style="clear: both;">&nbsp;</div>
				
			<form id="target" action="booking.php" method="POST" name="input">
				<span>Booking type:</span>
				<input type="text" id="type" name="type" readonly value="residential"/><br>
				<span>Vehicle Type:</span>
				<input type="text" id="vehicle" name="vehicle" readonly value="4wheeler"/><br/>
				<span>Start Time:&nbsp;&nbsp;&nbsp;</span>
				<input id="datestart" type="date" name="startdate" placeholder="dd-mm-yyyy"/> <input type="text" size=2 maxlength=2 id="sh" name="sh"/>:<input type="text" size=2 maxlength=2 id="smin" name="smin"/><br>
				<span>End Time: &nbsp;&nbsp;&nbsp;&nbsp;</span>
				<input id="dateend" type="date" name="enddate" placeholder="dd-mm-yyyy"/> <input type="text" size=2 maxlength=2 id="eh" name="eh"/>:<input type="text" size=2 maxlength=2 id="emin" name="emin"/>
				<br/><br/>
				<button id="check" type="button"> Check </button> 
			
				</br></br>
				<div id="note"></div>
				
			
			
				<div id="slot" hidden>
					<table  width="80%" class="altrowstable" id="alternatecolor">
					<tr>
					<th>Slot</th>
					<th>Result</th>
					<th>&nbsp;</th>
					</tr>
					<tr>
					<td>1</td>
					<td><div id="1" style="background:green;">&nbsp;</div></td>
					<td><div id="b1"> Slot is empty !!</div></td>
					</tr>
					<tr>
					<td>2</td>
					<td><div id="2" style="background:green;">&nbsp;</div></td>
					<td><div id="b2"> Slot is empty !!</div></td>
					</tr>

					<tr>
					<td>3</td>
					<td><div id="3" style="background:green;">&nbsp;</div></td>
					<td><div id="b3"> Slot is empty !!</div></td>
					</tr>

					<tr>
					<td>4</td>
					<td><div id="4" style="background:green;">&nbsp;</div></td>
					<td><div id="b4"> Slot is empty !!</div></td>
					</tr>

					<tr>
					<td>5</td>
					<td><div id="5" style="background:green;">&nbsp;</div></td>
					<td><div id="b5"> Slot is empty !!</div></td>
					</tr>

					<tr>
					<td>6</td>
					<td><div id="6" style="background:green;">&nbsp;</div></td>
					<td><div id="b6"> Slot is empty !!</div></td>
					</tr>

					<tr>
					<td>7</td>
					<td><div id="7" style="background:green;">&nbsp;</div></td>
					<td><div id="b7"> Slot is empty !!</div></td>
					</tr>

					<tr>
					<td>8</td>
					<td><div id="8" style="background:green;">&nbsp;</div></td>
					<td><div id="b8"> Slot is empty !!</div></td>
					</tr>

					<tr>
					<td>9</td>
					<td><div id="9" style="background:green;">&nbsp;</div></td>
					<td><div id="b9"> Slot is empty !!</div></td>
					</tr>

					<tr>
					<td>10</td>
					<td><div id="10" style="background:green;">&nbsp;</div></td>
					<td><div id="b10"> Slot is empty !!</div></td>
					</tr>

					</table> <br>
					
				<input type="text" name="slot" />
				<input type="submit" value="Proceed to booking"/>
				</div>
				
				</form>
				
			</div>	
					
		</div>
		<!-- end #content -->
		<?php include('bottom.php')?>
	<!-- end #footer -->
</body>
</html>

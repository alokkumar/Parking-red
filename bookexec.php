<?php
session_start();
require_once('config.php');

$errmsg_arr = array();

$errflag = false;

$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

$db = mysql_select_db(DB_DATABASE);
$today=new DateTime();
$today = date_timestamp_get($today);
//echo $today."<br>";
$slot = $_POST['slot'];
$type = $_POST['type'];
$table = $_POST['vehicle'];
$name = $_POST['name'];
$vno = $_POST['vno'];
$wing = $_POST['wing'];
$qtr = $_POST['qtr'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$sh = $_POST['sh'];
$smin = $_POST['sm'];
$eh = $_POST['eh'];
$emin = $_POST['em'];
$second=00;
list($sy, $sm, $sd)= explode("-",$startdate);
list($ey, $em, $ed)= explode("-",$enddate);
$stime = mktime($sh,$smin,$second,$sm,$sd,$sy);
$etime = mktime($eh,$emin,$second,$em,$ed,$ey);
$duration = $etime - $stime;
$amount = $duration * 0.028;
//echo "Starttime=".$stime."<br>";
//echo "Endtime=".$etime."<br>";
if($name == '') {
		$errmsg_arr[] = 'Name missing';
		$errflag = true;
	}
	
if($vno == '') {
		$errmsg_arr[] = 'Vehicle Number not provided.';
		$errflag = true;
	}
	
if($wing == '') {
		$errmsg_arr[] = 'Please provide your apartment wing';
		$errflag = true;
	}
	
if($qtr == '') {
		$errmsg_arr[] = 'Provide your Quarter number.';
		$errflag = true;
	}
	
if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: book.php");
		exit();
	}

$query = "insert into $table values(null, '$slot', '$name', '$vno', '$wing', '$qtr', '$stime', '$etime', '$today', '$type')";
$res = mysql_query($query);
if($res){
	$res1 = mysql_query("select * from $table where booktime = $today");
	$row1 = mysql_fetch_array($res1);
	$_SESSION['id'] = $row1['id'];
	$_SESSION['amount'] = $amount;
	$_SESSION['table'] = $table;
	$_SESSION['type'] = $type;
	header("location:reciept.php");
	}
else
	die(mysql_error());

?>
<?php
require_once('config.php');

$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

$db = mysql_select_db(DB_DATABASE);

$date = new DateTime();
$date = date_timestamp_get($date);
if(isset($_GET['date1']) && isset($_GET['date2']) && $_GET['date1']!='' && $_GET['date2']!='' && isset($_GET['vehicle']) && $_GET['vehicle']!='' && isset($_GET['sh']) && isset($_GET['smin']) && isset($_GET['eh']) && isset($_GET['emin']) && $_GET['sh']!='' && $_GET['eh']!='' && $_GET['smin']!='' && $_GET['emin']!='' ){
	$sh = $_GET['sh'];
	$smin = $_GET['smin'];
	$eh = $_GET['eh'];
	$emin = $_GET['emin'];
	list($sy,$sm,$sd) = explode("-",$_GET['date1']);
	list($ey,$em,$ed) = explode("-",$_GET['date2']);
	$stime = mktime($sh,$smin,00,$sm,$sd,$sy);
	$etime = mktime($eh,$emin,00,$em,$ed,$ey);
	$table = $_GET['vehicle'];
	if($stime < $date || $etime < $date || $etime<$stime)
			echo "Time has already passed";
	else{
		$qry = "select * from $table";
		$res = mysql_query($qry);
		while($row = mysql_fetch_array($res)){
			if(($stime>=$row['start'] && $stime<=$row['end']) || ($etime>=$row['start'] && $etime<=$row['end']))
				echo $row['slot']." ";

}
}
}
else	
	echo "All fields are mandatory";

?>
<?php
include("config.php");
$clientcompanyname = $_REQUEST['id'];
if($clientcompanyname) {
	$sql = "SELECT `clientname`, `clientcompanyaddress` FROM `clients` WHERE `clientcompanyname` = '$clientcompanyname'";
	$resultset = mysqli_query($link, $sql) or die("database error:". mysqli_error($link));	
	$data = array();
	while( $rows = mysqli_fetch_assoc($resultset) ) {
		$data = $rows;
	}
	echo json_encode($data);
} else {
	echo 0;	
}
?>
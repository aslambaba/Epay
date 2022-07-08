<?php

include "connection.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$UpdateID = $_GET['id'];
	$billmonth = $_POST['billmonth'];
	$duedate = $_POST['duedate'];
	$conid = $_POST['conid'];
	$refid = $_POST['refid'];
	$division = $_POST['division'];
	$city = $_POST['city'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$unit = $_POST['unit'];
	$fee = $_POST['fee'];

	$sql =  "UPDATE bills set billmonth='$billmonth', duedate='$duedate', conid='$conid',
	 refid='$refid', division='$division', city='$city', name='$name', address='$address',
	  unit='$unit', fee='$fee'  WHERE id=$UpdateID";
	if (mysqli_query($conn, $sql)) {
		header("location: /epay/viewbills.php");
	} else {
		echo "Data Not Updated, Check for Problem.";
	}
}

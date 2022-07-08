<?php
// session_start();
// if (!isset($_SESSION['user'])) {
// 	header("location:login.php");
// } else {

include "connection.php";

if ($_FILES['billfile']['name'] != "") {
	$ok = 1;
	$filename = $_FILES['billfile']['name'];
	$filesize = $_FILES['billfile']['size'];
	$filetype = $_FILES['billfile']['type'];
	echo " file size is = $filesize";
	$type = exif_imagetype($_FILES['billfile']['tmp_name']);
	if ($type == IMAGETYPE_GIF || $type == IMAGETYPE_JPEG || $type == IMAGETYPE_PNG) {
		echo "valid format";
	} else {
		echo "<br>please select jpg gif or png file <br> ";
		$ok = 0;
	}
	if ($filesize > 512000) {
		echo "please select file less than 5MB ";
		$ok = 0;
	}
	if (file_exists("../uploadImages/" . $_FILES['billfile']['name'])) {
		echo "file with same name already exist";
		$ok = 0;
	}
	if ($ok == 1) {
		if (move_uploaded_file($_FILES['billfile']['tmp_name'], "../uploadImages/$filename")) {
			echo "file uploaded successfully";
		}
	} else {
		echo "There is some problem in uploading file";
	}
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
	$sql =  "INSERT INTO bills (billmonth, duedate, conid, refid, division, city, name, address, unit, fee, imageurl) 
		VALUES ('$billmonth', '$duedate', '$conid', '$refid', '$division', '$city', '$name', '$address', '$unit', '$fee', 'uploadImages/$filename')";
	if (mysqli_query($conn, $sql)) {
		header("location: /epay/viewbills.php");
	} else {
		echo "Data Not Inserted, Check for Problem.";
	}
}
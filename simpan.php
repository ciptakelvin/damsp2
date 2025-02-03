<?php 
include "conn.php";
if (isset($_POST['title'])) {
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$tempat = $_POST['tempat'];
	$status = $_POST['status'];
	$pic = $_POST['pic'];
	$validasi = $_POST['validasi'];
	mysqli_query($konek, "INSERT into events VALUES ('','','', '$title','$start','$end','$tempat','$status','','$pic','$validasi') ");
}
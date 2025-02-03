<?php 
include "conn.php";
if (isset($_POST['id'])) {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$tempat = $_POST['tempat'];
	$pic = $_POST['pic'];
	$status = $_POST['status'];
	$validasi = $_POST['validasi'];
	mysqli_query($konek, "UPDATE events set  start_event = '$start', end_event= '$end' WHERE id='$id' ");
}
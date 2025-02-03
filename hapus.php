<?php 
include "conn.php";
if (isset($_POST['id'])) {
	$id = $_POST['id'];
	$status = $_POST['status'];
	mysqli_query($konek, "UPDATE events SET status='0' WHERE id ='$id' ");
}
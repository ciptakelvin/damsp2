<?php
include("../../conn.php");

$id_sie = $_POST['seksi'];
$id_keg = $_POST['jenis'];
$judul = $_POST['judul'];

//echo "seksi ".$seksi;
//echo "jenis ".$jenis;
//echo "judul ".$judul;
$query = "insert into jdl_rko (id_sie,id_keg,judul, status) values ('$id_sie','$id_keg','$judul','1')";
$run = mysqli_query($konek,$query);
if($run){
	header("Location:../../dams.php?module=rko");
}
?>
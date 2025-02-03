<?php
include("../../conn.php");
error_reporting(1);

$anggota = $_POST['anggota'];
$idst = $_POST['id_st'];
$seksi = $_POST['seksi'];
$target = $_POST['target'];
$realisasi = $_POST['realisasi'];

$query = "insert into spd (id_events_pgw,nama,id_sie,target,realisasi) values ('$idst','$anggota','$seksi','$target','$realisasi')";
$run=mysqli_query($konek,$query);

if($run)
{
	header("Location: ../../dams.php?module=input_spd_edit&id=$idst");
}
?>
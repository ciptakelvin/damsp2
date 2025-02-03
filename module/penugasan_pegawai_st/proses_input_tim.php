<?php
include("conn.php");
error_reporting(1);

$anggota = $_POST['anggota'];
$idst = $_POST['id_st'];
$idpeg = $_POST['id_peg'];
$nip18 = $_POST['nip18'];
$seksi = $_POST['seksi'];

$query = "insert into pegawai_events (id_events_pgw,nama,nip18,id_sie,status) values ('$idst','$anggota','$nip18','$seksi','1')";
$run=mysqli_query($konek,$query);

if($run)
{
	header("Location: ../../dams.php?module=input_tim_penugasan_pegawai&id=$idst");
}
?>
<?php
include("../../conn.php");

$nost = $_POST['nost'];
$tglst = $_POST['tglst'];
$tempat = $_POST['tempat'];
$agenda = $_POST['agenda'];
$waktu = $_POST['wkt_keg'];

$query = "insert into surat_tugas (nomor, tanggal, tempat, agenda, awal, status) values ('$nost','$tglst','$tempat','$agenda','$waktu','1')";
$run = mysqli_query($konek,$query);

if($run)
{
	$query2 = "select max(id_st) id from surat_tugas";
	$run2 = mysqli_query($konek,$query2);
	$data2 = mysqli_fetch_array($run2);
	$maxid = $data2['id'];
	header("Location:../../dams.php?module=input_st2&id=$maxid");
}
?>
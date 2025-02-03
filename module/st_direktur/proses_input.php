<?php
include("../../conn.php");

$nost = $_POST['nost'];
$tglst = $_POST['tglst'];
$tempat = $_POST['tempat'];
$agenda = $_POST['agenda'];
$waktu = $_POST['wkt_keg'];
$waktu2 = $_POST['wkt_keg2'];
$sifat = $_POST['sifat'];

$query = "insert into surat_tugas_direktur (nomor, tanggal, tempat, agenda, awal, akhir, status, sifat) values ('$nost','$tglst','$tempat','$agenda','$waktu','$waktu2','1', '$sifat')";
$run = mysqli_query($konek,$query);

if($run)
{
	$query2 = "select max(id_st) id from surat_tugas_direktur";
	$run2 = mysqli_query($konek,$query2);
	$data2 = mysqli_fetch_array($run2);
	$maxid = $data2['id'];
	header("Location:../../dams.php?module=input_st2_direktur&id=$maxid");
}
?>
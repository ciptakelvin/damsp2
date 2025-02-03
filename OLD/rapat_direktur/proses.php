<?php
include("../../conn.php");

$nomor = $_POST['nomor'];
$tglsurat = $_POST['tglsurat'];
$unit = $_POST['unit'];
$tgl = $_POST['tgl'];
$waktu_mulai = $_POST['waktu_mulai'];
$waktu_selesai = $_POST['waktu_selesai'];
$tempat = $_POST['tempat'];
$agenda = $_POST['agenda'];
$pic = $_POST['pic'];
$sifat = $_POST['sifat'];

$query = "insert into rapat_direktur (nomor, tanggal, unit, agenda, tempat, tanggal_rapat, waktu_mulai, waktu_selesai, sifat, pic, status) values ('$nomor','$tglsurat','$unit','$agenda','$tempat','$tgl','$waktu_mulai','$waktu_selesai','$sifat','$pic','1') ";
$run=mysqli_query($konek,$query);

if($run)
{
	header("Location: ../../dams.php?module=jadwal_direktur");
}
?>
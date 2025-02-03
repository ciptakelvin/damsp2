<?php
include("../../conn.php");

$nomor = $_POST['nomor'];
$tglsurat = $_POST['tglsurat'];
$unit = $_POST['unit'];
$tgl = $_POST['tgl'];
$tempat = $_POST['tempat'];
$agenda = $_POST['agenda'];
$pic = $_POST['pic'];

$query = "insert into rapat_subdit (nomor, tanggal, unit, agenda, tempat, waktu, pic, status) values ('$nomor','$tglsurat','$unit','$agenda','$tempat','$tgl','$pic','1') ";
$run=mysqli_query($konek,$query);

if($run)
{
	header("Location: ../../dams.php?module=kegiatan");
}
?>
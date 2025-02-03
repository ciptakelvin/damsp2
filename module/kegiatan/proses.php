<?php
include("../../conn.php");

$nmkegiatan = $_POST['nmkegiatan'];
$tanggal= $_POST['tanggal'];
$tempat= $_POST['tempat'];
$peserta= $_POST['peserta'];
$pic= $_POST['pic'];
$laporan= $_POST['laporan'];
$ket= $_POST['ket'];

$query = "insert into tugas_subdit (tugas, tanggal, tempat, peserta, pic, laporan,ket, status) values ('$nmkegiatan','$tanggal','$tempat','$peserta','$pic','$laporan','$ket','1')";
$run = mysqli_query($konek,$query);

if($run)
{
	header("Location:../../dams.php?module=kegiatan");
}
?>
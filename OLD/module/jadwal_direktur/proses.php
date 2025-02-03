<?php
include("../../conn.php");

$nmkegiatan = $_POST['nmkegiatan'];
$tanggal= $_POST['tanggal'];
$waktu_mulai= $_POST['waktu_mulai'];
$waktu_selesai= $_POST['waktu_selesai'];
$tempat= $_POST['tempat'];
$peserta= $_POST['peserta'];
$pic= $_POST['pic'];
$laporan= $_POST['laporan'];
$ket= $_POST['ket'];
$sifat= $_POST['sifat'];

$query = "insert into tugas_direktur (tugas, tanggal, waktu_mulai, waktu_selesai, tempat, peserta, pic, sifat, laporan,ket, status) values ('$nmkegiatan','$tanggal', '$waktu_mulai', '$waktu_selesai','$tempat','$peserta','$pic', '$sifat','$laporan','$ket','1')";
$run = mysqli_query($konek,$query);

if($run)
{
	header("Location:../../dams.php?module=jadwal_direktur");
}
?>
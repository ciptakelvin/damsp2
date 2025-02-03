<?php
include("../../conn.php");


$id = $_POST['id'];
echo $id;
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

$query = "update tugas_direktur set tugas='$nmkegiatan', tanggal='$tanggal', waktu_mulai='$waktu_mulai', waktu_selesai='$waktu_selesai', tempat='$tempat', peserta='$peserta', pic='$pic', sifat='$sifat', laporan='$laporan',ket='$ket' where id_tgdirektur='$id'";
$run = mysqli_query($konek,$query);

if($run)
{
	header("Location:../../dams.php?module=jadwal_direktur");
}
?>
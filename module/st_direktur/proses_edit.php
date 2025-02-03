<?php
include("../../conn.php");

$idst = $_POST['idst'];
$nomor = $_POST['nost'];
$tanggal = $_POST['tanggal'];
$agenda = $_POST['agenda'];
$tempat = $_POST['tempat'];
$waktu = $_POST['waktu'];
$waktu2 = $_POST['waktu2'];
$sifat = $_POST['sifat'];

$query = "update surat_tugas_direktur set nomor='$nomor', tanggal='$tanggal', awal='$waktu', tempat='$tempat', agenda='$agenda', akhir='$waktu2', sifat='$sifat' where id_st='$idst'";
$run = mysqli_query($konek,$query);

if($run)
{
	header("Location:../../dams.php?module=jadwal_direktur&id=$idst");
}
?>
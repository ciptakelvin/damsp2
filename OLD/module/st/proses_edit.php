<?php
include("../../conn.php");

$idst = $_POST['idst'];
$nomor = $_POST['nost'];
$tanggal = $_POST['tanggal'];
$agenda = $_POST['agenda'];
$tempat = $_POST['tempat'];
$waktu = $_POST['waktu'];

$query = "update surat_tugas set nomor='$nomor', tanggal='$tanggal', awal='$waktu', tempat='$tempat', agenda='$agenda' where id_st='$idst'";
$run = mysqli_query($konek,$query);

if($run)
{
	header("Location:../../dams.php?module=view_st&id=$idst");
}
?>
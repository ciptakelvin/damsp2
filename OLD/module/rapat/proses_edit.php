<?php
include("../../conn.php");

$idrp = $_POST['id_rp'];
echo $idrp;
$idpic = $_POST['idpic'];
$nomor = $_POST['nomor'];
$tanggal = $_POST['tanggal'];
$unit = $_POST['unit'];
$agenda = $_POST['agenda'];
$waktu = $_POST['waktu'];
$tdklanjut = $_POST['tdklanjut'];
$idpeg = $_POST['pic'];
$ket = $_POST['ket'];
$tempat = $_POST['tempat'];


$query = "update rapat_subdit set nomor='$nomor', tanggal='$tanggal', unit='$unit', agenda='$agenda', tempat='$tempat', waktu='$waktu', tdklanjut='$tdklanjut', pic='$idpic' , ket='$ket' where id_rp='$idrp'";
$run = mysqli_query($konek,$query);

if($run)
{
	header("Location:../../dams.php?module=view_rp&id=$idrp&ket=ubah");
}
?>
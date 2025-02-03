<?php
include("../../conn.php");

$id_rp = $_POST['id_rp_dir'];
echo $id_rp;
$idpic = $_POST['idpic'];
$nomor = $_POST['nomor'];
$tanggal = $_POST['tanggal'];
$unit = $_POST['unit'];
$agenda = $_POST['agenda'];
$tanggal_rapat = $_POST['tanggal_rapat'];
$waktu_mulai = $_POST['waktu_mulai'];
$waktu_selesai = $_POST['waktu_selesai'];
$tdklanjut = $_POST['tdklanjut'];
$idpeg = $_POST['pic'];
$ket = $_POST['ket'];
$tempat = $_POST['tempat'];
$sifat = $_POST['sifat'];


$query = "update rapat_direktur set nomor='$nomor', tanggal='$tanggal', unit='$unit', agenda='$agenda', tempat='$tempat', tanggal_rapat='$tanggal_rapat', waktu_mulai='$waktu_mulai', waktu_selesai='$waktu_selesai', tdklanjut='$tdklanjut', sifat='$sifat', pic='$idpic', ket='$ket' where id_rp_dir='$id_rp'";
$run = mysqli_query($konek,$query);

if($run)
{
	header("Location:../../dams.php?module=view_rp_direktur&id=$idrp&ket=ubah");
}
?>
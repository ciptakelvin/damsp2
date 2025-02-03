<?php
include("../../conn.php");
$idkeg = $_POST['idkeg'];
$idrki = $_POST['idrki'];
$idtgs = $_POST['id_uraian'];
$idrko = $_POST['id_rko'];
$idpeg = $_POST['id_peg'];
$kegiatan=$_POST['kegiatan'];
$tanggal=$_POST['tanggal'];
$volume=$_POST['vol'];

$query = "insert into realisasi_rki (id_keg,id_rki, id_uraian,id_peg, id_rko, nama_realisasi,tanggal, vol, val, status) values ('$idkeg','$idrki','$idtgs','$idpeg','$idrko','$kegiatan','$tanggal','$volume','0','1')";
$run = mysqli_query($konek,$query);
error_reporting(1);
if($run)
{
	header("Location:../../dams.php?module=isi&idkeg=$idkeg&uraian=$idtgs");
}
else
{
echo "gagal";
}

?>
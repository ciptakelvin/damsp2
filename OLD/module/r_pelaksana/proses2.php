<?php
include("../../conn.php");
$id_realisasi = $_POST['idrealisasi'];
$idpeg = $_POST['idpeg'];
$idkeg = $_POST['idkeg'];

$query = "update realisasi_rki set val='0' where id_realisasi ='$id_realisasi' ";
$run = mysqli_query($konek,$query);

if($run)
{
	header("Location:../../dams.php?module=validasi_rki&id=$idkeg");
}
?>
<?php
include ("../../conn.php");

$idst = $_POST['idst'];
$idpeg = $_POST['idpeg'];
$nama = $_POST['nama'];
$nip = $_POST['nip18'];
$seksi = $_POST['seksi'];

$query = "insert into pegawai_tugas_direktur (id_st_dir, id_peg, nama, nip, id_sie, status) values ('$idst', '$idpeg','$nama', '$nip', '$seksi','1')";
$run = mysqli_query($konek, $query);

if($run)
{
	header("Location:../../dams.php?module=input_st_direktur2&id=$idst");
}
?>
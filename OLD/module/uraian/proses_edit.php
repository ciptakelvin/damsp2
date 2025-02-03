<?php
include("../../conn.php");
$id_rko = $_POST['id_rko'];
$id_uraian = $_POST['id_uraian'];
$uraian=$_POST['uraian'];
$input=$_POST['input'];
$output=$_POST['output'];
$outcomes=$_POST['outcomes'];
$volume=$_POST['volume'];
$satuan=$_POST['satuan'];
$waktu=$_POST['waktu'];
$jgkwaktu=$_POST['jgkwaktu'];
$indikator=$_POST['indikator'];
$ket=$_POST['ket'];
$risiko=$_POST['risiko'];
$sistem=$_POST['sistem'];
$mitigasi=$_POST['mitigasi'];
$pic=$_POST['pic'];
$terkait=$_POST['terkait'];

$query = "UPDATE uraian_rko SET uraian='$uraian',input='$input',output='$output',outcomes='$outcomes',
volume='$volume',jgkwaktu='$jgkwaktu',satuan='$satuan',jangka='$waktu',indikator='$indikator',
ket='$ket',risiko='$risiko',sistem='$sistem',mitigasi='$mitigasi',pic='$pic',terkait='$terkait' WHERE id_uraian = '$id_uraian'";
$run = mysqli_query($konek,$query);

if($run)
{
		header("Location:../../dams.php?module=edit_uraian&id=$id_uraian");
}

?>
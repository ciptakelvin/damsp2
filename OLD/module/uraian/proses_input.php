<?php
include("../../conn.php");
$id_rko = $_POST['id_rko'];
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
$seksi2=$_POST['seksi'];

$query = "insert into uraian_rko (id_rko,uraian,input,output,outcomes,volume,satuan,jangka,jgkwaktu,indikator,ket,risiko,sistem,mitigasi,pic,terkait,id_sie,status) values ('$id_rko','$uraian','$input','$output','$outcomes','$volume','$satuan','$waktu','$jgkwaktu','$indikator','$ket','$risiko','$sistem','$mitigasi','$pic','$terkait','$seksi2','1')";
$run = mysqli_query($konek,$query);

if($run)
{
	header("Location:../../dams.php?module=view_uraian&id=$id_rko");
}

?>
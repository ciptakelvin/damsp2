<?php
include("../../conn.php");
$id_rko = $_POST['id_rko'];
$id_rki = $_POST['id_rki'];
$id_uraian = $_POST['id_uraian'];
$id_peg= $_POST['id_peg'];
$kegiatan=$_POST['uraian'];
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
$terkait=$_POST['terkait'];

$query = "insert into rki_pegawai (id_rko,id_uraian, id_rki, pic, kegiatan,input,output,outcome,volume,satuan,jgk_waktu,waktu,ind,ket,risiko,sistem,mitigasi,terkait,status) values ('$id_rko','$id_uraian','$id_rki','$id_peg','$kegiatan','$input','$output','$outcomes','$volume','$satuan','$jgkwaktu','$waktu','$indikator','$ket','$risiko','$sistem','$mitigasi','$terkait','1')";
$run = mysqli_query($konek,$query);
error_reporting(1);
if($run)
{
	header("Location:../../dams.php?module=view_rki&id=$id_rki");
}
else
{
echo "gagal";
}

?>
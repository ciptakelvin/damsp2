<?php
include("../../conn.php");

$no_surat = $_POST['no_surat'];
$tanggal_surat = $_POST['tanggal_surat'];
$agenda = $_POST['agenda'];
$start_event = $_POST['start_event'];
$end_event = $_POST['end_event'];
$tempat = $_POST['tempat'];
$nama_tempat = $_POST['nama_tempat'];
$sifat = $_POST['sifat'];
$pic = $_POST['pic'];
$subdit = $_POST['subdit'];
$keterangan = $_POST['keterangan'];
$lhr = $_POST['lhr'];
$sie1=$_POST['sie1'];
$sie2=$_POST['sie2'];
$sie3=$_POST['sie3'];
$sie4=$_POST['sie4'];
$sie5=$_POST['sie5'];
$sie6=$_POST['sie6'];
$sie7=$_POST['sie7'];
$sie8=$_POST['sie8'];
$sie9=$_POST['sie9'];
$sie10=$_POST['sie10'];
$sie11=$_POST['sie11'];
$sie12=$_POST['sie12'];
$sie13=$_POST['sie13'];
$sie14=$_POST['sie14'];
$sie15=$_POST['sie15'];
$sie16=$_POST['sie16'];
$sie17=$_POST['sie17'];
$sie18=$_POST['sie18'];
$sie19=$_POST['sie19'];
$sie20=$_POST['sie20'];
$sie21=$_POST['sie21'];
$sie22=$_POST['sie22'];
$sie23=$_POST['sie23'];

//$cek = "select * from events where start_event between '$start_event' and '$end_event' and status ='1' or end_event between '$start_event'and '$end_event' and status ='1' or start_event<= '$start_event' and end_event>='$end_event' and status ='1'";
//$cek=mysqli_query($konek,$cek);
//$data3 = mysqli_fetch_array($rcek);
//$tes = $data3['start_event'];
//if ($tes != null) {echo "<script type='text/javascript'>window.location.href = '../../dams.php?module=input_rapat_direktur&ket=gagal'; </script>";}else{
$query = "insert into events (no_surat,tanggal_surat,title, start_event, end_event, tempat, tempat_lainnya, status, sifat, pic, subdit, keterangan, lhr, sie1,sie2,sie3,sie4,sie5,sie6,sie7,sie8,sie9,sie10,sie11,sie12,sie13,sie14,sie15,sie16,sie17,sie18,sie19,sie20,sie21,sie22,sie23) values ('$no_surat','$tanggal_surat','$agenda','$start_event','$end_event','$tempat','$nama_tempat','1','$sifat','$subdit','$subdit','$keterangan','$lhr', '$sie1','$sie2','$sie3','$sie4','$sie5','$sie6','$sie7','$sie8','$sie9','$sie10','$sie11','$sie12','$sie13','$sie14','$sie15','$sie16','$sie17','$sie18','$sie19','$sie20','$sie21','$sie22','$sie23')";
$run=mysqli_query($konek,$query);
if($run)
{
	header("Location: ../../dams.php?module=jadwal_direktur");
}
//}
?>
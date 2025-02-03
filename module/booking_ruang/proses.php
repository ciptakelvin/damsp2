<?php
include("../../conn.php");
error_reporting(1);

$tempat = $_POST['tempat'];
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$agenda = $_POST['agenda'];
$subdit = $_POST['subdit'];
$peminjam = $_POST['peminjam'];
$peserta = $_POST['peserta'];
$keterangan = $_POST['keterangan'];
$user = $_POST['user'];
$cek = "select tempat from booking_ruang where tanggal_mulai between '$mulai' and '$selesai' and tempat='$tempat' or tanggal_selesai between '$mulai'and '$selesai' and tempat='$tempat' or tanggal_mulai<= '$mulai' and tanggal_selesai>='$selesai' and tempat='$tempat'";
$rcek=mysqli_query($konek,$cek);
$data3 = mysqli_fetch_array($rcek);
$tes = $data3['tempat'];
if ($tes != null) {echo "<script type='text/javascript'>window.location.href = '../../dams.php?module=input_ruangan&ket=gagal'; </script>";}else{
$query = "insert into booking_ruang (tempat, tanggal_mulai, tanggal_selesai,agenda, subdit, peminjam, peserta, keterangan,created_by) values ('$tempat','$mulai','$selesai','$agenda','$subdit','$peminjam','$peserta','$keterangan', '$user')";
$run=mysqli_query($konek,$query);

$query2 = "insert into ";
if($run)
{
	header("Location: ../../dams.php?module=booking_ruang");
}}
?>
<?php
include("../../conn.php");
$id= $_POST['id'];
$agenda = $_POST['agenda'];
$tempat = $_POST['tempat'];
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$subdit = $_POST['subdit'];
$peminjam = $_POST['peminjam'];
$peserta = $_POST['peserta'];
$keterangan = $_POST['keterangan'];
$user =  $_POST['user'];
$cek = "select tempat from booking_ruang where tanggal_mulai between '$mulai' and '$selesai' and tempat='$tempat' and id!='$id' or tanggal_selesai between '$mulai'and '$selesai' and tempat='$tempat'and id!='$id' or tanggal_mulai<= '$mulai' and tanggal_selesai>='$selesai' and tempat='$tempat' and id!='$id'";
$rcek=mysqli_query($konek,$cek);
$data3 = mysqli_fetch_array($rcek);
$tes = $data3['tempat'];
if ($tes != null) {echo "<script type='text/javascript'>window.location.href = '../../dams.php?module=edit_ruangan&ket=gagal&id=$id'; </script>";}else{
$query = "update booking_ruang set tempat='$tempat',peserta='$peserta',tanggal_mulai='$mulai', tanggal_selesai='$selesai',agenda='$agenda',subdit='$subdit',peminjam='$peminjam', keterangan='$keterangan', created_by ='$user' where id='$id'";
$run=mysqli_query($konek,$query);
if($run)
{
	header("Location: ../../dams.php?module=booking_ruang");
}}
?>
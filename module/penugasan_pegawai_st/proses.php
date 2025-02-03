<?php
include("../../conn.php");
error_reporting(1);

$nost = $_POST['nost'];
$tgl_st = $_POST['tgl_st'];
$agenda = $_POST['agenda'];
$tempat = $_POST['tempat'];
$tempat = $_POST['tempat'];
$nama_tempat = $_POST['nama_tempat'];
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$seksi = $_POST['seksi'];
$jns_st = $_POST['jns_st'];
$cek = "select tempat from events_pegawai_p2 where mulai between '$mulai' and '$selesai' and tempat='$tempat' or selesai between '$mulai'and '$selesai' and tempat='$tempat' or mulai<= '$mulai' and selesai>='$selesai' and tempat='$tempat'";
$rcek=mysqli_query($konek,$cek);
$data3 = mysqli_fetch_array($rcek);
$tes = $data3['tempat'];
$query = "insert into events_pegawai_p2 (no_surat,tanggal_surat,agenda, mulai, selesai, tempat, status, id_sie, jenis_st, tempat_lainnya) values ('$nost','$tgl_st','$agenda','$mulai','$selesai','$tempat','1','$seksi','$jns_st','$nama_tempat')";
$run=mysqli_query($konek,$query);
if($run)
	{	$query2 = "select id from events_pegawai_p2 where no_surat = '$nost' and status = '1'";
		$run2 = mysqli_query($konek,$query2);
		$data2 = mysqli_fetch_array($run2);
		$id = $data2['id'];						
								 {
									header("Location: ../../dams.php?module=input_tim_penugasan_pegawai&id=$id");
									}
						}
?>
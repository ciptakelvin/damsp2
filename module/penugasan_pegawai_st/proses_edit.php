<?php
include("../../conn.php");
$id= $_POST['id'];
$nost = $_POST['nost'];
$tgl_st = $_POST['tgl_st'];
$agenda = $_POST['agenda'];
$tempat = $_POST['tempat'];
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$seksi = $_POST['seksi'];
$nama_tempat = $_POST['nama_tempat'];
$cek = "select tempat from events_pegawai_p2 where mulai between '$mulai' and '$selesai' and tempat='$tempat' and id!='$id' or selesai between '$mulai'and '$selesai' and tempat='$tempat'and id!='$id' or mulai<= '$mulai' and selesai>='$selesai' and tempat='$tempat' and id!='$id'";
$rcek=mysqli_query($konek,$cek);
$data3 = mysqli_fetch_array($rcek);
$tes = $data3['tempat'];
$query = "update events_pegawai_p2 set no_surat='$nost',tanggal_surat='$tgl_st',agenda='$agenda', mulai='$mulai', selesai='$selesai', tempat='$tempat', tempat_lainnya='$nama_tempat' where id='$id'";
$run=mysqli_query($konek,$query);
if($run)
	{	$query2 = "select id from events_pegawai_p2 where no_surat = '$nost' and status = '1'";
		$run2 = mysqli_query($konek,$query2);
		$data2 = mysqli_fetch_array($run2);
		$id = $data2['id'];						
								 {
									header("Location: ../../dams.php?module=input_tim_edit_penugasan_pegawai&id=$id");
									}
						}
?>
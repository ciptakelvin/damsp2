<?php
include("conn.php");
error_reporting(1);

$id = $_GET['id'];
$anggota = $_POST['anggota'];
$idst = $_POST['id_st'];
$query = "delete from pegawai_events where id_events_pgw='$id'";
$run=mysqli_query($konek,$query);

if($run)
{ ?>
                  <div class="text-center">
					<a href="?module=input_tim_edit_penugasan_pegawai&id=<?php echo $id?>" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Data Pegawai ST telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
	header("Location:../../dams.php?module=input_tim_edit_penugasan_pegawai&id=$id");
}
?>
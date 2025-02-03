<?php
include("conn.php");

$id = $_GET['id'];
$query = "update events_pegawai_p2 set status ='0' where id ='$id'";
$run = mysqli_query($konek,$query);
if($run)
{ ?>
                  <div class="text-center">
					<a href="?module=penugasan_pegawai_st" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Data telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
	header("Location : ../../dams.php?module=penugasan_pegawai_st");
}
?>
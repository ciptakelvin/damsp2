<?php
include("conn.php");

$id = $_GET['id'];
$query = "delete from booking_ruang where id ='$id'";
$run = mysqli_query($konek,$query);
if($run)
{ ?>
                  <div class="text-center">
					<a href="?module=booking_ruang" class="btn btn-sm btn-danger">
					<img src="img/back2.png" width="15" height="15">
                      Data telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
	header("Location : ../../dams.php?module=booking_ruang");
}
?>
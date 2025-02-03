<?php
include("conn.php");
$id_rko = $_GET['id'];

//hapus data rko
$query = "update jdl_rko set status = '0' where id_rko='$id_rko'";
$run = mysqli_query($konek,$query);

if($run)
{?>
                  <div class="text-center">
					<a href="?module=rko" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Data telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
	header("Location:?module=rko");
}
?>
<?php

$idrp = $_GET['id'];
$query = "update events set validasi ='0' where id ='$idrp'";
$run = mysqli_query($konek,$query);

if($run)
{ ?>
                  <div class="text-center">
					<a href="?module=jadwal_direktur" class="btn btn-sm btn-danger">
					<img src="img/back2.png" width="15" height="15">
                      Data Validasi telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
	header("Location : ../../dams.php?module=jadwal_direktur");
}
?>
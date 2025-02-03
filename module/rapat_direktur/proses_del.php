<?php

$idrp = $_GET['id'];
$query = "update events set status ='0' where id ='$idrp'";
$run = mysqli_query($konek,$query);

if($run)
{ ?>
                  <div class="text-center">
					<a href="?module=jadwal_direktur" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Data telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
	header("Location : ../../dams.php?module=jadwal_direktur");
}
?>
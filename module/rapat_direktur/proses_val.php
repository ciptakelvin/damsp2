<?php

$idrp = $_GET['id'];
$query = "update events set validasi ='1' where id ='$idrp'";
$run = mysqli_query($konek,$query);

if($run)
{ ?>
                  <div class="text-center">
					<a href="?module=jadwal_direktur" class="btn btn-sm btn-success">
					<img src="img/back2.png" width="15" height="15">
                      Data telah diupdate. Kembali.
                    </a>
                  </div>
				<?php
	header("Location : ../../dams.php?module=jadwal_direktur");
}
?>
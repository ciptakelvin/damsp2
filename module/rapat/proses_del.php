<?php

$idrp = $_GET['id'];
$query = "update rapat_subdit set status ='0' where id_rp ='$idrp'";
$run = mysqli_query($konek,$query);

if($run)
{ ?>
                  <div class="text-center">
					<a href="?module=kegiatan" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Data telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
	header("Location : ../../dams.php?module=kegiatan");
}
?>
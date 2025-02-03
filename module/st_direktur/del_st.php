<?php

$idst = $_GET['id'];
$query = "update surat_tugas_direktur set status ='0' where id_st ='$idst'";
$run = mysqli_query($konek,$query);

if($run)
{?>
                  <div class="text-center">
					<a href="?module=jadwal_direktur" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Data telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
	//header("Location : ?module=kegiatan");
}
?>
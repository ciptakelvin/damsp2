<?php
include("conn.php");
error_reporting(1);

$id = $_GET['id'];
$anggota = $_POST['anggota'];
$idst = $_GET['idst'];
$query = "delete from spd where id_pgw='$id'";
$run=mysqli_query($konek,$query);

if($run)
{ ?>
                  <div class="text-center">
					<a href="?module=edit_spd&id=<?php echo $idst?>" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Data Pegawai ST telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
	header("Location:../../dams.php?module=edit_spd&id=$idst");
}
?>
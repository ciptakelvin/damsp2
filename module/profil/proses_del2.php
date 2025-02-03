<?php
$id_keg = $_GET['id'];
$id_rki = $_GET['id_rki'];

$query = "delete from rki_pegawai where id='$id_keg'";
$run = mysqli_query($konek,$query);

if($run)
{?>
                  <div class="text-center">
					<a href="?module=edit_rki&id=<?php echo $id_rki; ?>" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Data telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
	//header("Location:?module=edit_rki&id=$id_rki");
}
?>
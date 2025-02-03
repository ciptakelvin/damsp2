<?php
$idtugas = $_GET['idtgs'];
$idst = $_GET['idst'];

$query = "delete from pegawai_tugas where id_pegst ='$idtugas'";
$run = mysqli_query($konek,$query);

if($run)
{
?>
                  <div class="text-center">
					<a href="?module=view_st&id=<?php echo $idst; ?>" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Data telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
	//header("Location : ?module=view_st&id=$idst");
}
?>
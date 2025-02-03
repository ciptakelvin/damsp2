<?php
$id_rki = $_GET['id'];

$query = "update uraian_rki set status = '0' where id_rki='$id_rki'";
$run = mysqli_query($konek,$query);

$query2 = "update rki_pegawai set status = '0' where id_rki='$id_rki'";
$run2 = mysqli_query($konek,$query2);

$query3 = "update realisasi_rki set status = '0' where id_rki='$id_rki'";
$run3 = mysqli_query($konek,$query3);

if($run)
{
	if($run2)
	{
		if($run3)
		{?>
                  <div class="text-center">
					<a href="?module=profil" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Data telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
			//include("dams.php?module=profil");
			//header("Location:?module=profil");
		}
	}
}
?>
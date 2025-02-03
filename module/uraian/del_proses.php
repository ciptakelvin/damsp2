<?php
include("conn.php");
$id_uraian = $_GET['id'];
//data uraian
$sql = "select * from uraian_rko where id_uraian='$id_uraian'";
$run_sql = mysqli_query($konek,$sql);
$data = mysqli_fetch_array($run_sql);

//hapus data uraian
$query = "update uraian_rko set status ='0' where id_uraian='$id_uraian'";
$run = mysqli_query($konek,$query);

$query2 = "update uraian_rki set status ='0' where id_uraian='$id_uraian'";
$run2 = mysqli_query($konek,$query2);

$query3 = "update rki_pegawai set status ='0' where id_uraian='$id_uraian'";
$run3 = mysqli_query($konek,$query3);

$query4 = "update realisasi_rki set status ='0' where id_uraian='$id_uraian'";
$run4 = mysqli_query($konek,$query4);


if($run)
{
	if($run2)
		{	
		if($run3)
			{
			if($run4)
				{
				//echo $data['id_rko'];
				?>
                  <div class="text-center">
					<a href="?module=view_uraian&id=<?php echo $data['id_rko']; ?>" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Data telah dihapus. Kembali.
                    </a>
                  </div>
				<?php
				//header("Location:?module=view_uraian&id=".$data['id_rko']);
				}
			}
		}
}		
?>
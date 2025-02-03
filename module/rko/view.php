<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus Judul RKO ?");
}
</script>
<?php
$query_seksi = "select * from id_seksi where id_sie='$seksi'";
$run_seksi = mysqli_query($konek,$query_seksi);
$data5 = mysqli_fetch_array($run_seksi);
?>
<section class="content">
	<div class="container-fluid">
     <div class="row ">
        <div class="col-12">
          <div class="card card-primary">
			<div class="card-header">
              <h3 class="card-title">RKO <?php echo $data5['seksi']; ?></h3>
			  <div class="text-right">
                    <a href="?module=input_rko" class="btn btn-sm btn-warning">
                      Tambah Kegiatan
                    </a>
          
          </div>
        </div>
			<div class="card-body"></h2><div class="row">
				<form method='POST' action=''>
<h2 class="card-title">Pilih tahun RKO</h2>
<h4><select name="Tahun RKO" class="card-title">
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="tahun Lainnya">Lainnya</option>
</select> &emsp; &emsp;<input type="submit" name="submit" value="Submit" class="btn btn-sm btn-primary"></h4>

					</form></div>
				   <?php
					$query = "select id_rko, judul, id_sie, a.id_keg, kegiatan from jdl_rko a, id_kegiatan b where a.id_keg = b.id_keg and status ='1' and a.id_sie ='$seksi'";
					$run = mysqli_query($konek,$query);
					while($data=mysqli_fetch_array($run))
					{
					?>	
					<br>
					<div class="col-sm-3">
						<div class="card bg-light">
							<div class="card-footer small">
								<label class="col-md-9"><?php echo $data['kegiatan'] ?></label>
									<a title="Lihat" href="?module=view_uraian&id=<?php echo $data['id_rko'] ?>" alt="Lihat"><img src="img/look.png" height="20" width="20"></a>
									<a title="Hapus" onclick="myFunction_1()" href="?module=del_rko&id=<?php echo $data['id_rko']; ?>"><img src="img/del.png" height="20" width="20"></a>
								
							</div>
							<div class="ribbon p-4 ">
                          <?php echo $data['judul'] ?>
							</div>
						</div>
					</div>
					<br>	
					<?php
					$no++;
					}
					?>
				</div>
			</div>
</div>
            <!-- /.card-header -->

            
          <!-- /.card -->
		  
	
</div>
</section>

<!-- DataTables -->
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap4.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
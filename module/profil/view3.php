<script>

</script>
<?php
$idkeg = $_GET['idkeg'];
$id_uraian = $_GET['uraian'];
$query2 = "SELECT * FROM rki_pegawai where id_rkipeg='$idkeg'";
$run2 = mysqli_query($konek,$query2);
$data2 = mysqli_fetch_array($run2);
?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Uraian Realisasi <?php echo $data2['kegiatan'];?></h3>
              </div>
              <div class="card-body">
                  <div class="text-left">
					<a href="?module=view_rki&uraian=<?php echo $id_uraian ?>&id=<?php echo $data2['id_rki'];?>" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Kembali
                    </a>
                    <a href="?module=isi_realisasi&idkeg=<?php echo $idkeg ; ?>&uraian=<?php echo $id_uraian; ?>" class="btn btn-sm btn-success">
                      Tambah Realisasi
                    </a>
                  </div>
				  <br>
			  <table id="example1" class="table table-bordered table-striped form-control-sm">
				<tr><th>No</th>
					<th>Uraian Kegiatan Realisasi</th>
					<th>Volume</th>
					<th>Tanggal</th>
					<th>Keterangan</th>
				</tr>
			  <?php
			  $query3 = "select * from realisasi_rki where id_keg='$idkeg' and status ='1'";
			  $run3 = mysqli_query($konek,$query3);
			  $no=1;
			  while($data3=mysqli_fetch_array($run3))
			  {
			  ?>
			  	<tr><td><?php  echo $no;?></td>
					<td><?php  echo $data3['nama_realisasi'];?></td>
					<td><?php  echo $data3['vol'];?></td>
					<td><?php  echo $data3['tanggal'];?></td>
					<td><?php  if($data3['val']==0)
						{
							echo "Belum Validasi";
						}
						else
						{
							echo "Sudah Validasi";
						}
						?></td>
				</tr>
			  <?php
			  $no++;
			  }
			  ?>
				
			  </table>
              </div>
              <!-- /.card-body -->
            </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
<!-- Select2 -->
<script src="js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="js/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="js/moment.min.js"></script>
<script src="js/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="js/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=".js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="js/bootstrap-switch.min.js"></script>

<!-- bs-custom-file-input -->
<script src="js/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>

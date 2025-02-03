
<script>
function myFunction() {
  confirm("Apakah Anda Yakin Akan Menghapus Uraian RKO ?");
}
</script>
<?php
$id_rko = $_GET['id'];
$query = "select a.id_rko, a.judul, b.seksi, c.kegiatan from jdl_rko a, id_seksi b, id_kegiatan c where a.id_sie = b.id_sie and a.id_keg = c.id_keg and a.id_rko ='$id_rko'";
$run = mysqli_query($konek,$query);
$data = mysqli_fetch_array($run);
?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">RKO Seksi Dukungan Teknis Pemeriksaan</h3>
              </div>
              <div class="card-body">
               <div class="card bg-light">
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-10">
                      <h2 class="lead"><b><?php echo $data['judul'];?></b></h2>
					  <table class="form-control-sm">
						<tr><th>Seksi</th><td>:  <?php echo $data['seksi'];?> </td></tr>
						<tr><th>Jenis Kegiatan</th><td>: <?php echo $data['kegiatan'];?></td></tr>
					  </table>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-left">
					<a href="?module=rko" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Kembali
                    </a>
                    <a href="?module=input_uraian&id=<?php echo $id_rko ?>" class="btn btn-sm btn-success">
                      Tambah Uraian
                    </a>
                  </div>
                </div>
              </div>
			  <?php
			  $query2 = "select a.*, b.*, c.nama from jdl_rko a, uraian_rko b, pegawai c where a.id_rko = b.id_rko and b.pic = c.id_peg and b.status = '1' and a.id_rko ='$id_rko'";
			  $run2 = mysqli_query($konek,$query2);
			  ?>
			  <table id="example1" class="table table-bordered table-striped form-control-sm">
				<tr><th>No</th>
					<th>Uraian Kegiatan</th>
					<th>Volume</th>
					<th>Jangka Waktu</th>
					<th>Indikator</th>
					<th>Risiko</th>
					<th>PIC</th>
					<th>Menu</th>
				</tr>
				<?php
				$no = 1;
				while($data1 = mysqli_fetch_array($run2))
				{				
				?>
					<tr><td><?php echo $no; ?></td>
						<td><?php echo $data1['uraian']; ?></td>
						<td><?php echo $data1['volume']; ?></td>
						<td><?php echo $data1['jgkwaktu']." ".$data1['jangka']; ?></td>
						<td><?php echo $data1['indikator']; ?></td>
						<td><?php echo $data1['risiko']; ?></td>
						<td><?php echo $data1['nama']; ?></td>
						<td><a title="Edit" href="?module=edit_uraian&id=<?php echo $data1['id_uraian']; ?>"><img src="img/edit.png" height="20" width="20"></a><br>
							<a title="Hapus" onclick="myFunction()" href="?module=del_uraian&id=<?php echo $data1['id_uraian']; ?>"><img src="img/del.png" height="20" width="20"></a>
						</td>
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

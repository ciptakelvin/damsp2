<?php
$id_rki = $_GET['id'];
$query = "select a.id_rki, a.id_rko, a.pic, a.id_peg, b.*, c.seksi nm_seksi from uraian_rki a, uraian_rko b, id_seksi c where a.id_uraian = b.id_uraian and a.id_rki = '$id_rki' and b.id_sie = c.id_sie";
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
                <h3 class="card-title"><h3 class="card-title">Form Input RKI</h3>
              </div>
			  <div class="card-body">
				  <div class="card bg-light">
					<div class="card-body pt-0">
					  <div class="row">
                    <div class="col-10">
                      <h2 class="lead"><b><?php echo $data['judul'];?></b></h2>
					  <table class="form-control-sm">
						<tr><th>Seksi</th><td>:  <?php echo $data['nm_seksi'];?> </td></tr>
						<tr><th>Uraian Kegiatan</th><td>: <?php echo $data['uraian'];?></td></tr>
					  </table>
                    </div>
					  </div>
					</div>
					<div class="card-footer">
					</div>
				  </div>
              <!-- /.card-header -->
              <!-- form start -->
			  
              <form role="form" action="module/profil/proses_input2.php" method="post">
				<input type="hidden" name="id_rko" value="<?php echo $data['id_rko']; ?>">
				<input type="hidden" name="id_uraian" value="<?php echo $data['id_uraian']; ?>">
				<input type="hidden" name="id_rki" value="<?php echo $id_rki; ?>">
				<input type="hidden" name="id_peg" value="<?php echo $data['id_peg']; ?>">
			  <table class="col-md-10 form-control-sm">
				<tr><td>Kegiatan</td><td><input class="col-md-8 form-control form-control-sm" type="text" name="uraian" placeholder="Kegiatan" autocomplete="off" required></td></tr>
				<tr><td>Input</td><td><input class="col-md-8 form-control form-control-sm" type="text" name="input" placeholder="Input" autocomplete="off" required></td></tr>
				<tr><td>Output</td><td><input class="col-md-8 form-control form-control-sm" type="text" name="output" placeholder="Output" autocomplete="off" required></td></tr>
				<tr><td>Outcomes</td><td><input class="col-md-8 form-control form-control-sm" type="text" name="outcomes" placeholder="Outcomes" autocomplete="off" required></td></tr>
				<tr><th></th></tr>
				<tr><th>Target</th></tr>			
				<tr><td>Volume</td><td><input class="col-md-6 form-control form-control-sm" type="number" name="volume" placeholder="Volume" autocomplete="off" required></td></tr>
				<tr><td>Satuan</td><td><input class="col-md-6 form-control form-control-sm" type="text" name="satuan" placeholder="Satuan" autocomplete="off" required></td></tr>
				<tr><td>Jangka Waktu</td>
				<td><input class="col-4 form-control form-control-sm" type="number" name="jgkwaktu" placeholder="Jangka Waktu" autocomplete="off" required><select class="col-md-4 form-control form-control-sm select2bs4" name="waktu">
							<option value="Hari Kerja">Hari Kerja</option>
							<option value="Bulan">Bulan</option>
							<option value="Triwulan">Triwulan</option>
							<option value="Semester">Semester</option>
							<option value="Tahun">Tahun</option>
						</select>
				</td></tr>
				<tr><td>Indikator</td><td><input class="col-md-8 form-control form-control-sm" type="text" name="indikator" placeholder="Indikator" autocomplete="off" required></td></tr>
				<tr><td>Keterangan</td><td><input class="col-md-8 form-control form-control-sm" type="text" name="ket" placeholder="Keterangan" autocomplete="off" required></td></tr>
				<tr><td>Risiko</td><td><input class="col-md-8 form-control form-control-sm" type="text" name="risiko" placeholder="Risiko" autocomplete="off" required></td></tr>
				<tr><td>Sistem Pengendali</td><td><input class="col-md-8 form-control form-control-sm" type="text" name="sistem" placeholder="Sistem Pengendali" autocomplete="off" required></td></tr>
				<tr><td>Mitigasi Risiko</td><td><input class="col-md-10 form-control form-control-sm" type="text" name="mitigasi" placeholder="Mitigasi Risiko" autocomplete="off" required></td></tr>
				<tr><td>Subdit/Dit Terkait</td><td><input class="col-md-8 form-control form-control-sm" type="text" name="terkait" placeholder="Subdit/Dit Terkait" autocomplete="off" required></td></tr>
			  </table>
                <!-- /.card-body -->
				<br>
				  <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
					<a href="?module=view_rki&id=<?php echo $id_rki; ?>" class="btn btn-sm btn-danger">
                      Batal
                    </a>
                  </div>
			</form>
			  </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
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

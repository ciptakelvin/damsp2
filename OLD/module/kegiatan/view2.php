<?php
$id_rko = $_GET['id'];
$query = "select a.*, b.kegiatan, c.seksi sie from jdl_rko a, id_kegiatan b, id_seksi c where a.jenis=b.id and a.seksi=c.id and a.id_rko = '$id_rko'";
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
                <h3 class="card-title">Kegiatan oleh Subdit</h3>
              </div>
			  <div class="card-body ">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="?module=proses_kegiatan" method="post">
				<input type="hidden" name="id_rko" value="<?php echo $id_rko; ?>">
			<table class="col-md-12 form-control-sm">
				<tr><td>Nama Kegiatan</td>
					<td><input value="Piloting Desktop Pemeriksaan" class="col-md-8 form-control form-control-sm" type="text" name="nmkegiatan" placeholder="Nama Kegiatan" required></td>
				</tr>
				<tr><td>Tanggal</td>
					<td><input value="12 Februari 2020" class="col-md-8 form-control form-control-sm" type="text" name="tanggal" placeholder="Tanggal" required></td>
				</tr>
				<tr><td>Tempat</td>
					<td><input value="KPP Pratama Bandung Bojonagara" class="col-md-8 form-control form-control-sm" type="text" name="tempat" placeholder="Tempat" required></td>
				</tr>
				<tr><td>Peserta</td>
					<td><input value="Fungsional Pemeriksa Pajak" class="col-md-8 form-control form-control-sm" type="text" name="peserta" placeholder="Peserta" required></td>
				</tr>			
				<tr><td>No. ST</td>
					<td><input value="ST-150/PJ.04/2020" class="col-md-6 form-control form-control-sm" type="text" name="volume" placeholder="No. ST" required></td>
				</tr>
				<tr><td>Tanggal ST</td>
					<td><input value="7 Februari 2020" type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
				</td></tr>
				<tr><td>No. Laporan</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="laporan" placeholder="No. Laporan" required></td>
				</tr>
				<tr><td>Keterangan</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="ket" placeholder="Keterangan" required></td>
				</tr>
			</table>
			<br>
			<table class="col-md-12 table-bordered form-control-sm">
				<tr><th>No.</th><th>Nama</th><th>NIP</th><th>Pangkat/Golongan</th><th>Seksi</th><th>Aksi</th></tr>
				<tr><td>1.</td>
					<td>Ade Ilhamia</td>
					<td>19920923 201402 2 002</td>
					<td>Pengatur Tk.I/IId</td>
					<td>Seksi Dukungan Teknis Pemeriksaan</td>
					<td><a title="Lihat" href="#" alt="Lihat"><img src="img/look.png" height="20" width="20"></a>
					<a title="Hapus" onclick="myFunction_1()" href="#"><img src="img/del.png" height="20" width="20"></a></td>
				</tr>
				<tr><td>2.</td>
					<td>Zessyca</td>
					<td>19940420 201502 2 002</td>
					<td>Pengatur Muda Tk.I/IIb</td>
					<td>Seksi Data Dan Dukungan Pemeriksaan</td>
					<td><a title="Lihat" href="#" alt="Lihat"><img src="img/look.png" height="20" width="20"></a>
					<a title="Hapus" onclick="myFunction_1()" href="#"><img src="img/del.png" height="20" width="20"></a></td>
				</tr>
			</table>
                <!-- /.card-body -->
				<br>
				  <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
					<a href="?module=kegiatan" class="btn btn-sm btn-danger">
                      Batal
                    </a>
                  </div>
			</form>
				</div>
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

  $(function () {
  //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
  }
</script>
</body>
</html>

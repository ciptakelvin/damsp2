<?php

?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
			<div class="card-header">
                <h6>Form Input Pegawai </h6>
              </div>
			  <div class="card-body ">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/kepegawaian/proses.php" method="post">
			<table class="col-md-12 form-control-sm">
				<tr><td>Nama Pegawai</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="nama" placeholder="Nama Pegawai" autocomplete = "off" required></td>
				</tr>
				<tr><td>NIP 9 Digit / ID</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="nip9" placeholder="NIP 9 Digit / ID" autocomplete = "off" required></td>
				</tr>
				<tr><td>NIP 18 Digit</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="nip18" placeholder="NIP 18 Digit" autocomplete = "off" required></td>
				</tr>	
				<tr><td>Jabatan</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="jab" placeholder="Jabatan" autocomplete = "off" required></td>
				</tr>
				<tr><td>Pangkat/Gol</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="panggol" placeholder="masukan pangkat dan golongan" autocomplete = "off" required></td>
				</tr>	
				<tr><td>Whatsapp</td>
					<td><input class="col-md-5 form-control form-control-sm" type="text" name="wa" placeholder="masukan nomor Whatsapp" title="Isi '-' jika tidak tau" autocomplete = "off" required></td>
				</tr>
				<tr><td>Seksi</td>
				<td><select class="col-md-5 form-control form-control-sm select2bs4" style="width: 100%;" name="id_sie">
						<option value="">--Pilih Seksi--</option>
						<option value="16">Direktur P2</option>
						<option value="17">Kepala SubDirektorat Perencanaan Pemeriksaan</option>
						<option value="18">Kepala SubDirektorat Teknik dan Pengendalian Pemeriksaan</option>
						<option value="19">Kepala SubDirektorat Pemeriksaan Transaksi Khusus</option>
						<option value="20">Kepala SubDirektorat Kerjasama dan Dukungan Pemeriksaan</option>
						<option value="21">Kepala SubDirektorat Penagihan</option>
						<option value="23">Kepala SubDirektorat Penilaian II</option>
						<option value="22">Subbagian Tata Usaha</option>
						<option value="0">Pemeriksa Pajak P2</option>
						<option value="27">Penilai Pajak P2</option>
						<option value="1">Seksi Kerjasama Pemeriksaan</option>
						<option value="2">Seksi Dukungan Teknis Pemeriksaan</option>
						<option value="3">Seksi Data dan Dukungan Pemeriksaan</option>
						<option value="4">Seksi Perencanaan Pemeriksaan Wajib Pajak Orang Pribadi</option>
						<option value="5">Seksi Perencanaan Pemeriksaan Wajib Pajak Badan</option>
						<option value="6">Seksi Strategi Pemeriksaan</option>
						<option value="7">Seksi Teknik Pemeriksaan</option>
						<option value="8">Seksi Pengendalian Mutu Pemeriksaan</option>
						<option value="9">Seksi Evaluasi dan Kinerja Pemeriksaan</option>
						<option value="10">Seksi Pemeriksaan Transaksi Perusahaan Grup</option>
						<option value="11">Seksi Pemeriksaan Wajib Pajak Sektor Sumber Daya Alam</option>
						<option value="12">Seksi Transfer Pricing dan Transaksi Khusus Lainnya</option>
						<option value="13">Seksi Strategi dan Dukungan Penagihan</option>
						<option value="14">Seksi Perencanaan dan Evaluasi Penagihan</option>
						<option value="15">Seksi Pengendalian Mutu dan Administrasi Penagihan</option>
						<option value="24">Seksi Penilaian Massal Bangunan</option>
						<option value="25">Seksi Penilaian Individu Perumahan dan Industri</option>
						<option value="26">Seksi Penilaian Individu Pertambangan</option>

				</td></tr>
				<tr><td>Jenis User</td>
				<td><select class="col-md-5 form-control form-control-sm select2bs4" style="width: 100%;" name="jenis_user">
						<option value="">--Pilih User--</option>
						<option value="admin">Admin</option>
						<option value="dir">Pejabat</option>
						<option value="admin_dir">Sekre</option>
						<option value="admin_pel">Admin ST</option>
						<option value="admin_spd">Admin SPD</option>
						<option value="Biasa">Biasa</option>
				</td></tr>
				<tr><td>Status</td>
				<td><select class="col-md-5 form-control form-control-sm select2bs4" style="width: 100%;" name="status">
						<option value="1">--Pilih Status--</option>
						<option value="1">Aktif</option>
						<option value="0">Mutasi</option>
				</td></tr>
				<tr><td>Password</td>
					<td><input class="col-md-3 form-control form-control-sm" type="password" name="password" placeholder="masukan password sementara" autocomplete = "off" required></td>
				</tr>
				
			</table>
                <!-- /.card-body -->
				<br>
				  <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
					<a href="?module=kepegawaian" class="btn btn-sm btn-danger">
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

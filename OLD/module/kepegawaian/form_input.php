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
                <h3 class="card-title">Form Input Pegawai </h3>
              </div>
			  <div class="card-body ">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/kepegawaian/proses.php" method="post">
			<table class="col-md-12 form-control-sm">
				<tr><td>Nama Pegawai</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="namapeg" placeholder="Nama Pegawai" autocomplete = "off" required></td>
				</tr>
				<tr><td>NIP 9 Digit</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="nip9" placeholder="NIP 9 Digit" autocomplete = "off" required></td>
				</tr>
				<tr><td>NIP 18 Digit</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="nip18" placeholder="NIP 18 Digit" autocomplete = "off" required></td>
				</tr>	
				<tr><td>Pangkat/Golongan</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="panggol" placeholder="Pengatur Tk.I/IId" autocomplete = "off" required></td>
				</tr>	
				<tr><td>Tanggal Masuk</td>
					<td><input class="col-md-4 form-control form-control-sm" type="date" name="tanggal" placeholder="yyyy/mm/dd" autocomplete = "off" required></td>
				</tr>
				<tr><td>Seksi</td><td>
						<select class="col-md-5 form-control form-control-sm select2bs4" style="width: 100%;" name="seksi">
						<option>Seksi</option>
						<?php
							$query = "select * from id_seksi where id_sie in ('1','2','3')";
							$run = mysqli_query($konek,$query);
							while($data1=mysqli_fetch_array($run))
							{
						?>
							<option value="<?php echo $data1['id_sie']; ?>"><?php echo $data1['seksi']; ?></option>
						<?php
						}
						?>
						</select>
				</td></tr>
				<tr><td>Jabatan</td>
				<td><select class="col-md-5 form-control form-control-sm select2bs4" style="width: 100%;" name="jabatan">
						<option>Jabatan</option>
						<option value="Pelaksana">Kepala</option>
						<option value="Pelaksana">Pelaksana</option>
				</td></tr>
				
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

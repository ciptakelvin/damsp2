<?php
$id = $_GET['id'];
$query = "select * from tugas_direktur where id_tgdirektur ='$id'";
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
                <h3 class="card-title">Form Input Kegiatan Direktur </h3>
              </div>
			  <div class="card-body ">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/jadwal_direktur/proses_edit.php" method="post">
              	<input type="hidden" name="id" value="<?php echo $data['id_tgdirektur']; ?>">
			<table class="col-md-12 form-control-sm">
				<tr><td>Nama Kegiatan</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="nmkegiatan" placeholder="Nama Kegiatan" value="<?php echo $data['tugas'];?>" required></td>
				</tr>
				<tr><td>Tanggal</td>
					<td><input class="col-md-8 form-control form-control-sm" type="date" name="tanggal" placeholder="yyyy/mm/dd" value="<?php echo $data['tanggal'];?>" required></td>
				</tr>
				<tr><td>Waktu Mulai</td>
					<td><input class="col-md-8 form-control form-control-sm" type="time" name="waktu_mulai" placeholder="Masukan Jam Mulai" value="<?php echo substr($data['waktu_mulai'],0,5);?>" required></td>
				</tr>
				<tr><td>Waktu Selesai</td>
					<td><input class="col-md-8 form-control form-control-sm" type="time" name="waktu_selesai" placeholder="Masukan Jam Selesai" value="<?php echo substr($data['waktu_selesai'],0,5);?>" required></td>
				</tr>
				<tr><td>Tempat</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="tempat" placeholder="Tempat" value="<?php echo $data['tempat'];?>" required></td>
				</tr>
				<tr><td>Peserta</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="peserta" placeholder="Peserta" value="<?php echo $data['peserta'];?>" required></td>
				</tr>		
				<tr><td>PIC</td><td>
						<select class="col-md-5 form-control form-control-sm select2bs4" style="width: 100%;" name="pic">
						<option>Seksi</option>
						<?php
							$query = "select * from id_seksi";
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
				<tr><td>Sifat</td>
					<td><select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="sifat">
              	<option value='0' placeholder="Pilih">--Pilih--</option>
                <?php
                $sql2="select * from id_sifat";
                $hasil2=mysqli_query($konek,$sql2);
                ?>
                <?php
                while($data2=mysqli_fetch_array($hasil2)){
                ?>
                <option value='<?php echo $data2['sifat']; ?>'><?php echo $data2['sifat']; ?></option>
                <?php
                }
                ?>
                </select></td>
				</tr>
				<tr><td>No. Laporan</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="laporan" placeholder="No. Laporan" value="<?php echo $data['laporan'];?>" required></td>
				</tr>
				<tr><td>Keterangan</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="ket" placeholder="Keterangan" value="<?php echo $data['ket'];?>" required></td>
				</tr>
			</table>
                <!-- /.card-body -->
				<br>
				  <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
					<a href="?module=jadwal_direktur" class="btn btn-sm btn-danger">
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

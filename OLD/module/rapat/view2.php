
<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus Data Pegawai ?");
}
</script>
<?php
$id_rp = $_GET['id'];
$query = "select a.*, b.nama from rapat_subdit a, pegawai b where a.pic = b.id_peg and id_rp='$id_rp'";
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
                <h3 class="card-title"><h3 class="card-title">Kegiatan Rapat Subdit</h3>
              </div>
			  <div class="card-body">
			  
              <!-- /.card-header -->
              <!-- form start -->
			  
              <form role="form" action="module/rapat/proses_edit.php" method="post">
				<input type="hidden" name="id_rp" value="<?php echo $id_rp; ?>">
				<input type="hidden" name="id_peg" value="<?php echo $data['pic']; ?>">

			  <table class="col-md-12 form-control-sm">
			  <input type="hidden" name ="idst" value="<?php echo $id_st; ?>">
				<tr><td>No. Undangan</td><td><input value="<?php echo $data['nomor']; ?>" class="col-md-8 form-control form-control-sm" type="text" name="nomor"></td><td></td></tr>
				<tr><td>Tgl Und</td><td><input value="<?php echo $data['tanggal']; ?>" class="col-md-8 form-control form-control-sm" type="text" name="tanggal"></td><td></td></tr>
				<tr><td>Unit</td><td><input  value="<?php echo $data['unit']; ?>"  class="col-md-8 form-control form-control-sm" type="text" name="unit"></td><td></td></tr>
				<tr><td>Agenda</td><td><input  value="<?php echo $data['agenda']; ?>"  class="col-md-8 form-control form-control-sm" type="text" name="agenda"></td><td></td></tr>		
				<tr><td>Tempat</td><td><input value="<?php echo $data['tempat']; ?>" class="col-md-6 form-control form-control-sm" type="text" name="tempat"></td></tr>
				<tr><td>Waktu Kegiatan</td><td><input value="<?php echo $data['waktu']; ?>" class="col-md-6 form-control form-control-sm" type="text" name="waktu"></td></tr>
				<tr><td>Tindak Lanjut</td><td><input value="<?php echo $data['tdklanjut']; ?>" class="col-md-6 form-control form-control-sm" type="text" name="tdklanjut"></td></tr>
				<tr><td>PIC</td>
					<td><select name="idpic">
					<option value="<?php echo $data['pic'];?>"><?php echo $data['nama']; ?></option>
								<?php $query2="select * from pegawai where nip18 !=''";
									$run2=mysqli_query($konek,$query2);
									while($data2=mysqli_fetch_array($run2)){
									?>
									<option value='<?php echo $data2['id_peg']; ?>'><?php echo $data2['nama']; ?></option>
									<?php
									}
									?>
					</select></td>
				</tr>
				<tr><td>Keterangan</td><td><input value="<?php echo $data['ket']; ?>" class="col-md-6 form-control form-control-sm" type="text" name="ket"></td></tr>
			  
			  
			  </table>
			  <br>
			  <?php
				$ket = $_GET['ket'];
				if($ket=='ubah')
				{
				?>
					<div class="text-center">
                    <button class="btn btn-sm btn-primary">Berhasil Disimpan</button>
					<a href="?module=kegiatan" class="btn btn-sm btn-secondary">
                      Kembali
                    </a>
                  </div>
			<?php	
				}
				else
				{
			?>
				  <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Update</button>
					<a href="?module=kegiatan" class="btn btn-sm btn-danger">
                      Batal
                    </a>
                  </div>
              </form>
				<?php
				}
			  ?>
			  <br>
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

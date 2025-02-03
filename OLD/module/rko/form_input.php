
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input RKO Seksi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/rko/proses.php" method="post">
               <div class="col-md-12 card-body">
							<span class="form-control-sm" >Seksi</span>
							<select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="seksi">
							<option value='0'>Pilih</option>
							<?php
							$sql="select * from id_seksi";
							$hasil=mysqli_query($konek,$sql);
							?>
							<?php
							while($data=mysqli_fetch_array($hasil)){
							?>
							<option value='<?php echo $data['id_sie']; ?>'><?php echo $data['seksi']; ?></option>
							<?php
							}
							?>
							</select>
						
							<span class="form-control-sm" >Jenis Kegiatan</span>
								<select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="jenis">
							<option value='0'>Pilih</option>
								<?php
								$sql2="select * from id_kegiatan";
								$hasil2=mysqli_query($konek,$sql2);
								?>
								<?php
								while($data2=mysqli_fetch_array($hasil2)){
								?>
								<option value='<?php echo $data2['id_keg']; ?>'><?php echo $data2['kegiatan']; ?></option>
								<?php
								}
								?>
								</select>
								
							<span class="form-control-sm" >Judul Kegiatan</span>
							<input class="form-control form-control-sm" type="text" name="judul">
							<!-- /.form-group -->
						<br>
						<div class="text-right">
							<button type="submit" class="btn btn-sm btn-success">Simpan</button>
						  </div>
					</div><!-- /.coloumn -->
				</div>
                <!-- /.card-body -->
              </form>
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

<script>

</script>
<?php
$idkeg = $_GET['idkeg'];
$id_uraian = $_GET['uraian'];
$query2 = "SELECT a.*, nama_realisasi, tanggal, b.vol bvolume, val, b.status bstatus FROM rki_pegawai a left join realisasi_rki b on a.id_rkipeg = b.id_keg where a.id_rkipeg='$idkeg'";
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
                <h3 class="card-title">Input Uraian Realisasi <?php echo $data2['kegiatan'];?></h3>
              </div>
              <div class="card-body">
                  <div class="text-left">
					<a href="?module=isi&idkeg=<?php echo $idkeg; ?>&uraian=<?php echo $id_uraian ; ?>" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Kembali
                    </a>
                  </div>
              </div>
			  <form role="form" action="module/profil/proses_input3.php" method="post">
               <div class="col-md-12 card-body">
							<input class="form-control form-control-sm" type="hidden" name="idkeg" value="<?php echo $idkeg; ?>">
							<input class="form-control form-control-sm" type="hidden" name="idrki" value="<?php echo $data2['id_rki']; ?>">
							<input class="form-control form-control-sm" type="hidden" name="id_uraian" value="<?php echo $id_uraian; ?>">
							<input class="form-control form-control-sm" type="hidden" name="id_rko" value="<?php echo $data2['id_rko']; ?>">
							<input class="form-control form-control-sm" type="hidden" name="id_peg" value="<?php echo $data2['pic']; ?>">
							<span class="form-control-sm" >Uraian Kegiatan Realisasi</span>
							<input class="form-control form-control-sm col-sm-8" type="text" name="kegiatan" autocomplete="off">
							<span class="form-control-sm" >Tanggal</span>
							<input class="form-control form-control-sm col-sm-3" type="date" name="tanggal" autocomplete="off">
							<span class="form-control-sm" >Volume</span>
							<input class="form-control form-control-sm col-sm-3" type="text" name="vol" autocomplete="off">
							<!-- /.form-group -->
						<br>
						<div class="text-right  col-sm-8">
							<button type="submit" class="btn btn-sm btn-success">Simpan</button>
						  </div>
					</div><!-- /.coloumn -->
				</div>
                <!-- /.card-body -->
              </form>
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

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
                <h3 class="card-title">Form input ST Pegawai Subdit </h3>
              </div>
			  <div class="card-body ">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/st/proses_input.php" method="post">
				<input type="hidden" name="id_rko" value="<?php echo $id_rko; ?>">
			<table class="col-md-12 form-control-sm">
				<tr><td>Nomor ST</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="nost" placeholder="Nomor ST" required></td>
				</tr>
				<tr><td>Tanggal</td>
					<td><input type="text" id="tglst" class="col-md-8 form-control datepicker form-control-sm" name="tglst"></td>
				</tr>
				<tr><td>Tempat</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="tempat" placeholder="Tempat" required></td>
				</tr>
				<tr><td>Agenda</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="agenda" placeholder="Agenda" required></td>
				</tr>			
				<tr><td>Waktu Kegiatan</td>
					<td><input type="text" class="col-md-8 form-control form-control-sm" id="wkt_keg" name="wkt_keg" placeholder="yyyy/mm/dd - yyyy/mm/dd" required></td>
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
    

<script type="text/javascript">
$(document).ready(function() {
        // datepicker plugin
        $('.datepicker').datepicker({
        format: "dd-mm-yyyy",
        weekStart: 1,
        autoclose: true,
        daysOfWeekHighlighted: [0,6],
        todayHighlight: true,
    });
		$('.datepicker2').datepicker({
        format: "dd-mm-yyyy",
		endDate: '+0d',
        weekStart: 1,
        autoclose: true,
        daysOfWeekHighlighted: [0,6],
        todayHighlight: true,
    });
</script>

</body>
</html>

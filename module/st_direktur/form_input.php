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
                <h3 class="card-title">Form input ST Direktur </h3>
              </div>
			  <div class="card-body ">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/st_direktur/proses_input.php" method="post">
				<input type="hidden" name="id_rko" value="<?php echo $id_rko; ?>">
			<table class="col-md-12 form-control-sm">
				<tr><td>Nomor ST</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="nost" placeholder="Nomor ST" required></td>
				</tr>
				<tr><td>Tanggal</td>
					<td><input type="date" id="tglst" class="col-md-8 form-control form-control-sm" name="tglst"></td>
				</tr>
				<tr><td>Tempat</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="tempat" placeholder="Tempat" required></td>
				</tr>
				<tr><td>Agenda</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="agenda" placeholder="Agenda" required></td>
				</tr>			
				<tr><td>Waktu Kegiatan Mulai</td>
					<td><input type="date" class="col-md-8 form-control date-picker form-control-sm" id="wkt_keg" name="wkt_keg" placeholder="yyyy/mm/dd - yyyy/mm/dd" required></td>
				</tr>
        </tr>     
        <tr><td>Waktu Kegiatan Selesai</td>
          <td><input type="date" class="col-md-8 form-control form-control-sm" id="wkt_keg2" name="wkt_keg2" placeholder="yyyy/mm/dd - yyyy/mm/dd" required></td>
        </tr>
        <tr><td>Sifat</td><td>
                <select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="sifat">
              <option value='0'>Pilih</option>
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

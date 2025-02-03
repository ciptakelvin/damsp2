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
                <h3 class="card-title">Form Agenda Direktur</h3>
              </div>
			  <div class="card-body ">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/rapat_direktur/proses.php" method="post">
			<table class="col-md-12 form-control-sm">
				<tr><td>Nomor Surat</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="nomor" placeholder="Nomor Surat" required></td>
				</tr>
				<tr><td>Tanggal Surat</td>
					<td><input type="date" class="col-md-8 form-control form-control-sm" name="tglsurat" placeholder="yyyy/mm/dd"></td>
				</tr>
				
				<tr><td>Tanggal Pelaksanaan Agenda</td>
					<td><input type="date" class="col-md-8 form-control form-control-sm" name="tgl" placeholder="yyyy/mm/dd"></td>
				</tr>
				<tr><td>Waktu Mulai</td>
					<td><input type="time" class="col-md-8 form-control form-control-sm" name="waktu_mulai" placeholder="hh/mm/ss"></td>
				</tr>
				<tr><td>Waktu Selesai</td>
					<td><input type="time" class="col-md-8 form-control form-control-sm" name="waktu_selesai" placeholder="hh/mm/ss"></td>
				</tr>
				<tr><td>Tempat</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="tempat" placeholder="Tempat" required></td>
				</tr>
				<tr><td>Agenda</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="agenda" placeholder="Agenda" required></td>
				</tr>
				<tr><td>Sifat</td>
					<td><select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="sifat">
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
				<tr><td>PIC</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="unit" placeholder="PIC" required>
					</td>
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
//Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
	//Date range picker
    $('#wkt_keg').daterangepicker()
</script>

</body>
</html>

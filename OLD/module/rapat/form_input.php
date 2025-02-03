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
                <h3 class="card-title">Form Rapat Subdit</h3>
              </div>
			  <div class="card-body ">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/rapat/proses.php" method="post">
			<table class="col-md-12 form-control-sm">
				<tr><td>Nomor Undangan</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="nomor" placeholder="Nomor Undangan" required></td>
				</tr>
				<tr><td>Tanggal Surat</td>
					<td><input type="text" class="col-md-8 form-control form-control-sm" name="tglsurat" placeholder="yyyy/mm/dd"></td>
				</tr>
				<tr><td>Unit Pelaksana</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="unit" placeholder="Unit Pelaksana" required></td>
				</tr>
				<tr><td>Tanggal</td>
					<td><input type="text" class="col-md-8 form-control form-control-sm" name="tgl" placeholder="yyyy/mm/dd"></td>
				</tr>
				<tr><td>Tempat</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="tempat" placeholder="Tempat" required></td>
				</tr>
				<tr><td>Agenda</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="agenda" placeholder="Agenda" required></td>
				</tr>			
				<tr><td>PIC</td>
					<td><select name="pic">
					<option>Nama Pegawai</option>
								<?php $query2="select * from pegawai";
									$run2=mysqli_query($konek,$query2);
									while($data2=mysqli_fetch_array($run2)){
									?>
									<option value='<?php echo $data2['id_peg']; ?>'><?php echo $data2['nama']; ?></option>
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

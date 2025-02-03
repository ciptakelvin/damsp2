<?php
$id = $_GET['id'];
$query = "select * from surat_tugas where id_st ='$id'";
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
                <h3 class="card-title">Surat tugas berhasil disimpan. Input pegawai bertugas. </h3>
              </div>
			  <div class="card-body ">
              <!-- /.card-header -->
              <!-- form start -->
				<input type="hidden" name="id_rko" value="<?php echo $id_rko; ?>">
			<table class="col-md-12 form-control-sm">
				<tr><td>Nomor ST</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="nost" value="<?php echo $data['nomor']; ?>" readonly></td>
				</tr>
				<tr><td>Tanggal</td>
					<td><input type="text" class="col-md-8 form-control date-picker form-control-sm" name="tglst" value="<?php echo $data['tanggal']; ?>" readonly></td>
				</tr>
				<tr><td>Tempat</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="tempat" value="<?php echo $data['tempat']; ?>" readonly></td>
				</tr>
				<tr><td>Agenda</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="agenda" value="<?php echo $data['agenda']; ?>" readonly></td>
				</tr>			
				<tr><td>Waktu Kegiatan</td>
					<td><input type="text" class="col-md-8 form-control form-control-sm" value="<?php echo $data['awal']; ?>" readonly></td>
				</tr>
			</table>
				<br>
				  <div class="text-center">
					<a href="?module=kegiatan" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Kembali
                    </a>
                  </div>
				<br>
                      <!-- checkbox -->
            <div class="form-group">
			  <table id="example2" class="table table-bordered table-hover form-control-sm">
					<th>No.</th><th>Nama </th><th>NIP</th><th>Aksi</th>	
						<?php
							$query2 = "select x.id_peg id_pegawai, x.nip18, x.nama, x.id_sie, y.* from pegawai x left join (SELECT a.id_pegst id_tugas, a.id_peg, b.id_st, nomor, tanggal, awal, akhir, tempat, agenda FROM pegawai_tugas a, surat_tugas b where a.id_st = b.id_st and a.id_st='$id') y on x.id_peg = y.id_peg where nip18 !='' order by id_tugas desc, id_sie, nama";
							$run2 = mysqli_query($konek,$query2);
							$no = 1;
					while($data2=mysqli_fetch_array($run2))
					{
				?>				
				<form role="form" action="module/st/proses_input3.php" method="post">
					<tr><td>
						<input type="hidden" name="idpeg" value="<?php echo $data2['id_pegawai']; ?>">
						<input type="hidden" name="idst" value="<?php echo $data['id_st']; ?>">
						<input type="hidden" name="nama" value="<?php echo $data2['nama']; ?>">
						<input type="hidden" name="nip18" value="<?php echo $data2['nip18']; ?>">
						<input type="hidden" name="seksi" value="<?php echo $data2['id_sie']; ?>">
						<?php echo $no; ?></td>
						<td><?php echo $data2['nama']?></td>
						<td><?php echo $data2['nip18']?></td>
						<td>
				<?php
					if($data2['id_tugas'] != '')
					{
				?>
						<a href="#"><img src="img/cek.png" height="20" width="20"  class="text-right"></td>
				<?php
					}
					else
					{
				?>
						<button type="submit" title="Tambahkan" onclick="myFunction_1()" ><img src="img/add.png" height="20" width="20"></td>
				<?php
					}
				?>
				</tr>
				</form>
				<?php
				$no++;
					}
				?>
            </div>
                <!-- /.card-body -->
				
			</table>
				</div>
			</div>
            </div>
            <!-- /.card -->
			
	 <?php
		  if($_GET['ket'] == "simpan")
		  {
		?> 
          <div class="col-md-12">
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
					<td><input type="text" class="col-md-8 form-control form-control-sm" name="tglst" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask></td>
				</tr>
				<tr><td>Tempat</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="tempat" placeholder="Tempat" required></td>
				</tr>
				<tr><td>Agenda</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="agenda" placeholder="Agenda" required></td>
				</tr>			
				<tr><td>Waktu Kegiatan</td>
					<td><input type="text" class="col-md-8 form-control form-control-sm" id="wkt_keg" name="wkt_keg"></td>
				</tr>
			</table>
                <!-- /.card-body -->
				<br>
				  <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
					<a href="?module=surat_tugas" class="btn btn-sm btn-danger">
                      Batal
                    </a>
                  </div>
			</form>
				</div>
			</div>
			</div>
		<?php
		  }
		  ?>
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

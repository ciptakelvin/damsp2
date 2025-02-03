
<script>
function myFunction() {
  confirm("Apakah Anda Yakin Akan Memvalidasi RKI ini ?");
}

function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Batal Memvalidasi RKI ini ?");
}
</script>
<?php
$id_rkipeg = $_GET['id'];
$query = "SELECT a.*, b.uraian, c.nama FROM rki_pegawai a, uraian_rko b, pegawai c where a.id_uraian = b.id_uraian and a.pic = c.id_peg and a.id_rkipeg='$id_rkipeg' and a.status ='1'";
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
                <h3 class="card-title">RKI Pelaksana <?php echo $data['nama']; ?></h3>
              </div>
			  <div class="card-body ">
				<div class="card bg-light">
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-10">
                      <h2 class="lead"><b><?php echo $data['judul'];?></b></h2>
					  <table class="form-control-sm">
						<tr><th>RKO</th><td>:  <?php echo $data['uraian'];?> </td></tr>
						<tr><th>RKI</th><td>: <?php echo $data['kegiatan'];?></td></tr>
						<tr><th>Target</th><td>: <?php echo $data['volume']." ".$data['satuan'];?></td></tr>
						<tr><th>Realisasi</th><td>: <?php $query3 ="select count(*) jml from realisasi_rki where id_keg ='$id_rkipeg'"; 
									$run3 = mysqli_query($konek,$query3);
									$data3 = mysqli_fetch_array($run3);
									echo $data3['jml']." ".$data['satuan'];?></td></tr>
					  </table>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-left">
					<a href="?module=view_rpelaksana&id=<?php echo $data['pic']; ?>" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Kembali
                    </a>
                  </div>
                </div>
              </div>
                      <!-- checkbox -->
            <div class="form-group">
			  <table id="example2" class="table table-bordered table-hover form-control-sm">
					<th>No.</th><th>Kegiatan </th><th>Volume</th><th>Tanggal</th><th>Validasi</th>	
						<?php
							$query2 = "select * from realisasi_rki where id_keg ='$id_rkipeg'";
							$run2 = mysqli_query($konek,$query2);
							$no = 1;
					while($data2=mysqli_fetch_array($run2))
					{
						if($data2['val'] == 1)
						{
							?>
							<form role="form" action="module/r_pelaksana/proses2.php" method="post">
							<?php
						}
						else
						{
							?>
							<form role="form" action="module/r_pelaksana/proses.php" method="post">
							<?php
						}
				?>				
					<tr><td>
						<input type="hidden" name="idrealisasi" value="<?php echo $data2['id_realisasi']; ?>">
						<input type="hidden" name="idpeg" value="<?php echo $data2['id_peg']; ?>">
						<input type="hidden" name="idkeg" value="<?php echo $data2['id_keg']; ?>">
						<input type="hidden" name="iduraian" value="<?php echo $data2['id_uraian']; ?>">
						<input type="hidden" name="idrko" value="<?php echo $data2['id_rko']; ?>">
						<?php echo $no; ?></td>
						<td><?php echo $data2['nama_realisasi']?></td>
						<td><?php echo $data2['volume']?></td>
						<td><?php echo $data2['tanggal']?></td>
						<td>
				<?php
					if($data2['val'] == 1)
					{
				?>
						<button type="submit" title="Batal" onclick="myFunction_1()" class="btn-danger"><img src="img/del.png" height="20" width="20"></td>
				<?php
					}
					else
					{
				?>
						<button type="submit" title="Validasi" onclick="myFunction()" class="btn-success"><img src="img/add.png" height="20" width="20"></td>
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

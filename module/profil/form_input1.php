<script>
function myFunction_1() {
  confirm("Tambahkan Uraian ini ?");
}
</script>
<?php
$query = "select x.*, y.id_rki, id_peg, y.status from (select a.id_rko, a.id_sie, a.judul, b.id_uraian,b.uraian, b.pic from jdl_rko a, uraian_rko b where a.id_sie = '$seksi' and a.id_rko = b.id_rko) x left JOIN uraian_rki y on x.id_uraian = y.id_uraian and id_peg='$id_peg' and y.status !='0'";
$run = mysqli_query($konek,$query);


?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
				
            <div class="card card-primary">
			<div class="card-header">
                <h3 class="card-title">Form input RKI Pegawai </h3>
              </div>
			  <div class="card-body ">
				<div class="text-left">
					<a href="?module=profil" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Kembali
                    </a>
                  </div>
					<br>
              <!-- /.card-header -->
              <!-- form start -->
			     <table id="example2" class="table table-bordered table-hover form-control-sm">
					<th>No.</th><th>Rencana Kerja Seksi</th><th>Uraian Kegiatan</th><th>Aksi</th>
				<?php
				$no = 1;
					while($data=mysqli_fetch_array($run))
					{
				?>
					
				<form role="form" action="module/profil/proses_input1.php" method="post">
					<tr><td>
						<input type="hidden" name="idrko" value="<?php echo $data['id_rko']; ?>">
						<input type="hidden" name="iduraian" value="<?php echo $data['id_uraian']; ?>">
						<input type="hidden" name="pic" value="<?php echo $data['pic']; ?>">
						<input type="hidden" name="peg" value="<?php echo $id_peg; ?>">
						<?php echo $no; ?></td>
						<td><?php echo $data['judul']?></td><td><?php echo $data['uraian']?></td>
						<td>
				<?php
					if($data['id_rki'] != '' && $data['status'] == '1')
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
				</table>
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

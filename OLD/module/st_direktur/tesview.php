
<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus Data Pegawai ?");
}
</script>
<?php
$id_st = $_GET['id'];
$query = "select *from surat_tugas_direktur where id_st='$id_st'";
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
                <h3 class="card-title"><h3 class="card-title">Surat Tugas Direktur</h3>
              </div>
			  <div class="card-body">
			  
              <!-- /.card-header -->
              <!-- form start -->
			  
             <form role="form" action="module/st_direktur/proses_edit.php" method="post">
						<input type="hidden" name="idst" value="<?php echo $data['id_st']; ?>">

			  <table class="col-md-12 form-control-sm">
			  <input type="hidden" name ="idst" value="<?php echo $id_st; ?>">
				<tr><td>No. Surat Tugas</td><td><input value="<?php echo $data['nomor']; ?>" class="col-md-8 form-control form-control-sm" type="text" name="nost"></td><td></td></tr>
				<tr><td>Tanggal</td><td><input value="<?php echo $data['tanggal']; ?>" class="col-md-8 form-control form-control-sm" type="date" name="tanggal"></td><td></td></tr>
				<tr><td>Agenda</td><td><input  value="<?php echo $data['agenda']; ?>"  class="col-md-8 form-control form-control-sm" type="text" name="agenda"></td><td></td></tr>
				<tr><td>Tempat</td><td><input  value="<?php echo $data['tempat']; ?>"  class="col-md-8 form-control form-control-sm" type="text" name="tempat"></td><td></td></tr>		
				<tr><td>Tanggal Kegiatan Mulai</td><td><input value="<?php echo $data['awal']; ?>" class="col-md-6 form-control form-control-sm" type="date" name="waktu"></td></tr>
				<tr><td>Tanggal Kegiatan Selesai</td><td><input value="<?php echo $data['akhir']; ?>" class="col-md-6 form-control form-control-sm" type="date" name="waktu2"></td></tr>
				<tr><td>Sifat</td>
					<td><select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="sifat">
              <option name="sifat"><?php echo $data2['sifat']; ?></option>
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
          	</td>
      		</tr>
			  </table>
			  <br>
				  <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Update</button>
					<a href="?module=jadwal_direktur" class="btn btn-sm btn-danger">
                      Batal
                    </a>
                  </div>
              </form>
			  <br>
			  <table id="example2" class="table table-bordered table-hover form-control-sm">
					<th>No.</th><th>Nama </th><th>NIP</th><th>Aksi</th>	
						<?php
							$query2 = "select x.id_peg id_pegawai, x.nip18, x.nama, x.id_sie, y.* from pegawai x left join (SELECT b.id_pegst_dir id_tugas, b.id_peg, a.id_st, nomor, tanggal, awal, akhir, tempat, agenda FROM surat_tugas_direktur a, pegawai_tugas_direktur  b where a.id_st = b.id_st_dir and a.id_st = '$id_st') y on x.id_peg = y.id_peg where nip18 !='' order by id_tugas desc, id_sie, nama";
							$run2 = mysqli_query($konek,$query2);
							$no = 1;
					while($data2=mysqli_fetch_array($run2))
					{
				?>				
				<form role="form" action="module/st_direktur/proses_input4.php" method="post">
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
						<a title="Hapus" href="?module=del_peg_direktur&idst=<?php echo $data['id_st'];?>&idtgs=<?php echo $data2['id_tugas']; ?>"><button type="submit" title="Hapus" class="btn-danger" onclick="myFunction_1()" ><img src="img/del.png" height="20" width="20"></a>
				<?php
					}
					else
					{
				?>
						<button type="submit" class="btn-success" title="Tambahkan" ><img src="img/add.png" height="20" width="20"></td>
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

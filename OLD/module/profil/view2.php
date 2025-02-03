<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus kegiatan RKI ini ?");
}
function myFunction_2() {
  confirm("Apakah Anda Yakin kegiatan ini selesai ?");
}
</script>
<?php
$id_uraian = $_GET['uraian'];
$id_rki = $_GET['id'];
$query = "select a.id_rki, a.id_rko, a.pic, a.id_peg, b.*, c.seksi nm_seksi from uraian_rki a, uraian_rko b, id_seksi c where a.id_uraian = b.id_uraian and a.id_rki = '$id_rki' and b.id_sie = c.id_sie ";
$run = mysqli_query($konek,$query);
$data = mysqli_fetch_array($run);

$query2 = "select a.id_rki, a.id_rko, a.pic, a.id_peg, b.*, c.seksi nm_seksi from uraian_rki a, uraian_rko b, id_seksi c where a.id_uraian = b.id_uraian and a.id_rki = '$id_rki' and b.id_sie = c.id_sie and id_peg='$id_peg'";
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
                <h3 class="card-title">RKI <?php echo $nama; ?></h3>
              </div>
              <div class="card-body">
               <div class="card bg-light">
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-10">
                      <h2 class="lead"><b><?php echo $data['uraian'];?></b></h2>
					  <?php echo $data['nm_seksi'];?>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-left">
					<a href="?module=profil" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Kembali
                    </a>
                    <a href="?module=keg_rki&id=<?php echo $data['id_rki']; ?>" class="btn btn-sm btn-success">
                      Tambah Target
                    </a>
                  </div>
                </div>
              </div>
			  <table id="example1" class="table table-bordered table-striped form-control-sm">
				<tr><th>No</th>
					<th>Uraian Kegiatan RKI</th>
					<th>Volume</th>
					<th>Jangka Waktu</th>
					<th>Indikator</th>
					<th>Realisasi</th>
					<th>Ket</th>
					<th>Menu</th>
				</tr>
			  <?php
			  $query3 = "select * from rki_pegawai where id_rki='$id_rki' and status='1'";
			  $run3 = mysqli_query($konek,$query3);
			  $no=1;
			  while($data3=mysqli_fetch_array($run3))
			  {
			  ?>
			  	<tr><td><?php  echo $no;?></td>
					<td><?php  echo $data3['kegiatan'];?></td>
					<td><?php  echo $data3['volume']." ".$data3['satuan'];?></td>
					<td><?php  echo $data3['jgk_waktu']." ".$data3['waktu'];?></td>
					<td><?php  echo $data3['ind'];?></td>
				<?php
				$id_rkipeg = $data3['id_rkipeg'];
				// echo $id_rkipeg
					$query4 = "select count(id_realisasi) jml_real from realisasi_rki where id_keg ='$id_rkipeg' and val='1' and status ='1'";
					$run4 = mysqli_query($konek,$query4);
					$data4 = mysqli_fetch_array($run4);
				?>
					<td><?php  echo $data4['jml_real'];?></td>
					<td><?php  if($data3['validasi'] == 0){ echo "Belum Validasi"; } else { echo "Sudah Validasi";} ?></td>
					<td>
						<?php if($data3['validasi']== 1 ) { ?>					
						<a title="isi_realisasi" href="?module=isi&idkeg=<?php echo $data3['id_rkipeg'];?>&uraian=<?php echo $data3['id_uraian']; ?>">
							<img src="img/edit.png" height="20" width="20">
						</a>
						<?php
						}
						?>
						<a title="hapus" onclick="myFunction_1()" href="?module=del_keg&id=<?php echo $data3['id_rkipeg'];?>&uraian=<?php echo $data3['id_uraian']; ?>">
							<img src="img/del.png" width="20" height="20">
						</a>
					</td>
				</tr>
			  <?php
			  $no++;
			  }
			  ?>
				
			  </table>
              </div>
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
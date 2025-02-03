<link rel="stylesheet" href="css/fullcalendar.css"/>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<?php
                    $ket = $_GET['ket'];
                    if($ket == "surat_tugas")
                    {
                ?><div class="col-sm-12">
                    <a href="#" class="btn btn-sm btn-success">
                      Perubahan profil sukses disimpan
                    </a>
                </div>
                <br>
                <?php
                    }
                    else if($ket == "gagal")
                    {
                ?>
                <div class="col-sm-12">
                    <a href="#" class="btn btn-sm btn-danger">
                      Data Gagal Disimpan !!! pada tanggal tersebut ruangan sudah dipinjam harap reschedule 
                    </a>
                </div>
                <br>
                <?php
                }
                ?>
    <section class="content">
     <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
			   <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#st_rik" data-toggle="tab">Input Peminjaman Ruangan</a></li>
                </ul>
              </div>
               <div class="card-body">
                <div class="tab-content">
                <div class="active tab-pane" id="input">
                <div class="card-body p-0">

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/booking_ruang/proses.php"  enctype="multipart/form-data"  method="post">
			<table class="col-md-12 form-control-sm">
                    <?php
                    include("conn.php");
                    @session_start();
                    $ses_id = $_SESSION['id'];
                    $user = $_SESSION['nip9'];

                    if(($ses_id == '') && ($user == '')) 
                    {
                      header("Location:index.php");
                    }
                    $user1=$_SESSION['user'];
                    $query = "select a.id_sie, b.subdit, b.id_subdit from pegawai a, id_seksi b where a.id_sie = b.id_sie and nip9 = '$user'";
                    $run =mysqli_query($konek,$query);
                    $data=mysqli_fetch_array($run);
                    $seksi= $data['id_sie'];
                    $subdit= $data['subdit'];
                    $id_subdit= $data['id_subdit'];
                    ?>
        <input type="hidden" name="seksi" value="<?php echo $seksi; ?>"> 
        <input type="hidden" name="user" value="<?php echo $user; ?>"> 
            <tr><td>Tempat</td>
          <td><select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="tempat"  onchange="showPilihan1(this.value)">
            <option value="">--Pilih Ruangan--</option>
			<?php
				$kueri_ruang = "select * from kapasitas_ruang";
				$run_kk =mysqli_query($konek,$kueri_ruang);
                
				while($data_kantor=mysqli_fetch_array($run_kk)){
			?>
				<option value='<?php echo $data_kantor['id']; ?>'><?php echo $data_kantor['nama_ruang']; ?></option>
			<?php
				}
			?>
            </select></td><tr>
			<td></td><td id="txtHint"></td></tr>
            </tr>
            <tr><td>Tanggal Mulai</td>
            <td><input class="col-md-6 form-control form-control-sm" type="text" id="datetime" name="mulai" placeholder="Input Tanggal Mulai" ></td>
            </tr>
            <tr><td>Tanggal Selesai</td>
            <td><input id="datetime2" class="col-md-6 form-control form-control-sm" type="text" name="selesai" placeholder="Input Tanggal Selesai" ></td>
            </tr>
            <tr><td>Agenda</td>
            <td><input id="input_mask" class="col-md-6 form-control form-control-sm" type="text" name="agenda" placeholder="Input Agenda" ></td>
            </tr>
            <tr><td>Subdit/Kelompok</td>
            <td>
            <select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="subdit" required>
            <option value="">--Pilih Subdit--</option>
            <option value="<?php echo $id_subdit; ?>"><?php echo $subdit; ?></option>
            </select></td>
            </tr>
            <tr><td>Jumlah Peserta</td>
            <td><input class="col-md-6 form-control form-control-sm" type="number" id="peserta" name="peserta" required></td>
            </tr>
            <tr><td>Peminjam</td>
            <td><input class="col-md-6 form-control form-control-sm" type="text" id="peminjam" name="peminjam" placeholder="Input Nama Peminjam" required></td>
            </tr>
			<tr><td>Permintaan Khusus</td>
            <td><input class="col-md-6 form-control form-control-sm" type="text" id="keterangan" name="keterangan" placeholder="Input Permintaan Khusus"></td>
            </tr>
			</table>
                <!-- /.card-body -->
				<br>
				  <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
					<a href="?module=booking_ruang" class="btn btn-sm btn-danger">
                      Batal
                    </a>
                  </div>
			
				</div>
			</div>
    </form>
            
        </div>
            </div>
    </div>
</div>
            <!-- /.card -->
          </div>
        </div>
    </section>
    
<script>
$("#datetime").datetimepicker();
$("#datetime2").datetimepicker();
</script>
<script type="text/javascript">
//Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy HH:mm:ss', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
    //Date range picker
    $('#wkt_keg').daterangepicker()
</script>

</body>
</html>

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
include("conn.php");
$id_st = $_GET['id'];
$query = "select a.*,b.nama_ruang,b.kapasitas from booking_ruang a LEFT JOIN kapasitas_ruang b on a.tempat = b.id where a.id='$id_st'";
$run = mysqli_query($konek,$query);
$data = mysqli_fetch_array($run);
?>
<script src="js/jquery.min.inputmask.js"></script>
<script src="js/jquery.min.inputmaskbundle.js"></script>
<?php

                    @session_start();
                    $ses_id = $_SESSION['id'];
                    $user = $_SESSION['nip9'];
?>
    <?php
                    $id_st = $_GET['id'];
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
                    <a href="?module=edit_data_st&id=<?php echo $data['id']?>" class="btn btn-sm btn-danger">
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
                  <li class="nav-item"><a class="nav-link active" href="#input" data-toggle="tab" style="font-weight:bold">Edit Peminjaman Ruangan</a></li>
                </ul>
              </div>
               <div class="card-body">
                <div class="tab-content">
                <div class="active tab-pane" id="input">
                <div class="card-body p-0">

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/booking_ruang/proses_edit.php" method="post" enctype="multipart/form-data">
			<table class="col-md-12 form-control-sm">
            <input type="hidden" name="id" value="<?php echo $id_st; ?>">
            <input type="hidden" name="user" value="<?php echo $user; ?>">
            <tr><td>Tempat</td>
            <td><select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="tempat" onchange="showPilihan1(this.value)">
            <option value='<?php echo $data['tempat']; ?>'><?php echo $data['nama_ruang']?></option>
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
            </select></td>
            </tr>
			<td></td><td id="txtHint"></td></tr>
            <tr><td>Tanggal Mulai</td>
            <td><input id="datetime" class="col-md-6 form-control form-control-sm" value="<?php echo $data['tanggal_mulai']?>" type="text" name="mulai" placeholder="Input Tanggal Mulai" ></td>
            </tr>
            <tr><td>Tanggal Selesai</td>
            <td><input id="datetime2" class="col-md-6 form-control form-control-sm" value="<?php echo $data['tanggal_selesai']?>" type="text" name="selesai" placeholder="Input Tanggal Selesai" ></td>
            </tr>
            <tr><td>Agenda</td>
            <td><input class="col-md-6 form-control form-control-sm" value="<?php echo $data['agenda']?>" type="text" name="agenda" placeholder="Input Agenda" ></td>
            </tr>
            <tr><td>Subdit/Kelompok</td>
            <td>
            <select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="subdit">
            <?php
                include("conn.php");
                $sql2="select * from booking_ruang a, id_seksi b where a.subdit=b.id_sie and id='$id_st'";
                $hasil2=mysqli_query($konek,$sql2);
                ?>
                <?php
                while($data2=mysqli_fetch_array($hasil2)){
                ?>
                <option value="<?php echo $data['subdit']?>"><?php echo $data2['subdit']; ?></option>
                <?php
                }
                ?>
            <?php if($data['subdit']!=22){ ?><option value="22">Direktur</option> <?php } ?>
            <?php if($data['subdit']!=4){ ?><option value="4">SubDirektorat Perencanaan Pemeriksaan</option> <?php } ?>
            <?php if($data['subdit']!=7){ ?><option value="7">SubDirektorat Teknik dan Pengendalian Pemeriksaan</option> <?php } ?>
            <?php if($data['subdit']!=10){ ?><option value="10">SubDirektorat Pemeriksaan Transaksi Khusus</option> <?php } ?>
            <?php if($data['subdit']!=1){ ?><option value="1">SubDirektorat Kerjasama dan Dukungan Pemeriksaan</option> <?php } ?>
            <?php if($data['subdit']!=12){ ?><option value="12">SubDirektorat Penagihan</option> <?php } ?>
<!-- 
            <option value="4">SubDirektorat Perencanaan Pemeriksaan</option>
            <option value="7">SubDirektorat Teknik dan Pengendalian Pemeriksaan</option>
            <option value="10">SubDirektorat Pemeriksaan Transaksi Khusus</option>
            <option value="1">SubDirektorat Kerjasama dan Dukungan Pemeriksaan</option>
            <option value="13">SubDirektorat Penagihan</option> -->
            </select></td>
            </tr>
            <tr><td>Jumlah Peserta</td>
            <td><input class="col-md-6 form-control form-control-sm" value="<?php echo $data['peserta']?>" type="number" id="peserta" name="peserta" required></td>
            </tr>
			<tr><td>Permintaan Khusus</td>
            <td><input class="col-md-6 form-control form-control-sm" value="<?php echo $data['keterangan']?>" type="text" name="keterangan" placeholder="Input Permintaan Khusus" ></td>
            </tr>
            <tr><td>Peminjam</td>
            <td><input class="col-md-6 form-control form-control-sm" value="<?php echo $data['peminjam']?>" type="text" name="peminjam" placeholder="Input Nama Peminjam" ></td>
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
              </form>
				</div>
            </div>
		</div>    
    </div>
</div>
</div>
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

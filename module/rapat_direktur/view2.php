<head>
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
<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus Data Pegawai ?");
}
</script>
</head>
<?php
$id_rp = $_GET['id'];
$query = "select * from events where id='$id_rp'";
$run = mysqli_query($konek,$query);
$data = mysqli_fetch_array($run);
$subdit = $data['subdit'];
?>
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
                      Data Gagal Disimpan !!! pada tanggal tersebut ada kegiatan lainnya.. harap reschedule 
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><h3 class="card-title">Kegiatan Agenda Pejabat</h3>
              </div>
			  <div class="card-body">
			  
              <!-- /.card-header -->
              <!-- form start -->
			  
              <form role="form" action="module/rapat_direktur/proses_edit.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id_rp; ?>">
			  <table class="col-md-12 form-control-sm">
			  <input type="hidden" name ="idst" value="<?php echo $id_st; ?>">
        <tr><td>No Surat</td><td><input  value="<?php echo $data['no_surat']; ?>"  class="col-md-8 form-control form-control-sm" type="text" name="no_surat"></td><td></td></tr>   
        <tr><td>Tanggal Surat</td><td><input  value="<?php echo $data['tanggal_surat']; ?>"  class="col-md-8 form-control form-control-sm" type="date" name="tanggal_surat"></td><td></td></tr>   
				<tr><td>Agenda</td><td><input  value="<?php echo $data['title']; ?>"  class="col-md-8 form-control form-control-sm" type="text" name="agenda"></td><td></td></tr>		
				<tr><td>Tempat</td>
            <td><select class="col-md-6 form-control form-control-sm select2bs4" style="width: 50%;" name="tempat" id="tempat">
			<option value="<?php echo $data['tempat']; ?>" ><?php echo $data['tempat']; ?></option>
			<option value='Lainnya'>Lainnya</option>
			<?php
				$kueri_kantor = "select * from tb_kantor where status ='1'";
				$run_kk =mysqli_query($konek,$kueri_kantor);
                
				while($data_kantor=mysqli_fetch_array($run_kk)){
			?>
				<option value='<?php echo $data_kantor['nama_kantor']; ?>'><?php echo $data_kantor['nama_kantor']; ?></option>
			<?php
				}
			?>
            </td></tr>
			<tr><td></td>
          <td><input class="col-md-6 form-control form-control-sm" id="input_mask3"  type="text" name="nama_tempat" value="<?php echo $data['tempat_lainnya']; ?>" placeholder="Isi jika Lainnya" ></td>
            </tr>
			<tr><td>Tanggal / Waktu Mulai</td><td><input id="datetime" value="<?php echo $data['start_event']; ?>" class="col-md-8 form-control form-control-sm" type="text" name="start_event" ></td></tr>
				<tr><td>Tanggal / Waktu Selesai</td><td><input  id="datetime2" value="<?php echo $data['end_event']; ?>" class="col-md-8 form-control form-control-sm" type="text" name="end_event" ></td></tr>
        <tr><td>PIC</td>
                <td>
                <?php
                if($subdit == 'Direktur'){$sql3="select * from id_seksi where id_sie != '0' order by seksi asc";}else{$sql3="select * from id_seksi where id_sie != '0' and subdit='$subdit' order by seksi asc";}
                $hasil3=mysqli_query($konek,$sql3);
                ?>
                <?php
                while($data3=mysqli_fetch_array($hasil3)){
				if($data3['id_sie'] == '1'){$dispo = $data['sie1'];}		
				if($data3['id_sie'] == '2'){$dispo = $data['sie2'];}		
				if($data3['id_sie'] == '3'){$dispo = $data['sie3'];}		
				if($data3['id_sie'] == '4'){$dispo = $data['sie4'];}		
				if($data3['id_sie'] == '5'){$dispo = $data['sie5'];}		
				if($data3['id_sie'] == '6'){$dispo = $data['sie6'];}		
				if($data3['id_sie'] == '7'){$dispo = $data['sie7'];}		
				if($data3['id_sie'] == '8'){$dispo = $data['sie8'];}		
				if($data3['id_sie'] == '9'){$dispo = $data['sie9'];}		
				if($data3['id_sie'] == '10'){$dispo = $data['sie10'];}	
				if($data3['id_sie'] == '11'){$dispo = $data['sie11'];}		
				if($data3['id_sie'] == '12'){$dispo = $data['sie12'];}		
				if($data3['id_sie'] == '13'){$dispo = $data['sie13'];}		
				if($data3['id_sie'] == '14'){$dispo = $data['sie14'];}		
				if($data3['id_sie'] == '15'){$dispo = $data['sie15'];}		
				if($data3['id_sie'] == '16'){$dispo = $data['sie16'];}		
				if($data3['id_sie'] == '17'){$dispo = $data['sie17'];}		
				if($data3['id_sie'] == '18'){$dispo = $data['sie18'];}		
				if($data3['id_sie'] == '19'){$dispo = $data['sie19'];}		
				if($data3['id_sie'] == '20'){$dispo = $data['sie20'];}	
				if($data3['id_sie'] == '21'){$dispo = $data['sie21'];}		
				if($data3['id_sie'] == '22'){$dispo = $data['sie22'];}		
				if($data3['id_sie'] == '23'){$dispo = $data['sie23'];}	
				?>
                <input type="checkbox" id="sie<?php echo $data3['id_sie'];?>" name="sie<?php echo $data3['id_sie'];?>" value="1" <?php if($dispo == '1') { echo "checked"; }?> >
				<label> <?php echo $data3['seksi']; ?> </label><br>	
				<?php
                }
                ?></td></tr>
				<tr><td>Sifat</td><td><select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="sifat">
              	<option><?php echo $data['sifat']?></option>
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
                ?></select></td>
				<tr><td>Keterangan</td>
				<td><textarea class="col-md-8 form-control form-control-sm" type="text" name="keterangan" placeholder="Keterangan" required><?php echo $data['keterangan']?></textarea></td>
				</tr>
				<tr><td>Nomor LHR</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="lhr" placeholder="Input LHR" value="<?php echo $data['lhr']; ?>" required></td>
				</tr>
				<tr><td>Upload File Undangan</td>
					<td><input class="col-md-8 form-control form-control-sm" type="file" name="upload_und" placeholder="Input LHR" value="<?php echo $data['file_und']; ?>" id="fileToUpload" accept="application/pdf"></td>
				</tr>
				<tr><td>Upload Bahan Rapat</td>
					<td><input class="col-md-8 form-control form-control-sm" type="file" name="upload_rapat" placeholder="Input LHR" value="<?php echo $data['file_rapat']; ?>" id="fileToUpload" accept="application/pdf"></td>
				</tr>
				<tr><td>Upload LHR</td>
					<td><input class="col-md-8 form-control form-control-sm" type="file" name="upload_lhr" placeholder="Input LHR" value="<?php echo $data['file_lhr']; ?>" id="fileToUpload" accept="application/pdf"></td>
				</tr>
				
			  </table>
			  <br>
			  <?php
				$ket = $_GET['ket'];
				if($ket=='ubah')
				{
				?>
					<div class="text-center">
                    <button class="btn btn-sm btn-primary">Berhasil Disimpan</button>
					<a href="?module=jadwal_direktur" class="btn btn-sm btn-secondary">
                      Kembali
                    </a>
                  </div>
			<?php	
				}
				else
				{
			?>
				  <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Update</button>
					<a href="?module=jadwal_direktur" class="btn btn-sm btn-danger">
                      Batal
                    </a>
                  </div>
              </form>
				<?php
				}
			  ?>
			  <br>
			  </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
    
<!-- Select2 -->
<script>
$("#datetime").datetimepicker();
$("#datetime2").datetimepicker();
</script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
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
<script type="text/javascript">
 $(document).ready(function() {
     $('#tempat').select2();
 });
  $(document).ready(function() {
     $('#tempat2').select2();
 });
</script>
</body>
</html>

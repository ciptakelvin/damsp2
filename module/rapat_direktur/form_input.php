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
	$("#datetime").datetimepicker();
</script>
</head>
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
                <h3 class="card-title">Form Agenda Pejabat</h3>
              </div>
			  <div class="card-body ">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/rapat_direktur/proses.php" method="post">
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
        $query = "select subdit from pegawai, id_seksi where nip9 = '$user' and pegawai.id_sie=id_seksi.id_sie";
        $run =mysqli_query($konek,$query);
        $data=mysqli_fetch_array($run);
        $subdit= $data['subdit'];
        ?>
        <input type="hidden" name="subdit" value="<?php echo $subdit; ?>"> 
        <tr><td>No Surat</td>
          <td><input class="col-md-8 form-control form-control-sm" type="text" name="no_surat" placeholder="Input No Surat" autocomplete="off" required></td>
        </tr>
        <tr><td>Tanggal Surat</td>
          <td><input class="col-md-8 form-control form-control-sm" type="date" style="width: 20%;" name="tanggal_surat" placeholder="Input Tanggal Surat" autocomplete="off" required></td>
        </tr>
				<tr><td>Agenda</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="agenda" placeholder="Input Agenda" autocomplete="off" required></td>
				</tr>
				<tr><td>Tanggal / Waktu Mulai</td>
					<td><input id="datetime" class="col-md-8 form-control form-control-sm" type="text" name="start_event" placeholder="Waktu Mulai Agenda" autocomplete="off" required></td>
				</tr>
				<tr><td>Tanggal / Waktu Selesai</td>
					<td><input id="datetime2" class="col-md-8 form-control form-control-sm" type="text" name="end_event" placeholder="Waktu Selesai Agenda"  autocomplete="off"></td>
				</tr>
				<tr><td>Tempat</td>
            <td><select class="col-md-6 form-control form-control-sm select2bs4" style="width: 50%;" name="tempat" id="tempat" autocomplete="off">
			<option value=''>--Pilih Tempat--</option>
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
          <td><input class="col-md-6 form-control form-control-sm" id="input_mask3"  type="text" name="nama_tempat" placeholder="Isi jika Lainnya" ></td>
            </tr>
        <tr><td>PIC</td>
          <td>
                <?php
                if($subdit == 'Direktur'){$sql3="select * from id_seksi where id_sie != '0' order by seksi asc";}else{$sql3="select * from id_seksi where id_sie != '0' and subdit='$subdit' order by seksi asc";}
                $hasil3=mysqli_query($konek,$sql3);
                ?>
                <?php
                while($data3=mysqli_fetch_array($hasil3)){
                ?>
				<input type="checkbox" id="sie<?php echo $data3['id_sie'];?>" name="sie<?php echo $data3['id_sie'];?>" value="1">
				<label> <?php echo $data3['seksi']; ?></label><br>
                <?php
                }
                ?>
                </select></td>
        </tr>
				<tr><td>Sifat</td>
					<td><select class="col-md-6 form-control form-control-sm select2bs4" style="width: 50%;" name="sifat"  id="dispo2">
              	<option value='0'>--Sifat--</option>
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
                </select></td></tr>
				<tr><td>Keterangan</td>
          <td><textarea class="col-md-8 form-control form-control-sm" type="text" name="keterangan" placeholder="Keterangan" required></textarea></td>
        </tr>
		<tr><td>Nomor LHR</td>
					<td><input class="col-md-8 form-control form-control-sm" type="text" name="lhr" placeholder="Input LHR" required></td>
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
<script type="text/javascript">
 $(document).ready(function() {
     $('#tempat').select2();
 });
</script>
</body>
</html>

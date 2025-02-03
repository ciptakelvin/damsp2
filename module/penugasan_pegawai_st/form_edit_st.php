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
</head>
<?php
include("conn.php");
$id_st = $_GET['id'];
$query = "select * from events_pegawai_p2 where id='$id_st'";
$run = mysqli_query($konek,$query);
$data = mysqli_fetch_array($run);
?>
<script src="js/jquery.min.inputmask.js"></script>
<script src="js/jquery.min.inputmaskbundle.js"></script>
<?php
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
                      Data Gagal Disimpan !!! pada tanggal tersebut ada ST pada tempat yg sama  harap reschedule 
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
                  <li class="nav-item"><a class="nav-link active" href="#input" data-toggle="tab" style="font-weight:bold">Edit Data Surat Tugas</a></li>
                </ul>
              </div>
               <div class="card-body">
                <div class="tab-content">
                <div class="active tab-pane" id="input">
                <div class="card-body p-0">

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/penugasan_pegawai_st/proses_edit.php" method="post" enctype="multipart/form-data">
			<table class="col-md-12 form-control-sm">
            <input type="hidden" name="id" value="<?php echo $id_st; ?>">
            <tr><td>No Surat Tugas</td>
            <td><input class="col-md-6 form-control form-control-sm" id="input_mask3" value="<?php echo $data['no_surat']?>" type="text" name="nost" placeholder="Input Surat Tugas" ></td>
            </tr>
            <tr><td>Tanggal Surat Tugas</td>
            <td><input class="col-md-6 form-control form-control-sm" value="<?php echo $data['tanggal_surat']?>" type="date" name="tgl_st" placeholder="Input tanggal ST" ></td>
            </tr>
            <tr><td>Jenis ST</td>
            <td><input class="col-md-6 form-control form-control-sm" value="<?php echo $data['jenis_st']?>" type="text" name="jns_st" placeholder="Input Agenda" readonly></td>
            <tr><td>Agenda</td>
            <td><input class="col-md-6 form-control form-control-sm" value="<?php echo $data['agenda']?>" type="text" name="agenda" placeholder="Input Agenda" ></td>
            </tr>
            <tr><td>Tempat</td>
            <td><select class="col-md-6 form-control form-control-sm select2bs4" style="width: 50%;" name="tempat" id="tempat">
			<option><?php echo $data['tempat']?></option>
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
          <td><input class="col-md-6 form-control form-control-sm" id="input_mask3"  type="text" name="nama_tempat" placeholder="Isi jika Lainnya" value="<?php echo $data['tempat_lainnya']?>"></td>
            </tr>
            <tr><td>Tanggal Mulai Kegiatan</td>
            <td><input id="datetime" class="col-md-6 form-control form-control-sm" type="text" name="mulai" placeholder="Input Tanggal Mulai" value="<?php echo $data['mulai']?>" ></td>
            </tr>
            <tr><td>Tanggal Selesai Kegiatan</td>
            <td><input id="datetime2" class="col-md-6 form-control form-control-sm" value="<?php echo $data['selesai']?>" type="text"  name="selesai" placeholder="Tahun Buku" ></td>
            </tr>
			</table>
                <!-- /.card-body -->
				<br>
				  <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
					<a href="?module=penugasan_pegawai_st" class="btn btn-sm btn-danger">
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
 $('#input_mask').inputmask({
            mask: '99.999.999.9-999.999',
            definitions: {
                A: {
                    validator: "[A-Za-z0-9 ]"
                },
            },            
        });
 $('#input_mask2').inputmask({
            mask: '2099 - 2099',
            definitions: {
                A: {
                    validator: "[A-Za-z0-9 ]"
                },
            },            
        });
  $('#input_mask3').inputmask({
            mask: 'ST-9999/UMPPB1100/2099/S9',
            definitions: {
                A: {
                    validator: "[A-Za-z0-9 ]"
                },
            },            
        });
</script>
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
<script src="js/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function autofill(){
                var npwp = $("#input_mask").val();
                $.ajax({
                    url: 'module/input_data/autofil_wp.php',
                    data:'npwp='+npwp,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama_kkks').val(obj.nama_wp);
                    $('#alamat_kkks').val(obj.alamat_wp);
                });
            }
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

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
                  <li class="nav-item"><a class="nav-link active" href="#st_rik" data-toggle="tab">Input Surat Tugas Pemeriksaan</a></li>
                </ul>
              </div>
               <div class="card-body">
                <div class="tab-content">
                <div class="active tab-pane" id="input">
                <div class="card-body p-0">

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="module/penugasan_pegawai_st/proses.php"  enctype="multipart/form-data"  method="post">
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
                    $query = "select id_sie from pegawai where nip9 = '$user'";
                    $run =mysqli_query($konek,$query);
                    $data=mysqli_fetch_array($run);
                    $seksi= $data['id_sie'];
                    ?>
        <input type="hidden" name="seksi" value="<?php echo $seksi; ?>"> 
            <tr><td>No Surat Tugas</td>
          <td><input class="col-md-6 form-control form-control-sm" id="input_mask3"  type="text" name="nost" placeholder="Nomor Surat Tugas" required></td>
            </tr>
            <tr><td>Tanggal Surat Tugas</td>
          <td><input class="col-md-6 form-control form-control-sm" type="date" name="tgl_st" placeholder="Input tanggal ST" ></td>
            </tr>
            <tr><td>Jenis ST</td>
            <td>
            <select class="col-md-6 form-control form-control-sm select2bs4" style="width: 100%;" name="jns_st">
            <option value="Lainnya">--Pilih Jenis ST--</option>
            <option>e-learning</option>
            <option>Lainnya</option>
            </select></td>
            </tr>
            <tr><td>Agenda</td>
            <td><input id="input_mask" class="col-md-6 form-control form-control-sm" type="text" name="agenda" placeholder="Input Agenda" ></td>
            </tr>
            <tr><td>Tempat</td>
            <td><select class="col-md-6 form-control form-control-sm select2bs4" style="width: 50%;" name="tempat" id="tempat">
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
            <tr><td>Tanggal Mulai</td>
            <td><input id="datetime" class="col-md-6 form-control form-control-sm" type="text" name="mulai" placeholder="Input Tanggal Mulai" autocomplete="off" required></td>
			
            </tr>
            <tr><td>Tanggal Selesai</td>
            <td><input id="datetime2" class="col-md-6 form-control form-control-sm" type="text" name="selesai" placeholder="Input Tanggal Selesai" autocomplete="off" required ></td>
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

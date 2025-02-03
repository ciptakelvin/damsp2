
<?php
include("conn.php");
$idst = $_GET['id'];
$kuerist = "select * from events_pegawai_p2 where id ='$idst'";
$run = mysqli_query($konek,$kuerist);
$data = mysqli_fetch_array($run);
$alamat_kkks = $data['alamat_kkks'];
$id_st= $data['id_st'];
$no_st= $data['no_st'];
$tgl_st= $data['tgl_st'];
$mulai=$data['mulai'];
$selesai=$data['selesai'];
?>
    <section class="content">
     <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
			  <h3 class="card-title" style="color:#0013c2; font-weight:bold">Input Surat Tugas</h3>
					<div class="text-right">
                    <a class="btn btn-sm btn-info" href="#input" data-toggle="tab" style="font-weight:bold">Input Pegawai ST</a>
                  </div>
              </div>
               <div class="card-body">
                <div class="tab-content">
                <div class="active tab-pane" id="input">
                <div class="card-body p-0">

              <!-- /.card-header -->
              <!-- form start -->
			<table class="col-md-12 form-control-sm">
            <tr><td>No Surat Tugas</td>
          <td><input class="col-md-8 form-control form-control-sm" value="<?php echo $data['no_surat']; ?>" readonly></td>
            </tr>
            <tr><td>Tanggal Surat Tugas</td>
          <td><input class="col-md-8 form-control form-control-sm" type="date" value="<?php echo $data['tanggal_surat']; ?>" readonly></td>
            </tr>
            <tr><td>Agenda</td>
            <td><input id="npwp" class="col-md-8 form-control form-control-sm" type="text" value="<?php echo $data['agenda']; ?>" readonly></td>
            </tr>
            <tr><td>Tempat</td>
            <td><input class="col-md-8 form-control form-control-sm" type="text" id="nama_kkks"  value="<?php echo $data['tempat']; ?>" readonly></td>
            </tr>
            <tr><td>Tanggal Mulai</td>
            <td><input class="col-md-8 form-control form-control-sm" type="text" id="alamat_kkks"  value="<?php echo $data['mulai']; ?>"readonly></td>
            </tr>
            <tr><td>Tanggal Selesai</td>
            <td><input class="col-md-8 form-control form-control-sm" type="text"  value="<?php echo $data['selesai']; ?>" readonly></td>
            </tr>
			<?php
			include("conn.php");
			$kueritim = "select * from pegawai_events where id_events_pgw = '$idst'";
			$runtim = mysqli_query($konek,$kueritim);
			$urut = 1;
			while($datatim=mysqli_fetch_array($runtim))
			{
			?>
			<tr><td>Pegawai <?php echo $urut; ?></td>
                <td><input class="col-md-8 form-control form-control-sm" type="text" value="<?php echo $datatim['nama']; ?>" readonly>
                        </td></tr>
			<?php
			$urut++;
			}
			?>
			</table>
			
			<h5> Input Nama Pegawai ST</h5>
			<table class="col-md-10 form-control-sm">
			<form role="form" action="module/penugasan_pegawai_st/proses_input_tim_edit.php" method="post">
				<input type="hidden" name="id_st" value="<?php echo $idst; ?>">
				<tr><td>Pegawai ST</td>
				  <td><select class="col-md-8 form-control form-control-sm select2bs4" name="anggota" id="nama" onchange="populate()">
						<option value='0'></option>
						<?php
                         $idst = $_GET['id'];
                        /*echo $idst;*/
                        $kuericek = "select * from events_pegawai_p2 where id ='$idst' and status = '1'";
                        $cek = mysqli_query($konek,$kuericek);
                        $datacek = mysqli_fetch_array($cek);
                        $mulai=$datacek['mulai'];
                        $selesai=$datacek['selesai'];
						$sql2="select nama, id_peg from pegawai where nama not in (select nama from v_pgw_st a where mulai between '$mulai' and '$selesai' and status='1' and jenis_st != 'e-learning' or selesai between '$mulai'and '$selesai' and status='1' and jenis_st != 'e-learning' or mulai<= '$mulai' and selesai>='$selesai' and status='1' and jenis_st != 'e-learning') and status = '1'";
						$hasil2=mysqli_query($konek,$sql2);
						while($data2=mysqli_fetch_array($hasil2)){
						?>
						<option><?php echo $data2['nama']; ?></option>
						<?php
						}
						?>
						</select>
                        <input type="hidden" name="idpeg" id="id_peg">
                        <input type="hidden" name="nip18" id="nip18" >
                        <input type="hidden" name="seksi" id="id_sie" >
						</td>
						</tr>
						<tr>
						<td></td>
						<td><button type="submit" class="btn btn-sm btn-success">Tambah</button>
                        <a href="?module=hapus_tim_edit_penugasan_pegawai&id=<?php echo $data['id']?>" class="btn btn-sm btn-danger">Hapus Data Pegawai</a>
						<a href="?module=penugasan_pegawai_st" class="btn btn-sm btn-secondary">Kembali</a></td>
				</tr>
			</form>
			</table>
			
				</div>
			</div>
            
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
<script src="js/jquery.min.google.js"></script>
<script type="text/javascript">
        function populate(){
                var nama = $("#nama").val();
                $.ajax({
                    url: 'module/penugasan_pegawai_st/autofil_pegawai.php',
                    data:"nama="+nama ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#id_peg').val(obj.id_peg);
                    $('#nip18').val(obj.nip18);
                    $('#id_sie').val(obj.id_sie);
                });
            }
			
						
 $(document).ready(function() {
     $('#nama').select2();
 });
    </script>
</body>
</html>

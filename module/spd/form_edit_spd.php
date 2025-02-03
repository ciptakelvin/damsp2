
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
			  <h3 class="card-title" style="color:#0013c2; font-weight:bold">Input SPD</h3>
					<div class="text-right">
                    <a class="btn btn-sm btn-info" href="#input" data-toggle="tab" style="font-weight:bold">Input Donasi Pegawai ST</a>
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
			$kueritim = "select a.id_pgw,a.nama, FORMAT(a.target,0) target,FORMAT(a.realisasi,0) realisasi from spd a left join id_seksi b on a.id_sie = b.id_sie where id_events_pgw = '$idst' and b.subdit = 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan'";
			$runtim = mysqli_query($konek,$kueritim);
			$urut = 1;
			while($datatim=mysqli_fetch_array($runtim))
			{
			?>
			 <tr><td>Pegawai <?php echo $urut; ?></td>
               <div><td><input class="col-md-8 form-control form-control-sm" type="text" value="<?php echo $datatim['nama']; ?>" readonly></td>
						<td><input class="col-md-8 form-control form-control-sm" type="text" value="<?php echo $datatim['target']; ?>" readonly></td>
						<td><input class="col-md-8 form-control form-control-sm" type="text" value="<?php echo $datatim['realisasi']; ?>" readonly></td>
                        <td><a href="?module=hapus_input_spd&id=<?php echo $datatim['id_pgw']?>&idst=<?php echo $_GET['id']?>" class="btn btn-sm btn-danger">Hapus Data</a></td></div></tr>
			<?php
			$urut++;
			}
			?>
			</table>
			
			<h5> Input Donasi SPD</h5>
			<table class="col-md-10 form-control-sm">
			<form role="form" action="module/spd/proses_input_spd_edit.php" method="post">
				<input type="hidden" name="id_st" value="<?php echo $idst; ?>">
				<tr><td>Pegawai ST</td>
				<table>
				  <td><select class="col-15 form-control form-control-sm select2bs4" name="anggota" id="nama" onchange="populate()">
						<option value='0'></option>
						<?php
                         $idst = $_GET['id'];
                        /*echo $idst;*/
                        $kuericek = "select * from events_pegawai_p2 where id ='$idst'";
                        $cek = mysqli_query($konek,$kuericek);
                        $datacek = mysqli_fetch_array($cek);
                        $mulai=$datacek['mulai'];
                        $selesai=$datacek['selesai'];
						$sql2="select a.* from pegawai_events a left join id_seksi b on a.id_sie = b.id_sie where id_events_pgw = $idst and subdit = 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan' and a.nama not in (select nama from spd where id_events_pgw = $idst)";
						$hasil2=mysqli_query($konek,$sql2);
						while($data2=mysqli_fetch_array($hasil2)){
						?>
						<option><?php echo $data2['nama']; ?></option>
						<?php
						}
						?>
						</select>
						</td>
						<td><input type="hidden" name="seksi" id="id_sie" ></td>
						<td><input type="text" name="target"  placeholder="Target Penerimaan Kas"></td>
                        <td><input type="text" name="realisasi"  placeholder="Realisasi Penerimaan Kas"></td>
						</tr>
						<tr>
						<td></td></table>
						<br>
						<td><button type="submit" class="btn btn-sm btn-success">Tambah</button>
						<a href="?module=spd" class="btn btn-sm btn-secondary">Kembali</a></td>
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

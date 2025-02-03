<head>
<link rel="stylesheet" href="css/fullcalendar.css"/>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/fontawesome.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/fontawesome.js"></script>
<script src="js/fontawesome.min.js"></script>

</head>
<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus Kegiatan Ini ?");
}
function myFunction_2(){
  confirm("Apakah Anda Yakin Akan Memvalidasi Agenda Ini ?");
}
function myFunction_3(){
  confirm("Apakah Anda Yakin Akan Menghapus Validasi Agenda Ini ?");
}
</script>
        <div class="col-12">
          <div class="card">
            <div class="card-header">

			  <div class="text-right">
				<a href="module/rapat_direktur/toexcel_monitoring.php" class="btn btn-info btn-sm" style="align:right">
                      Monitoring.xls
                    </a>
                    <a href="?module=input_rapat_direktur" class="btn btn-sm btn-success">
                      Tambah Agenda
                    </a>
                  </div>
            </div>
			<div class="card-body col-12">
				<div class="row">
				   <table id="example2" class="table table-bordered table-hover form-control-sm">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Surat/
                  Tanggal Surat</th>
                  <th>Agenda</th>
                  <th>Tempat</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Sifat</th>
                  <th>PIC</th>
				  <th>Lampiran</th>
                  <th>Menu</th>
                </tr>
                </thead>
                <tbody>
				<?php
				include("bulan.php");
         @session_start();
        $ses_id = $_SESSION['id'];
        $user = $_SESSION['nip9'];
        if(($ses_id == '') && ($user == '')) 
        {
          header("Location:index.php");
        }
        $user1=$_SESSION['user'];
        $query2 = "select subdit from pegawai, id_seksi where nip9 = '$user' and pegawai.id_sie=id_seksi.id_sie";
        $run2 =mysqli_query($konek,$query2);
        $data2=mysqli_fetch_array($run2);
        $subdit= $data2['subdit'];
		//echo $subdit;
		if($subdit == "SubDirektorat Kerjasama dan Dukungan Pemeriksaan")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and (sie20 ='1' or sie1 ='1' or sie2 ='1' or sie3 = '1') order by start_event DESC");
		}
		if($subdit == "SubDirektorat Perencanaan Pemeriksaan")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and (sie17 ='1' or sie4 ='1' or sie5 ='1' or sie6 = '1') order by start_event desc");
		}
		if($subdit == "SubDirektorat Teknik dan Pengendalian Pemeriksaan")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and (sie18 ='1' or sie7 ='1' or sie8 ='1' or sie9 = '1') order by start_event desc");
		}
		if($subdit == "SubDirektorat Pemeriksaan Transaksi Khusus")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and (sie19 ='1' or sie10 ='1' or sie11 ='1' or sie12 = '1') order by start_event desc");
		}
		if($subdit == "SubDirektorat Penagihan")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and (sie21 ='1' or sie13 ='1' or sie14 ='1' or sie15 = '1') order by start_event desc");
		}
		if($subdit == "Direktur")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and subdit ='$subdit' and (sie16 ='1' or sie22='1') order by start_event desc");
		}

					$no=1;
					while($data= mysqli_fetch_array($query))
					{
						$thn_keg = substr($data['start_event'],0,4);
						$bln_keg = substr($data['start_event'],5,2);
						$tgl_keg = substr($data['start_event'],8,2);
						$thn_keg2 = substr($data['end_event'],0,4);
						$bln_keg2 = substr($data['end_event'],5,2);
						$tgl_keg2 = substr($data['end_event'],8,2);
						$thn_keg3 = substr($data['tanggal_surat'],0,4);
						$bln_keg3 = substr($data['tanggal_surat'],5,2);
						$tgl_keg3 = substr($data['tanggal_surat'],8,2);
				
				?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data['no_surat']."<br>".$tgl_keg3." ".bulan1($bln_keg3)." ".$thn_keg3;?></td>
					  	<td style="min-width:300px"><?php echo $data['title']; ?></td>
					  	<td><?php echo $data['tempat']; ?></td>
					 	<td><?php echo $tgl_keg." ".bulan1($bln_keg)." ".$thn_keg; ?><br><p>Waktu <?php echo substr($data['start_event'],11,5); ?> WIB</p></td>
					  	<td><?php echo $tgl_keg2." ".bulan1($bln_keg2)." ".$thn_keg2; ?><br><p>Waktu <?php echo substr($data['end_event'],11,5); ?> WIB</p></td>
					  	<td><?php echo $data['sifat']; ?></td>
					  	<td style="min-width:250px"><?php if ($data['sie1']=='1'){ echo " - Seksi Kerjasama Pemeriksaan<br> ";}
									if ($data['sie2']=='1'){ echo " - Seksi Dukungan Teknis Pemeriksaan<br> ";}
									if ($data['sie3']=='1'){ echo " - Seksi Data dan Dukungan Pemeriksaan<br> ";}
									if ($data['sie4']=='1'){ echo " - SubDirektorat Perencanaan Pemeriksaan<br> ";}
									if ($data['sie5']=='1'){ echo " - Seksi Perencanaan Pemeriksaan Wajib Pajak Badan<br> ";}
									if ($data['sie6']=='1'){ echo " - Seksi Strategi Pemeriksaan<br> ";}
									if ($data['sie7']=='1'){ echo " - SubDirektorat Teknik dan Pengendalian Pemeriksaan<br> ";}
									if ($data['sie8']=='1'){ echo " - SubDirektorat Teknik dan Pengendalian Pemeriksaan<br> ";}
									if ($data['sie9']=='1'){ echo " - SubDirektorat Teknik dan Pengendalian Pemeriksaan<br> ";}
									if ($data['sie10']=='1'){ echo " - SubDirektorat Pemeriksaan Transaksi Khusus<br> ";}
									if ($data['sie11']=='1'){ echo " - Seksi Pemeriksaan Wajib Pajak Sektor Sumber Daya Alam<br> ";}
									if ($data['sie12']=='1'){ echo " - Seksi Transfer Pricing dan Transaksi Khusus Lainnya<br> ";}
									if ($data['sie13']=='1'){ echo " - Seksi Strategi dan Dukungan Penagihan<br> ";}
									if ($data['sie14']=='1'){ echo " - Seksi Perencanaan dan Evaluasi Penagihan<br> ";}
									if ($data['sie15']=='1'){ echo " - SubDirektorat Penagihan<br> ";}
									if ($data['sie16']=='1'){ echo " - Direktur Pemeriksaan dan Penagihan<br> ";}
									if ($data['sie17']=='1'){ echo " - SubDirektorat Perencanaan Pemeriksaan<br> ";}
									if ($data['sie18']=='1'){ echo " - SubDirektorat Teknik dan Pengendalian Pemeriksaan<br> ";}
									if ($data['sie19']=='1'){ echo " - SubDirektorat Pemeriksaan Transaksi Khusus<br> ";}
									if ($data['sie20']=='1'){ echo " - SubDirektorat Kerjasama dan Dukungan Pemeriksaan<br> ";}
									if ($data['sie21']=='1'){ echo " - SubDirektorat Penagihan<br> ";}
									if ($data['sie22']=='1'){ echo " - SubBagian Tata Usaha<br> ";}
						?></td>
						<td style="min-width:300px"><?php if($data['file_und']=="" or $data['file_und']=="No File Download"){echo "File UND &emsp;&emsp;&nbsp;: No File Download";}else{ 
                echo "File UND&emsp;&emsp;&nbsp;: <a title='Download File PDF' href='module/rapat_direktur/download_und.php?filename=$data[file_und]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a>";}?><br>
				<?php if($data['file_rapat']=="" or $data['file_rapat']=="No File Download"){echo "File Rapat &emsp;&emsp;: No File Download";}else{ 
                echo "File Rapat&emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_rapat.php?filename=$data[file_rapat]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a>";}?><br>
				<?php if($data['file_lhr']=="" or $data['file_lhr']=="No File Download"){echo "File LHR &emsp;&emsp;&nbsp;&nbsp;: No File Download";}else{ 
                echo "File LHR&emsp;&emsp;&nbsp;&nbsp;: <a title='Download File PDF' href='module/rapat_direktur/download_lhr.php?filename=$data[file_lhr]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a>";}?>
					  	<td>
						<a title="Edit Kegiatan" href="?module=view_rp_direktur&id=<?php echo $data['id'];?>" alt="Edit" class="btn btn-sm btn-warning"><img src="img/edit.png" height="20" width="20"></a>
            <a title="Hapus Kegiatan" href="?module=del_rp_direktur&id=<?php echo $data['id'];?>" alt="Lihat" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');"><img src="img/delete.png" height="20" width="20"></a>
            <?php
            if($data['validasi'] != '1')
             {
            ?>
            <a title="Validasi Kegiatan" href="?module=validasi_rp_direktur&id=<?php echo $data['id'];?>" button type="submit" class="btn btn-sm btn-info" onclick="return confirm('Apakah anda yakin akan memvalidasi progres ini?');"><img src="img/valid.png" height="20" width="20"></a>
            <?php
            }
            else
            {
            ?>
            <a title="Hapus Validasi" href="?module=del_validasi_rp_direktur&id=<?php echo $data['id'];?>" button type="submit" class="btn btn-sm btn-success" onclick="return confirm('Apakah anda yakin akan membatalkan validasi ini?');"><img src="img/valid1.png" height="20" width="20"></a></td>
            <?php
            }
            ?>
									</td>
					</tr>
				<?php
					$no++;
					}
				?>
                </tbody>
              </table>
            
				</div>
            </div>
		</div>
	</div>

<!-- DataTables -->
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap4.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
    "dom": "<'row'<'col-sm-12 col-md-8'l><'col-sm-12 col-md-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
      "paging": true,
      "pagelenght":7,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
       oLanguage: {
      oPaginate: {
        sNext: 'Next ',
        sPrevious: ' Previous'
      }
    },
    iDisplayLength: 7,
    responsive: {
      pagingType: "simple"
    }

    });
  });
</script>
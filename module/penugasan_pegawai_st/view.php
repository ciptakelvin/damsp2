<head>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<style>
div.scrollmenu {
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 7px;
  text-decoration: none;
}
</style>
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
<?php
include ("conn.php");
$user=$_SESSION['nip9'];
$query_user = "select * from pegawai a, id_seksi b where a.id_sie = b.id_sie and a.nip9 = '$user'";
$run_user =mysqli_query($konek,$query_user);
$data_user=mysqli_fetch_array($run_user);
$subdit = $data_user['subdit'];
?>
        <div class="col-12" >
          <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills"><?php $cari_mulai=$_POST['cari_mulai'];  
                if($cari_mulai!=""){echo "<li class='nav-item'><a class='nav-link' href='#st_rik' data-toggle='tab'>Surat Tugas</a></li>
                <li class='nav-item'><a class='nav-link active' href='#cari_jadwal' data-toggle='tab'>Cari Jadwal</a></li>";}else{echo "
                  <li class='nav-item'><a class='nav-link active' href='#st_rik' data-toggle='tab'>Surat Tugas</a></li>
                  <li class='nav-item'><a class='nav-link' href='#cari_jadwal' data-toggle='tab'>Cari Jadwal</a></li>";}?>
                </ul>
              </div>
			  
           <div class="card-body">
          <div class="tab-content">
             <?php $cari_mulai=$_POST['cari_mulai']; 
             if($cari_mulai!=""){echo "<div class='tab-pane' id='st_rik'>";}else{echo "<div class='active tab-pane' id='st_rik'>";}?>
              <div class="text-right">
                    <a style="text-align:center" href="?module=input_st_penugasan_pegawai" class="btn btn-sm btn-danger">
                      Input Surat Tugas
                    </a>
                  </div>  
              <div class="scrollmenu">
              <div class="card-body p-0">
         <table id="example3" class="table table-bordered table-hover form-control-sm">
                  <thead  style="text-align:center" >
                <tr>
                   <th style="background-color:#005e94; color:#fff; ">No</th>
                    <th style="background-color:#005e94; color:#fff; ">No ST</th>
                    <th style=" background-color:#005e94; color:#fff">Agenda</th>
                    <th style=" background-color:#005e94; color:#fff">Tempat dan Tanggal Kegiatan</th>
                    <th style=" background-color:#005e94; color:#fff">Pegawai</th>
                    <th style=" background-color:#005e94; color:#fff">Menu</th>
                    </tr>
                </thead>
                <tbody>
        <?php
        include("bulan.php");
          $query = "select a.*, b.subdit nama_subdit from events_pegawai_p2 a LEFT JOIN id_seksi b ON a.id_sie = b.id_sie where status='1' and EXTRACT(YEAR FROM tanggal_surat) = EXTRACT(YEAR FROM CURRENT_DATE)  order by mulai desc";
          $run = mysqli_query($konek,$query);
          $no=1;
          while($data= mysqli_fetch_array($run))
          {
			$data_subdit = $data['nama_subdit'];
            $thn_keg = substr($data['tanggal_surat'],0,4);
            $bln_keg = substr($data['tanggal_surat'],5,2);
            $tgl_keg = substr($data['tanggal_surat'],8,2);
           $thn_keg2 = substr($data['mulai'],0,4);
           $bln_keg2 = substr($data['mulai'],5,2);
           $tgl_keg2 = substr($data['mulai'],8,2);
           $thn_keg3 = substr($data['selesai'],0,4);
           $bln_keg3 = substr($data['selesai'],5,2);
           $tgl_keg3 = substr($data['selesai'],8,2);
        
        ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['no_surat']; ?><br><?php echo $tgl_keg." ".bulan1($bln_keg)." ".$thn_keg; ?></td>
              <td> <?php echo $data['agenda']; ?></td>
              <td>
                Tempat &emsp;&emsp;&nbsp;: 
				<?php
					include("conn.php");
					$idcek = $data['id'];
					$mulai = $data['mulai'];
					$selesai = $data['selesai'];
					$tempat = $data['tempat'];
					$tempat_lainnya = $data['tempat_lainnya'];
					if($tempat == 'Lainnya'){echo $tempat_lainnya;}else{echo $tempat;}
				$cek = "select * from events_pegawai_p2 where mulai between '$mulai' and '$selesai' and tempat='Lainnya' and tempat_lainnya = '$tempat_lainnya' and status ='1' and id !='$idcek' or selesai between '$mulai'and '$selesai' and tempat='Lainnya' and tempat_lainnya = '$tempat_lainnya' and status ='1' and id!='$idcek' or mulai<= '$mulai' and selesai>='$selesai' and tempat='Lainnya' and status ='1' and tempat_lainnya = '$tempat_lainnya' and id!='$idcek' or mulai between '$mulai' and '$selesai' and tempat='$tempat' and tempat!='Lainnya' and status ='1' and id!='$idcek' or selesai between '$mulai'and '$selesai' and tempat='$tempat' and tempat!='Lainnya' and status ='1' and id!='$idcek' or mulai<= '$mulai' and selesai>='$selesai' and tempat='$tempat' and tempat!='Lainnya' and status ='1' and id!='$idcek'";
				$rcek=mysqli_query($konek,$cek);
				$data3 = mysqli_fetch_array($rcek);
				$tes = $data3['tempat'];
				//if($tempat == $tes){echo " <span style='background-color:red;color:white;'>($tempat)</span>";}else{echo " ($tempat)";}?>
                <br>Dari&emsp;&emsp;&emsp;&emsp;: <?php echo $tgl_keg2." ".bulan1($bln_keg2)." ".$thn_keg2; ?> <?php echo substr($data['mulai'],11,5); ?> WIB
                <br>Sampai &emsp;&emsp; : <?php echo $tgl_keg3." ".bulan1($bln_keg3)." ".$thn_keg3; ?> <?php echo substr($data['selesai'],11,5); ?> WIB
              </td>
               <td><?php $id = $data['id'];$idst = $data['id'];$kueritim = "select distinct * from pegawai_events,id_seksi where id_events_pgw='$idst' and pegawai_events.id_sie=id_seksi.id_sie";$runtim = mysqli_query($konek,$kueritim);$urut = 1;$cek=$datatim['nama'];
               if($cek=""){echo"";}{echo "Daftar Pegawai ST";}
              while($datatim = mysqli_fetch_array($runtim)){?><br><?php echo $urut; ?> &nbsp; <?php echo ucwords(strtolower($datatim['nama'])); ?> (<?php echo $datatim['seksi']; ?>)
                <?php
                $urut++;}?> 
            </td>
              <td><?php if($subdit == 'Direktur') {?><a title="Edit " href="?module=edit_st_penugasan_pegawai&id=<?php echo $data['id'];?>" alt="Edit" class="btn btn-sm btn-warning"><img src="img/9_.png" height="20" width="20"></a><?php } ?>
			<?php if($subdit == $data_subdit){ ?>			
            <a title="Hapus " href="?module=hapus_st_penugasan_pegawai&id=<?php echo $data['id'];?>" alt="Lihat" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');"><img src="img/10_.png" height="20" width="20"></a><?php } ?>
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
    <?php $cari_mulai=$_POST['cari_mulai'];
    if($cari_mulai!=""){echo "<div class='active tab-pane' id='cari_jadwal'>";}{echo "<div class='tab-pane' id='cari_jadwal'>";}?>
              <div class="card-body p-0">
                  <div class="text-right">
        <form action="?module=pencarian_jadwal_st" method="post">
        <div class="text-right">
                    <input type="date" name="cari_mulai" required>--<input type="date" name="cari_selesai" required>
          <input type="submit" value="Cari Jadwal">
                  </div>
        </form>
                  </div>
                  <?php
                  $cari_mulai = $_POST['cari_mulai'];
                  $cari_selesai = $_POST['cari_selesai'];
                  header("Location: ../../dams.php?module=pencarian_jadwal_st&#cari_jadwal");
                  ?>
                <div class="scrollmenu">
           <table id="example4" class="table table-bordered table-hover form-control-sm">
        
                <thead style="text-align:center">
                <tr>
                    <th style="background-color:#005e94; color:#fff; ">Perencanaan</th>
                    <th style=" background-color:#005e94; color:#fff">Teknik</th>
                    <th style=" background-color:#005e94; color:#fff">Transus</th>
                    <th style=" background-color:#005e94; color:#fff">Kersduk</th>
                    <th style=" background-color:#005e94; color:#fff">Penagihan</th>
                </tr>
                </thead>
                <tbody>
          <tr>
               <td>
                <?php
               
              $query041 = "select * from events_pegawai_p2 a,id_seksi b where a.mulai>='$cari_mulai' and a.selesai<='$cari_selesai' and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Perencanaan Pemeriksaan' or a.mulai between '$cari_mulai' and '$cari_selesai'  + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Perencanaan Pemeriksaan' or a.selesai between '$cari_mulai'and '$cari_selesai' + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Perencanaan Pemeriksaan' ";
              $run041 = mysqli_query($konek,$query041);
              $nom=1;
              while($data041 = mysqli_fetch_array($run041))
              {
                if($data041['subdit'] == ''){
                  echo "Tidak ada Jadwal";
                }
              else
                {
                  echo $nom.". ".$data041['no_surat']."<br>Agenda &nbsp&nbsp;&nbsp;: ".$data041['agenda']."<br>Tempat &nbsp&nbsp;&nbsp;: ".$data041['tempat']."<br>Mulai &emsp;&nbsp&nbsp;: ".date('d M Y', strtotime($data041['mulai']))."<br>"."Selesai &emsp;: ".date('d M Y', strtotime($data041['selesai']))."<br>";
                  $id_per = $data041['id'];
                  $query0411 = "select a.nama from pegawai_events a where a.id_events_pgw='$id_per'";
                  $run0411 = mysqli_query($konek,$query0411);
                  $no=1;
                  // echo "kosong";
                  while($data0411 = mysqli_fetch_array($run0411))
                  {
                   echo $no++.". ".ucwords(strtolower($data0411['nama']))."<br>";
                }
                }
              $nom++;echo "<br>";
              }
              ?>
              </td>
               <td>
               <?php
               
              $query042 = "select * from events_pegawai_p2 a,id_seksi b where a.mulai>='$cari_mulai' and a.selesai<='$cari_selesai' and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Teknik dan Pengendalian Pemeriksaan' or a.mulai between '$cari_mulai' and '$cari_selesai'  + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Teknik dan Pengendalian Pemeriksaan' or a.selesai between '$cari_mulai'and '$cari_selesai' + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Teknik dan Pengendalian Pemeriksaan' ";
              $run042 = mysqli_query($konek,$query042);
              $nom=1;
              // echo "kosong";
              while($data042 = mysqli_fetch_array($run042))
              {
                if($data042['subdit'] == ''){
                  echo "Tidak ada Jadwal";
                }
              else
                {
                  echo $nom.". ".$data042['no_surat']."<br>Agenda &nbsp&nbsp;&nbsp;: ".$data042['agenda']."<br>Tempat &nbsp&nbsp;&nbsp;: ".$data042['tempat']."<br>Mulai &emsp;&nbsp&nbsp;: ".date('d M Y', strtotime($data042['mulai']))."<br>"."Selesai &emsp;: ".date('d M Y', strtotime($data042['selesai']))."<br>";
                  $id_tek = $data042['id'];
                  $query0421 = "select a.nama from pegawai_events a where a.id_events_pgw='$id_tek'";
                  $run0421 = mysqli_query($konek,$query0421);
                  $no=1;
                  // echo "kosong";
                  while($data0421 = mysqli_fetch_array($run0421))
                  {
                   echo $no++.". ".ucwords(strtolower($data0421['nama']))."<br>";
                }
                }
              $nom++;echo "<br>";
              }
              ?>
              </td>
               <td>
                <?php
               
              $query043 = "select * from events_pegawai_p2 a,id_seksi b where a.mulai>='$cari_mulai' and a.selesai<='$cari_selesai' and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Pemeriksaan Transaksi Khusus' or a.mulai between '$cari_mulai' and '$cari_selesai'  + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Pemeriksaan Transaksi Khusus' or a.selesai between '$cari_mulai'and '$cari_selesai' + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Pemeriksaan Transaksi Khusus' ";
              $run043 = mysqli_query($konek,$query043);
              $nom=1;
              // echo "kosong";
              while($data043 = mysqli_fetch_array($run043))
              {
                if($data043['SUBDIT'] != ''){
                  echo "Tidak ada Jadwal";
                }
              else
                {
                  echo $nom.". ".$data043['no_surat']."<br>Agenda &nbsp&nbsp;&nbsp;: ".$data043['agenda']."<br>Tempat &nbsp&nbsp;&nbsp;: ".$data043['tempat']."<br>Mulai &emsp;&nbsp&nbsp;: ".date('d M Y', strtotime($data043['mulai']))."<br>"."Selesai &emsp;: ".date('d M Y', strtotime($data043['selesai']))."<br>";
                  $id_trans = $data043['id'];
                  $query0431 = "select a.nama from pegawai_events a where a.id_events_pgw='$id_trans'";
                  $run0431 = mysqli_query($konek,$query0431);
                  $no=1;
                  // echo "kosong";
                  while($data0431 = mysqli_fetch_array($run0431))
                  {
                   echo $no++.". ".ucwords(strtolower($data0431['nama']))."<br>";
                }
                }
              $nom++;echo "<br>";
              }
              ?>
              </td>
               <td>
                 <?php
               
              $query044 = "select * from events_pegawai_p2 a,id_seksi b where a.mulai>='$cari_mulai' and a.selesai<='$cari_selesai' and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Kerjasama dan Dukungan Pemeriksaan' or a.mulai between '$cari_mulai' and '$cari_selesai'  + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Kerjasama dan Dukungan Pemeriksaan' or a.selesai between '$cari_mulai'and '$cari_selesai' + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Kerjasama dan Dukungan Pemeriksaan' ";
              $run044 = mysqli_query($konek,$query044);
              $nom=1;
              // echo "kosong";
              while($data044 = mysqli_fetch_array($run044))
              {
                if($data044['Subdit'] != ''){
                  echo "Tidak ada Jadwal";
                }
              else
                {
                  echo $nom.". ".$data044['no_surat']."<br>Agenda &nbsp&nbsp;&nbsp;: ".$data044['agenda']."<br>Tempat &nbsp&nbsp;&nbsp;: ".$data044['tempat']."<br>Mulai &emsp;&nbsp&nbsp;: ".date('d M Y', strtotime($data044['mulai']))."<br>"."Selesai  &emsp;: ". date('d M Y', strtotime($data044['selesai']))."<br>";
                  $id_kers = $data044['id'];
                  $query0441 = "select a.nama from pegawai_events a where a.id_events_pgw='$id_kers'";
                  $run0441 = mysqli_query($konek,$query0441);
                  $no=1;
                  // echo "kosong";
                  while($data0441 = mysqli_fetch_array($run0441))
                  {
                   echo $no++.". ".ucwords(strtolower($data0441['nama']))."<br>";
                }
                }
              $nom++;echo "<br>";
              }
              ?>
              <td>
             <?php
               
              $query045 = "select * from events_pegawai_p2 a,id_seksi b where a.mulai>='$cari_mulai' and a.selesai<='$cari_selesai' and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Penagihan' or a.mulai between '$cari_mulai' and '$cari_selesai'  + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Penagihan' or a.selesai between '$cari_mulai'and '$cari_selesai' + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='SubDirektorat Penagihan' or a.mulai>='$cari_mulai' and a.selesai<='$cari_selesai' and a.status='1' and a.id_sie=b.id_sie and b.subdit='Direktur' or a.mulai between '$cari_mulai' and '$cari_selesai'  + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='Direktur' or a.selesai between '$cari_mulai'and '$cari_selesai' + interval 1 DAY and a.status='1' and a.id_sie=b.id_sie and b.subdit='Direktur' ";
              $run045 = mysqli_query($konek,$query045);
              $nom=1;
              // echo "kosong";
              while($data045 = mysqli_fetch_array($run045))
              {
                if($data045['SUBDIT'] != ''){
                  echo "Tidak ada Jadwal";
                }
               else
                {
                  echo $nom.". ".$data045['no_surat']."<br>Agenda &nbsp&nbsp;&nbsp;: ".$data045['agenda']."<br>Tempat &nbsp&nbsp;&nbsp;:".$data045['tempat']."<br>Mulai &emsp;&nbsp&nbsp;: ".date('d M Y', strtotime($data045['mulai']))."<br>"."Selesai &emsp;: ".date('d M Y', strtotime($data045['selesai']))."<br>";
                  $id_pen = $data045['id'];
                  $query0451 = "select a.nama from pegawai_events a where a.id_events_pgw='$id_pen'";
                  $run0451 = mysqli_query($konek,$query0451);
                  $no=1;
                  // echo "kosong";
                  while($data0451 = mysqli_fetch_array($run0451))
                  {
                   echo $no++.". ".ucwords(strtolower($data0451['nama']))."<br>";
                }
                }
              $nom++;echo "<br>";
              }
              ?>
              </td>
          </tr>
                </tbody>
              </table>

</div>
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
    $('#example3').DataTable({
    "dom": "<'row'<'col-sm-12 col-md-8'l><'col-sm-12 col-md-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
      "paging": true,
      "pagelenght":true,
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
  $(function () {
    $('#example2').DataTable({
    "dom": "<'row'<'col-sm-12 col-md-8'l><'col-sm-12 col-md-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
      "paging": true,
      "pagelenght":true,
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
    iDisplayLength: 10,
    responsive: {
      pagingType: "simple"
    }

    });
  });
</script>
<script>
  $(function () {
    $('#example4').DataTable({
    "dom": "<'row'<'col-sm-12 col-md-8'l><'col-sm-12 col-md-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
      "paging": true,
      "pagelenght":true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
       oLanguage: {
      oPaginate: {
        sNext: 'Next ',
        sPrevious: ' Previous'
      }
    },
    iDisplayLength: 10,
    responsive: {
      pagingType: "simple"
    }

    });
  });
</script>
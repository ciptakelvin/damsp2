<head>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
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
            <div class="card-header p-2" >
                <ul class="nav nav-pills"><?php $cari_mulai=$_POST['cari_mulai'];  
                if($cari_mulai!=""){echo "<li class='nav-item'><a class='nav-link' href='#st_rik' data-toggle='tab'>Booking Ruang</a></li>
                <li class='nav-item'><a class='nav-link active' href='#cari_jadwal' data-toggle='tab'>Cari Jadwal</a></li>";}else{echo "
                  <li class='nav-item'><a class='nav-link active' href='#st_rik' data-toggle='tab'>Booking Ruang</a></li>
                  <li class='nav-item'><a class='nav-link' href='#cari_jadwal' data-toggle='tab'>Cari Jadwal</a></li>";}?>
                </ul>
              </div>
           <div class="card-body">
          <div class="tab-content">
             <?php $cari_mulai=$_POST['cari_mulai']; 
             if($cari_mulai!=""){echo "<div class='tab-pane' id='st_rik'>";}else{echo "<div class='active tab-pane' id='st_rik'>";}?>
              <div class="text-right">
                    <a style="text-align:center" href="?module=input_ruangan" class="btn btn-sm btn-danger">
                      Booking Ruangan
                    </a>
                  </div>
              <div class="scrollmenu">
              <div class="card-body p-0">
         <table id="example3" class="table table-bordered table-hover form-control-sm">
          
                  <thead  style="text-align:center" >
                <tr>
                   <th style="background-color:#005e94; color:#fff; ">No</th>
                    <th style="background-color:#005e94; color:#fff; ">Tempat dan Tanggal Kegiatan</th>
                    <th style=" background-color:#005e94; color:#fff">Agenda</th>
                    <th style=" background-color:#005e94; color:#fff">Subdit/Kelompok</th>
                    <th style=" background-color:#005e94; color:#fff">Nama Peminjam</th>
					<th style=" background-color:#005e94; color:#fff">Permintaan Khusus</th>
                    <th style=" background-color:#005e94; color:#fff">Menu</th>
                    </tr>
                </thead>
                <tbody>
        <?php
        include("bulan.php");
          $query = "select a.* , b.subdit nama_subdit, c.nama_ruang,c.kapasitas from booking_ruang a LEFT JOIN id_seksi b ON a.subdit = b.id_sie LEFT JOIN kapasitas_ruang c ON a.tempat = c.id WHERE EXTRACT(YEAR FROM tanggal_mulai) = EXTRACT(YEAR FROM CURRENT_DATE) order by tanggal_mulai desc";
          $run = mysqli_query($konek,$query);
          $no=1;
          while($data= mysqli_fetch_array($run))
          {
			$data_subdit = $data['nama_subdit'];
            $thn_keg = substr($data['tanggal_surat'],0,4);
            $bln_keg = substr($data['tanggal_surat'],5,2);
            $tgl_keg = substr($data['tanggal_surat'],8,2);
           $thn_keg2 = substr($data['tanggal_mulai'],0,4);
           $bln_keg2 = substr($data['tanggal_mulai'],5,2);
           $tgl_keg2 = substr($data['tanggal_mulai'],8,2);
           $thn_keg3 = substr($data['tanggal_selesai'],0,4);
           $bln_keg3 = substr($data['tanggal_selesai'],5,2);
           $tgl_keg3 = substr($data['tanggal_selesai'],8,2);
        
        ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td>
                Tempat &emsp;&emsp;&nbsp;: <?php echo $data['nama_ruang']; ?>
                <br>Dari&emsp;&emsp;&emsp;&emsp;: <?php echo $tgl_keg2." ".bulan1($bln_keg2)." ".$thn_keg2; ?> <?php echo substr($data['tanggal_mulai'],11,5); ?> WIB 
                <br>Sampai &emsp;&emsp; : <?php echo $tgl_keg3." ".bulan1($bln_keg3)." ".$thn_keg3; ?> <?php echo substr($data['tanggal_selesai'],11,5); ?> WIB
				<br>Kapasitas &emsp; : <?php echo $data['kapasitas']; ?> Orang
				<br>Peserta &emsp;&emsp; : <?php echo $data['peserta']; ?> Orang
              </td>
              </td>
              <td> <?php echo $data['agenda']; ?></td>
            <td>
              <?php
          $id2 = $data['id'];
          $query2 = "select * from booking_ruang a,id_seksi b where a.subdit=b.id_sie and id = '$id2' order by id desc";
          $run2 = mysqli_query($konek,$query2);
          $no2=1;
          while($data2= mysqli_fetch_array($run2))
          {      
            $thn_keg3 = substr($data2['tgl_st'],0,4);
            $bln_keg3 = substr($data2['tgl_st'],5,2);
            $tgl_keg3 = substr($data2['tgl_st'],8,2);    
			$subdit1 = $data2['subdit']; 
        ?><?php echo $data2['subdit']; ?></p>
        <?php $no2++;}?>
              </td>
               <td><?php echo $data['peminjam']; ?></td>
			    <td><?php echo $data['keterangan']; ?></td>
              <td><?php if($user == $data[9]){ ?><a title="Edit " href="?module=edit_ruangan&id=<?php echo $data['id'];?>" alt="Edit" class="btn btn-sm btn-warning"><img src="img/9_.png" height="20" width="20"></a>  
            <a title="Hapus " href="?module=hapus_input_ruangan&id=<?php echo $data['id'];?>" alt="Lihat" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');"><img src="img/10_.png" height="20" width="20"></a><?php } ?>
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
        <form action="?module=pencarian_jadwal_ruangan" method="post">
        <div class="text-right">
                    <input type="date" name="cari_mulai" required>--<input type="date" name="cari_selesai" required>
          <input type="submit" value="Cari Jadwal">
                  </div>
        </form>
                  </div>
                  <?php
                  $cari_mulai = $_POST['cari_mulai'];
                  $cari_selesai = $_POST['cari_selesai'];
                  header("Location: ../../dams.php?module=pencarian_jadwal_ruangan&#cari_jadwal");
                  ?>
                <div class="scrollmenu">
           <table id="example4" class="table table-bordered table-hover form-control-sm">
        
                <thead style="text-align:center">
                <tr>
                    <th style="background-color:#005e94; color:#fff; ">Tempat dan Tanggal Kegiatan</th>
                    <th style=" background-color:#005e94; color:#fff">Agenda</th>
                    <th style=" background-color:#005e94; color:#fff">Subdit/Kelompok</th>
                    <th style=" background-color:#005e94; color:#fff">Nama Peminjam</th>
                </tr>
                </thead>
                <tbody>
                  <?php
          include("../../bulan.php");
          $query3 = "select a.*,b.nama_ruang,b.kapasitas from booking_ruang a left join kapasitas_ruang b on a.tempat = b.id where tanggal_mulai>='$cari_mulai' and tanggal_selesai<='$cari_selesai' or tanggal_mulai between '$cari_mulai' and '$cari_selesai'  + interval 1 DAY or tanggal_selesai between '$cari_mulai'and '$cari_selesai'  order by id desc";
          $run3 = mysqli_query($konek,$query3);
          $no=1;
          while($data3= mysqli_fetch_array($run3))
          {
            $thn_keg = substr($data['tanggal_surat'],0,4);
            $bln_keg = substr($data['tanggal_surat'],5,2);
            $tgl_keg = substr($data['tanggal_surat'],8,2);
           $thn_keg4 = substr($data3['tanggal_mulai'],0,4);
           $bln_keg4 = substr($data3['tanggal_mulai'],5,2);
           $tgl_keg4 = substr($data3['tanggal_mulai'],8,2);
           $thn_keg5 = substr($data3['tanggal_selesai'],0,4);
           $bln_keg5 = substr($data3['tanggal_selesai'],5,2);
           $tgl_keg5 = substr($data3['tanggal_selesai'],8,2);
        
        ?>
         <tr>
            <td>
                Tempat &emsp;&emsp;&nbsp;: <?php echo $data3['nama_ruang']; ?>
                <br>Dari&emsp;&emsp;&emsp;&emsp;: <?php echo $tgl_keg4." ".bulan1($bln_keg4)." ".$thn_keg4; ?> <?php echo substr($data3['tanggal_mulai'],11,5); ?> WIB 
                <br>Sampai &emsp;&emsp; : <?php echo $tgl_keg5." ".bulan1($bln_keg5)." ".$thn_keg5; ?> <?php echo substr($data3['tanggal_selesai'],11,5); ?> WIB
              </td>
              <td> <?php echo $data3['agenda']; ?></td>
            <td>
              <?php
          $id4 = $data3['id'];
          $query4 = "select a.*, b.subdit nama_subdit from booking_ruang a,id_seksi b where a.subdit=b.id_sie and id = '$id4' order by id desc";
          $run4 = mysqli_query($konek,$query4);
          $no4=1;
          while($data4= mysqli_fetch_array($run4))
          {      
            $thn_keg3 = substr($data4['tgl_st'],0,4);
            $bln_keg3 = substr($data4['tgl_st'],5,2);
            $tgl_keg3 = substr($data4['tgl_st'],8,2);    
            ?><?php echo $data4['nama_subdit']; ?></p>
            <?php $no4++;}?>
              </td>
               <td><?php echo $data3['peminjam']; ?></td>
             </tr>
              <?php
              $no3++;
              }
              ?>
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
    $("#example1").DataTable();
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
    $("#example1").DataTable();
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
    $("#example1").DataTable();
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
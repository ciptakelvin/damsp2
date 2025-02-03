 <?php 
  include("conn.php");
  $tahun = $_POST['tahun'];
  $queryDirektur = mysqli_query($konek,"SELECT count(title) total from events where status=1 and validasi=1 and (subdit='Direktur' or sie16='1') and start_event >= curdate() and end_event <= curdate()+ interval 1 DAY");
  $queryPerencanaan = mysqli_query($konek,"SELECT count(title) total from events where status=1 and validasi=1 and (sie17 ='1') and start_event >= curdate() and end_event <= curdate()+ interval 1 DAY");
  $queryTeknik = mysqli_query($konek, "SELECT count(title) total from events where status=1 and validasi=1 and (sie18 ='1') and start_event >= curdate() and end_event <= curdate()+ interval 1 DAY");
  $queryTransus = mysqli_query($konek, "SELECT count(title) total from events where status=1 and validasi=1 and (sie19 ='1') and start_event >= curdate() and end_event <= curdate()+ interval 1 DAY");
  $queryKersduk = mysqli_query($konek, "SELECT count(title) total from events where status=1 and validasi=1 and (sie20 ='1') and start_event >= curdate() and end_event <= curdate()+ interval 1 DAY");
  $queryPenagihan = mysqli_query($konek, "SELECT count(title) total from events where status=1 and validasi=1 and (sie21 ='1') and start_event >= curdate() and end_event <= curdate()+ interval 1 DAY");
  $querycharttemuan2 = mysqli_query($konek, "SELECT EXTRACT(Year FROM LOG) as tahun,kategori,sum(nilai_detail) as total from char_saldo_pending where  year(log)=$tahun  GROUP BY kategori");
  $querychartkoreksi = mysqli_query($konek, "SELECT EXTRACT(Year FROM LOG) as tahun,sum(nilai_pending) as total from char_saldo_pending where id_temuan='1' and year(log)<=$tahun  GROUP BY tahun");
  $querychartkoreksi2 = mysqli_query($konek, "SELECT EXTRACT(Year FROM LOG) as tahun,sum(nilai_pending) as total from char_saldo_pending where id_temuan='1' and year(log)<=$tahun GROUP BY tahun");
  $querylhpb = mysqli_query($konek, "select * from chart_lhpb where tahun_terbit =$tahun");
  $querysaldo = mysqli_query($konek, "select EXTRACT(Year FROM LOG) as tahun,sum(nilai_pending)/1000 as total from char_saldo_pending where id_temuan='3' and year(log)=$tahun GROUP BY tahun");
  $querytemuan = mysqli_query($konek, "SELECT EXTRACT(Year FROM LOG) as tahun,sum(nilai_detail)/1000 as total from char_saldo_pending where year(log)=$tahun  GROUP BY tahun");
  $querykoreksi = mysqli_query($konek, "SELECT EXTRACT(Year FROM LOG) as tahun,sum(nilai_pending)/1000 as total from char_saldo_pending where id_temuan='1' and year(log)<=$tahun  GROUP BY tahun");
  $querywp = mysqli_query($konek, "select count(*) as total from monitoring where status='1' and valid='1' and persentase < 100");
  $queryitemsaldo = mysqli_query($konek, "select count(nilai_pending) as jumlah_item from char_saldo_pending where id_temuan='3' and year(log)=$tahun");
  $queryitemkoreksi = mysqli_query($konek, "select count(nilai_pending) as jumlah_item from char_saldo_pending where id_temuan='1' and year(log)=$tahun");
  $queryitemtemuan = mysqli_query($konek, "select count(nilai_pending) as jumlah_item from char_saldo_pending where year(log)=$tahun");

  ?>
<section class="content">
    <div class="col-12">
          <div class="card">
            <div class="card-header bg-primary">
<h3 class="card-title" style="color:white;"><b>Kegiatan Pejabat Hari Ini</b></h3>
</div>
      <div class="tab-content">

            <div class="card"> </div>   
              <div class="card-body">
               <div class="container-fluid">
				  <!-- ./col -->
                  
				  <div class="col-lg-2 col-1" style="max-width:11.5%">
               </div>
             </div>
			</div>	
      </div><!-- /.container-fluid -->
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
          <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
		  
          <div class="col-lg-3 col-6" style="max-width:16.5%;">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Direktur </h4>

                <span>jumlah kegiatan hari ini<h4><?php while ($saldo = mysqli_fetch_array($queryDirektur)) { echo number_format($saldo['total']) ;}?></h4></span>
              </div>
              <!--<div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>-->
              <a href="#" class="small-box-footer">More info </a>
            </div>
          </div>
          <div class="col-lg-3 col-6" style="max-width:16.5%;">
            <!-- small box -->
            <div class="small-box" style="background-color:#b43bff; color:#fff" >
              <div class="inner">
                <h5>Kasubdit Perencanaan</h5>
                <span>jumlah kegiatan hari ini<h4><?php while ($saldo = mysqli_fetch_array($queryPerencanaan)) { echo number_format($saldo['total']) ;}?></h4></span>
              </div>
              <!--<div class="icon">
                <i class="ion ion-person-add"></i>
              </div>-->
              <a href="#" class="small-box-footer">More info </a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
          <div class="col-lg-3 col-6" style="max-width:16.5%;">
            <!-- small box -->
            <div class="small-box bg-info" style="background-color:#fcc317; color:#fff">
              <div class="inner">
                <h4>Kasubdit Teknik</h4>
                <span>jumlah kegiatan hari ini<h4><?php while ($saldo = mysqli_fetch_array($queryTeknik)) { echo number_format($saldo['total']) ;}?></h4></span>
              </div>
              <!--<div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>-->
              <a href="#" class="small-box-footer">More info </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6" style="max-width:16.5%;">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4>Kasubdit Transus</h4>
                <span>jumlah kegiatan hari ini<h4><?php while ($saldo = mysqli_fetch_array($queryTransus)) { echo number_format($saldo['total']) ;}?></h4></span>
              </div>
             <!-- <div class="icon">
                <i class="ion ion-bag"></i>
              </div>-->
              <a href="#" class="small-box-footer">More info </a>
            </div>
        
         <!-- ./col -->
         </div><!-- /.container-fluid -->
          <div class="col-lg-3 col-6" style="max-width:16.5%;">
            <!-- small box -->
            <div class="small-box " style="background-color:rgba(255, 159, 64, 0.9); color:#fff">
              <div class="inner">
                <h4>Kasubdit Kersduk</h4>
                <span>jumlah kegiatan hari ini<h4><?php while ($saldo = mysqli_fetch_array($queryKersduk)) { echo number_format($saldo['total']) ;}?></h4></span>
              </div>
              <!--<div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>-->
              <a href="#" class="small-box-footer">More info </a>
            </div>
          </div>
        <!-- /.row -->
		  <div class="col-lg-3 col-6" style="max-width:16.5%;">
            <!-- small box -->
            <div class="small-box " style="background-color:rgba(54, 162, 235, 0.9); color:#fff">
              <div class="inner">
                <h5>Kasubdit Penagihan</h5>
				<span>jumlah kegiatan hari ini<h4><?php while ($saldo = mysqli_fetch_array($queryPenagihan)) { echo number_format($saldo['total']) ;}?></h4></span>
              </div>
              <!--<div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>-->
              <a href="#" class="small-box-footer">More info </a>
            </div>
          </div>
    </section>
    <!-- /.content -->
		<div class="row">	
			&emsp;<div class="col-2 col-md-12" style="max-width:97.5%;">		
					
				  <!-- /.card-header -->
				  <div class="card-body">
					<div class="row">
						
					</div>
					<!-- /.row -->
				  </div>
				  <!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>
		</section>
		  <div class="col-12">
		<marquee bgcolor="cyan" scrollamount="10" width="100%" behavior="scroll"><b>Silakan diisi jadwal kegiatan hari ini ya, Bestie!!! Jika ada nama pegawai yang belum masuk DAMS, harap hubungi Admin Kersduk ya!</b></marquee><br>

        <div class="row">
          <div class="col-md-6">
            <div class="card card-default">
              <div class="card-header bg-danger">
                <h3 class="card-title">
                  <b>Booking Ruangan</b>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="alert alert-danger alert-dismissible">
                  <h5> Ruang Rapat Direktur</h5>
                  <?php 
								$query2="SELECT a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit where tanggal_mulai >= now() and tanggal_selesai <= now() and tempat = '' or now() BETWEEN tanggal_mulai and tanggal_selesai and tempat = '1'  GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								$thn_keg2 = substr($data['tanggal_mulai'],0,4);
								$bln_keg2 = substr($data['tanggal_mulai'],5,2);
								$tgl_keg2 = substr($data['tanggal_mulai'],8,2);
								$thn_keg3 = substr($data['tanggal_selesai'],0,4);
								$bln_keg3 = substr($data['tanggal_selesai'],5,2);
								$tgl_keg3 = substr($data['tanggal_selesai'],8,2);
								$agenda = $data2['agenda'];
								$nama_subdit = $data2['nama_subdit'];
								if($nama_subdit == "Direktur"){$nama_subdit = "Subbagian Tata Usaha";}else{$nama_subdit;}
								$mulai = substr($data2['tanggal_mulai'],11,5);
								$selesai = substr($data2['tanggal_selesai'],11,5);
								if($agenda ==""){echo "";}else{echo $agenda.'<b>  '.$mulai.' WIB - '.$selesai.' WIB </b> | PIC ('.$nama_subdit.')';}?>
                </div>
                <div class="alert alert-info alert-dismissible">
                  <h5> Ruang Rapat Cakti</h5>
                  <?php 
								$query2="SELECT a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit where tanggal_mulai >= now() and tanggal_selesai <= now() and tempat = '' or now() BETWEEN tanggal_mulai and tanggal_selesai and tempat = '2'  GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								$thn_keg2 = substr($data['tanggal_mulai'],0,4);
								$bln_keg2 = substr($data['tanggal_mulai'],5,2);
								$tgl_keg2 = substr($data['tanggal_mulai'],8,2);
								$thn_keg3 = substr($data['tanggal_selesai'],0,4);
								$bln_keg3 = substr($data['tanggal_selesai'],5,2);
								$tgl_keg3 = substr($data['tanggal_selesai'],8,2);
								$agenda = $data2['agenda'];
								$nama_subdit = $data2['nama_subdit'];
								if($nama_subdit == "Direktur"){$nama_subdit = "Subbagian Tata Usaha";}else{$nama_subdit;}
								$mulai = substr($data2['tanggal_mulai'],11,5);
								$selesai = substr($data2['tanggal_selesai'],11,5);
								if($agenda ==""){echo "";}else{echo $agenda.'<b>  '.$mulai.' WIB - '.$selesai.' WIB </b> | PIC ('.$nama_subdit.')';}?>
                </div>
                <div class="alert alert-warning alert-dismissible">
                  <h5> Ruang Rapat Gijzeling</h5>
                  <?php 
								$query2="SELECT a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit where tanggal_mulai >= now() and tanggal_selesai <= now() and tempat = '' or now() BETWEEN tanggal_mulai and tanggal_selesai and tempat = '3'  GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								$thn_keg2 = substr($data['tanggal_mulai'],0,4);
								$bln_keg2 = substr($data['tanggal_mulai'],5,2);
								$tgl_keg2 = substr($data['tanggal_mulai'],8,2);
								$thn_keg3 = substr($data['tanggal_selesai'],0,4);
								$bln_keg3 = substr($data['tanggal_selesai'],5,2);
								$tgl_keg3 = substr($data['tanggal_selesai'],8,2);
								$agenda = $data2['agenda'];
								$nama_subdit = $data2['nama_subdit'];
								$no = 1;
								if($nama_subdit == "Direktur"){$nama_subdit = "Subbagian Tata Usaha";}else{$nama_subdit;}
								$mulai = substr($data2['tanggal_mulai'],11,5);
								$selesai = substr($data2['tanggal_selesai'],11,5);
								if($agenda ==""){echo "";}else{echo $agenda.'<b>  '.$mulai.' WIB - '.$selesai.' WIB </b> | PIC ('.$nama_subdit.')';};
								?>
                </div>
                <div class="alert alert-success alert-dismissible">
                  <h5> Ruang Broadcast Lt 15</h5>
                  <?php 
								$query2="SELECT a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit where tanggal_mulai >= now() and tanggal_selesai <= now() and tempat = '' or now() BETWEEN tanggal_mulai and tanggal_selesai and tempat = '4'  GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								$thn_keg2 = substr($data['tanggal_mulai'],0,4);
								$bln_keg2 = substr($data['tanggal_mulai'],5,2);
								$tgl_keg2 = substr($data['tanggal_mulai'],8,2);
								$thn_keg3 = substr($data['tanggal_selesai'],0,4);
								$bln_keg3 = substr($data['tanggal_selesai'],5,2);
								$tgl_keg3 = substr($data['tanggal_selesai'],8,2);
								$agenda = $data2['agenda'];
								$nama_subdit = $data2['nama_subdit'];
								if($nama_subdit == "Direktur"){$nama_subdit = "Subbagian Tata Usaha";}else{$nama_subdit;}
								$mulai = substr($data2['tanggal_mulai'],11,5);
								$selesai = substr($data2['tanggal_selesai'],11,5);
								if($agenda ==""){echo "";}else{echo $agenda.'<b>  '.$mulai.' WIB - '.$selesai.' WIB </b> | PIC ('.$nama_subdit.')';}?>
                </div>
				<div class="alert alert-primary alert-dismissible">
                  <h5> Ruang Broadcast Lt 14</h5>
                  <?php 
								$query2="SELECT a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit where tanggal_mulai >= now() and tanggal_selesai <= now() and tempat = '' or now() BETWEEN tanggal_mulai and tanggal_selesai and tempat = '5'  GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								$thn_keg2 = substr($data['tanggal_mulai'],0,4);
								$bln_keg2 = substr($data['tanggal_mulai'],5,2);
								$tgl_keg2 = substr($data['tanggal_mulai'],8,2);
								$thn_keg3 = substr($data['tanggal_selesai'],0,4);
								$bln_keg3 = substr($data['tanggal_selesai'],5,2);
								$tgl_keg3 = substr($data['tanggal_selesai'],8,2);
								$agenda = $data2['agenda'];
								$nama_subdit = $data2['nama_subdit'];
								if($nama_subdit == "Direktur"){$nama_subdit = "Subbagian Tata Usaha";}else{$nama_subdit;}
								$mulai = substr($data2['tanggal_mulai'],11,5);
								$selesai = substr($data2['tanggal_selesai'],11,5);
								if($agenda ==""){echo "";}else{echo $agenda.'<b>  '.$mulai.' WIB - '.$selesai.' WIB </b> | PIC ('.$nama_subdit.')';}?>
                </div>
				<div class="alert alert-secondary alert-dismissible">
                  <h5> Ruang Rapat Auditor</h5>
                  <?php 
								$query2="SELECT a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit where tanggal_mulai >= now() and tanggal_selesai <= now() and tempat = '' or now() BETWEEN tanggal_mulai and tanggal_selesai and tempat = '6'  GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								$thn_keg2 = substr($data['tanggal_mulai'],0,4);
								$bln_keg2 = substr($data['tanggal_mulai'],5,2);
								$tgl_keg2 = substr($data['tanggal_mulai'],8,2);
								$thn_keg3 = substr($data['tanggal_selesai'],0,4);
								$bln_keg3 = substr($data['tanggal_selesai'],5,2);
								$tgl_keg3 = substr($data['tanggal_selesai'],8,2);
								$agenda = $data2['agenda'];
								$nama_subdit = $data2['nama_subdit'];
								if($nama_subdit == "Direktur"){$nama_subdit = "Subbagian Tata Usaha";}else{$nama_subdit;}
								$mulai = substr($data2['tanggal_mulai'],11,5);
								$selesai = substr($data2['tanggal_selesai'],11,5);
								if($agenda ==""){echo "";}else{echo $agenda.'<b>  '.$mulai.' WIB - '.$selesai.' WIB </b> | PIC ('.$nama_subdit.')';}?>
                </div>
				<div class="alert alert-dark alert-dismissible">
                  <h5> Ruang Closing A Lt 14</h5>
                  <?php 
								$query2="SELECT a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit where tanggal_mulai >= now() and tanggal_selesai <= now() and tempat = '' or now() BETWEEN tanggal_mulai and tanggal_selesai and tempat = '7'  GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								$thn_keg2 = substr($data['tanggal_mulai'],0,4);
								$bln_keg2 = substr($data['tanggal_mulai'],5,2);
								$tgl_keg2 = substr($data['tanggal_mulai'],8,2);
								$thn_keg3 = substr($data['tanggal_selesai'],0,4);
								$bln_keg3 = substr($data['tanggal_selesai'],5,2);
								$tgl_keg3 = substr($data['tanggal_selesai'],8,2);
								$agenda = $data2['agenda'];
								$nama_subdit = $data2['nama_subdit'];
								if($nama_subdit == "Direktur"){$nama_subdit = "Subbagian Tata Usaha";}else{$nama_subdit;}
								$mulai = substr($data2['tanggal_mulai'],11,5);
								$selesai = substr($data2['tanggal_selesai'],11,5);
								if($agenda ==""){echo "";}else{echo $agenda.'<b>  '.$mulai.' WIB - '.$selesai.' WIB </b> | PIC ('.$nama_subdit.')';}?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

<div class="col-md-6">
            <div class="card card-default">
              <div class="card-header bg-info">
                <h3 class="card-title">
                  <b>Pegawai ST hari ini</b>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  <div class="text-right">
                    <a style="text-align:center" href="module/dashboard/toexcel_monitoring_st.php" class="btn btn-sm btn-success">
                      Export Excel
                    </a>
                  </div>
                <div class="callout callout-danger">
                  <h5>PIC Subdit Perencanaan</h5>

                  <?php 
								$query3="SELECT a.*,b.subdit from events_pegawai_p2 a LEFT JOIN id_seksi b on a.id_sie=b.id_sie where mulai >= curdate() and selesai <= curdate()+ interval 1 DAY and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Perencanaan Pemeriksaan' or curdate() +INTERVAL 1 DAY  between mulai and selesai +INTERVAL 1 DAY and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Perencanaan Pemeriksaan' order by mulai asc";
								$run3=mysqli_query($konek,$query3);
								$no = 1;
								while($data3= mysqli_fetch_array($run3)){
								//$data3=mysqli_fetch_array($run3);
								$thn_keg2 = substr($data2['mulai'],0,4);
								$bln_keg2 = substr($data2['mulai'],5,2);
								$tgl_keg2 = substr($data2['mulai'],8,2);
								$thn_keg3 = substr($data2['selesai'],0,4);
								$bln_keg3 = substr($data2['selesai'],5,2);
								$tgl_keg3 = substr($data2['selesai'],8,2);
								$agenda = $data3['agenda'];
								$mulai = substr($data3['mulai'],11,5);
								$selesai = substr($data3['selesai'],11,5);
								$idst_perencanaan = $data3['id'];
								?>
								 <td><?php if($agenda ==""){echo "Tidak Ada Jadwal";}else{echo $no.'. '.$agenda.' Waktu '.$mulai.' WIB - '.$selesai.' WIB';} ?>
								 <?php $id = $data['id'];$idst = $data['id'];$kueritim = "select distinct * from pegawai_events,id_seksi where id_events_pgw='$idst_perencanaan' and pegawai_events.id_sie=id_seksi.id_sie";$runtim = mysqli_query($konek,$kueritim);$urut = a;$cek=$datatim['nama'];
							   if($cek=""){echo"";}{echo "";}
							  while($datatim = mysqli_fetch_array($runtim)){?><br>&emsp;<?php echo $urut; ?>.&nbsp; <?php echo ucwords(strtolower($datatim['nama'])); ?> (<?php echo $datatim['seksi']; ?>)
								<?php
								$urut++;}?><br></td>
								<?php
								$no++;
								}
								?>
								<td> 
            </td>
                </div>
                <div class="callout callout-info">
                  <h5>PIC Subdit Teknik</h5>

                  <?php 
								$query4="SELECT a.*,b.subdit from events_pegawai_p2 a LEFT JOIN id_seksi b on a.id_sie=b.id_sie where mulai >= curdate() and selesai <= curdate()+ interval 1 DAY and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Teknik dan Pengendalian Pemeriksaan' or curdate() +INTERVAL 1 DAY  between mulai and selesai +INTERVAL 1 DAY  and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Teknik dan Pengendalian Pemeriksaan' order by mulai asc";
								$run4=mysqli_query($konek,$query4);
								$no = 1;
								while($data4= mysqli_fetch_array($run4)){
								//$data4=mysqli_fetch_array($run2);
								$thn_keg2 = substr($data2['mulai'],0,4);
								$bln_keg2 = substr($data2['mulai'],5,2);
								$tgl_keg2 = substr($data2['mulai'],8,2);
								$thn_keg3 = substr($data2['selesai'],0,4);
								$bln_keg3 = substr($data2['selesai'],5,2);
								$tgl_keg3 = substr($data2['selesai'],8,2);
								$agenda = $data4['agenda'];
								$mulai = substr($data4['mulai'],11,5);
								$selesai = substr($data4['selesai'],11,5);
								$idst_teknik = $data4['id'];
								?>
								<td><?php if($agenda ==""){echo "Tidak Ada Jadwal";}else{echo $no.'. '.$agenda.' Waktu '.$mulai.' WIB - '.$selesai.' WIB';} ?>
								 <?php $id = $data['id'];$idst = $data['id'];$kueritim = "select distinct * from pegawai_events,id_seksi where id_events_pgw='$idst_teknik' and pegawai_events.id_sie=id_seksi.id_sie";$runtim = mysqli_query($konek,$kueritim);$urut = a;$cek=$datatim['nama'];
							   if($cek=""){echo"";}{echo "";}
							  while($datatim = mysqli_fetch_array($runtim)){?><br>&emsp;<?php echo $urut; ?>.&nbsp; <?php echo ucwords(strtolower($datatim['nama'])); ?> (<?php echo $datatim['seksi']; ?>)
								<?php
								$urut++;}?><br></td>
								<?php
								$no++;
								}
								?>
                </div>
                <div class="callout callout-warning">
                  <h5>PIC Subdit Transus</h5>

                  <?php 
								$query5="SELECT a.*,b.subdit from events_pegawai_p2 a LEFT JOIN id_seksi b on a.id_sie=b.id_sie where mulai >= curdate() and selesai <= curdate()+ interval 1 DAY and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Pemeriksaan Transaksi Khusus' or curdate() +INTERVAL 1 DAY  between mulai and selesai +INTERVAL 1 DAY  and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Pemeriksaan Transaksi Khusus' order by mulai asc";
								$run5=mysqli_query($konek,$query5);
								$no = 1;
								while($data5= mysqli_fetch_array($run5)){
								//$data2=mysqli_fetch_array($run2);
								$thn_keg2 = substr($data2['mulai'],0,4);
								$bln_keg2 = substr($data2['mulai'],5,2);
								$tgl_keg2 = substr($data2['mulai'],8,2);
								$thn_keg3 = substr($data2['selesai'],0,4);
								$bln_keg3 = substr($data2['selesai'],5,2);
								$tgl_keg3 = substr($data2['selesai'],8,2);
								$agenda = $data5['agenda'];
								$mulai = substr($data5['mulai'],11,5);
								$selesai = substr($data5['selesai'],11,5);
								$idst_transus = $data5['id'];
								?>
								<td><?php if($agenda ==""){echo "Tidak Ada Jadwal";}else{echo $no.'. '.$agenda.' Waktu '.$mulai.' WIB - '.$selesai.' WIB';} ?>
								 <?php $id = $data['id'];$idst = $data['id'];$kueritim = "select distinct * from pegawai_events,id_seksi where id_events_pgw='$idst_transus' and pegawai_events.id_sie=id_seksi.id_sie";$runtim = mysqli_query($konek,$kueritim);$urut = a;$cek=$datatim['nama'];
							   if($cek=""){echo"";}{echo "";}
							  while($datatim = mysqli_fetch_array($runtim)){?><br>&emsp;<?php echo $urut; ?>.&nbsp; <?php echo ucwords(strtolower($datatim['nama'])); ?> (<?php echo $datatim['seksi']; ?>)
								<?php
								$urut++;}?><br></td>
								<?php
								$no++;
								}
								?>
                </div>
                <div class="callout callout-success">
                  <h5>PIC Subdit Kersduk</h5>

                  <?php 
								$query6="SELECT a.*,b.subdit from events_pegawai_p2 a LEFT JOIN id_seksi b on a.id_sie=b.id_sie where mulai >= curdate() and selesai <= curdate()+ interval 1 DAY and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan' or curdate() +INTERVAL 1 DAY  between mulai and selesai +INTERVAL 1 DAY  and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan' order by mulai asc";
								$run6=mysqli_query($konek,$query6);
								$no = 1;
								while($data6= mysqli_fetch_array($run6)){
								//$data2=mysqli_fetch_array($run2);
								$thn_keg2 = substr($data2['mulai'],0,4);
								$bln_keg2 = substr($data2['mulai'],5,2);
								$tgl_keg2 = substr($data2['mulai'],8,2);
								$thn_keg3 = substr($data2['selesai'],0,4);
								$bln_keg3 = substr($data2['selesai'],5,2);
								$tgl_keg3 = substr($data2['selesai'],8,2);
								$agenda = $data6['agenda'];
								$mulai = substr($data6['mulai'],11,5);
								$selesai = substr($data6['selesai'],11,5);
								$idst_kersduk = $data6['id'];?>
								<td><?php if($agenda ==""){echo "Tidak Ada Jadwal";}else{echo $no.'. '.$agenda.' Waktu '.$mulai.' WIB - '.$selesai.' WIB';} ?>
								 <?php $id = $data['id'];$idst = $data['id'];$kueritim = "select distinct * from pegawai_events,id_seksi where id_events_pgw='$idst_kersduk' and pegawai_events.id_sie=id_seksi.id_sie";$runtim = mysqli_query($konek,$kueritim);$urut = a;$cek=$datatim['nama'];
							   if($cek=""){echo"";}{echo "";}
							  while($datatim = mysqli_fetch_array($runtim)){?><br>&emsp;<?php echo $urut; ?>.&nbsp; <?php echo ucwords(strtolower($datatim['nama'])); ?> (<?php echo $datatim['seksi']; ?>)
								<?php
								$urut++;}?><br></td>
								<?php
								$no++;
								}
								?>
                </div>
				<div class="callout callout-danger">
                  <h5>PIC Subdit Penagihan</h5>

                  <?php 
								$query7="SELECT a.*,b.subdit from events_pegawai_p2 a LEFT JOIN id_seksi b on a.id_sie=b.id_sie where mulai >= curdate() and selesai <= curdate()+ interval 1 DAY and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Penagihan' or curdate() +INTERVAL 1 DAY  between mulai and selesai +INTERVAL 1 DAY and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Penagihan' or mulai >= curdate() and selesai <= curdate()+ interval 1 DAY and status = '1' and jenis_st ='Lainnya' and subdit = 'Direktur' or curdate() +INTERVAL 1 DAY  between mulai and selesai +INTERVAL 1 DAY  and status = '1' and jenis_st ='Lainnya' and subdit = 'Direktur' order by mulai asc";
								$run7=mysqli_query($konek,$query7);
								$no = 1;
								//$data7=mysqli_fetch_array($run7);
								while($data7= mysqli_fetch_array($run7)){
								$thn_keg2 = substr($data2['mulai'],0,4);
								$bln_keg2 = substr($data2['mulai'],5,2);
								$tgl_keg2 = substr($data2['mulai'],8,2);
								$thn_keg3 = substr($data2['selesai'],0,4);
								$bln_keg3 = substr($data2['selesai'],5,2);
								$tgl_keg3 = substr($data2['selesai'],8,2);
								$agenda = $data7['agenda'];
								$mulai = substr($data7['mulai'],11,5);
								$selesai = substr($data7['selesai'],11,5);
								$idst_penagihan = $data7['id'];?>
								<td><?php if($agenda ==""){echo "Tidak Ada Jadwal";}else{echo $no.'. '.$agenda.' Waktu '.$mulai.' WIB - '.$selesai.' WIB';} ?>
								 <?php $id = $data['id'];$idst = $data['id'];$kueritim = "select distinct * from pegawai_events,id_seksi where id_events_pgw='$idst_penagihan' and pegawai_events.id_sie=id_seksi.id_sie";$runtim = mysqli_query($konek,$kueritim);$urut = a;$cek=$datatim['nama'];
							   if($cek=""){echo"";}{echo "";}
							  while($datatim = mysqli_fetch_array($runtim)){?><br>&emsp;<?php echo $urut; ?>.&nbsp; <?php echo ucwords(strtolower($datatim['nama'])); ?> (<?php echo $datatim['seksi']; ?>)
								<?php
								$urut++;}?><br></td>
								<?php
								$no++;
								}
								?>
                </div>
				<div class="callout callout-danger">
                  <h5>PIC Subdit Penilaian II</h5>

                  <?php 
								$query8="SELECT a.*,b.subdit from events_pegawai_p2 a LEFT JOIN id_seksi b on a.id_sie=b.id_sie where mulai >= curdate() and selesai <= curdate()+ interval 1 DAY and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Penilaian II' or curdate() +INTERVAL 1 DAY  between mulai and selesai +INTERVAL 1 DAY  and status = '1' and jenis_st ='Lainnya' and subdit = 'SubDirektorat Penilaian II' order by mulai asc";
								$run8=mysqli_query($konek,$query8);
								$no = 1;
								//$data7=mysqli_fetch_array($run7);
								while($data7= mysqli_fetch_array($run8)){
								$thn_keg2 = substr($data2['mulai'],0,4);
								$bln_keg2 = substr($data2['mulai'],5,2);
								$tgl_keg2 = substr($data2['mulai'],8,2);
								$thn_keg3 = substr($data2['selesai'],0,4);
								$bln_keg3 = substr($data2['selesai'],5,2);
								$tgl_keg3 = substr($data2['selesai'],8,2);
								$agenda = $data7['agenda'];
								$mulai = substr($data7['mulai'],11,5);
								$selesai = substr($data7['selesai'],11,5);
								$idst_penagihan = $data7['id'];?>
								<td><?php if($agenda ==""){echo "Tidak Ada Jadwal";}else{echo $no.'. '.$agenda.' Waktu '.$mulai.' WIB - '.$selesai.' WIB';} ?>
								 <?php $id = $data['id'];$idst = $data['id'];$kueritim = "select distinct * from pegawai_events,id_seksi where id_events_pgw='$idst_penagihan' and pegawai_events.id_sie=id_seksi.id_sie";$runtim = mysqli_query($konek,$kueritim);$urut = a;$cek=$datatim['nama'];
							   if($cek=""){echo"";}{echo "";}
							  while($datatim = mysqli_fetch_array($runtim)){?><br>&emsp;<?php echo $urut; ?>.&nbsp; <?php echo ucwords(strtolower($datatim['nama'])); ?> (<?php echo $datatim['seksi']; ?>)
								<?php
								$urut++;}?><br></td>
								<?php
								$no++;
								}
								?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
  <script src="js/Chart.js"></script>

<script>
 var ctx = document.getElementById('chart_usulan').getContext('2d');
    var myLine = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php while ($j = mysqli_fetch_array($querydashboard)) { echo '"' . $j['jenis'] . '",';}?>],
            datasets: [{
                label:'Surat Tugas ',
                 data: [<?php while ($t = mysqli_fetch_array($querydashboard2)) { echo '"' . $t['total'] . '",';}?>],
                backgroundColor: ['rgba(255, 99, 132, 0.4)',
                                'rgba(54, 162, 235, 0.4)',
                                'rgba(255, 206, 86, 0.4)',
                                'rgba(75, 192, 192, 0.4)',
                                'rgba(153, 102, 255, 0.4)',
                                'rgba(255, 159, 64, 0.4)',
                                'rgba(255, 99, 132, 0.4)',
                                'rgba(54, 162, 235, 0.4)',
                                'rgba(255, 206, 86, 0.4)',
                                'rgba(75, 192, 192, 0.4)',
                                'rgba(153, 102, 255, 0.4)',
                                'rgba(255, 159, 64, 0.4)'],
           
                borderColor: ['rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'],
               
            }]
        },
// Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<script>
 var ctx = document.getElementById('chart_lhpb').getContext('2d');
    var myLine = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php while ($lhpb = mysqli_fetch_array($querychartlhpb)) { echo '"' . $lhpb['tahun_terbit'] . '",';}?>],
            datasets: [{
                label:'LHPB Terbit ',
                 data: [<?php while ($lhpb = mysqli_fetch_array($querychartlhpb2)) { echo '"' . $lhpb['total'] . '",';}?>],
                backgroundColor: [
                                'rgba(153, 102, 255, 0.4)', 
                                'rgba(255, 159, 64, 0.4)',
                                'rgba(255, 99, 132, 0.4)',
                                'rgba(54, 162, 235, 0.4)',
                                'rgba(255, 99, 132, 0.4)',
                                'rgba(54, 162, 235, 0.4)',
                                'rgba(255, 206, 86, 0.4)',
                                'rgba(75, 192, 192, 0.4)',
                                'rgba(153, 102, 255, 0.4)',
                                'rgba(255, 206, 86, 0.4)',
                                'rgba(75, 192, 192, 0.4)',
                                'rgba(255, 159, 64, 0.4)'],
           
                borderColor: ['rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'],
               
            }]
        },
// Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<script>
 var ctx = document.getElementById('chart_saldo').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: [<?php while ($saldo = mysqli_fetch_array($querychartsaldo)) { echo '"' . $saldo['bulan'] . '",';}?>],
            datasets: [{
                label:'Saldo Pending Item Per Bulan ',
                lineTension: 0,
                fill: true,
                borderColor: 'rgba(54, 162, 235, 0.4)',
                backgroundColor: 'rgba(52, 207, 70, 0.4)',
                borderDash: [2, 2],
                pointBorderColor: 'rgba(54, 162, 235, 0.4)',
                pointBackgroundColor: 'rgba(54, 162, 235, 0.4)',
                pointRadius: 5,
                pointHoverRadius: 10,
                pointHitRadius: 30,
                pointBorderWidth: 2,
                pointStyle: 'rectRounded',
                   data: [<?php while ($saldo2 = mysqli_fetch_array($querychartsaldo2)) { echo '"' . $saldo2['total'] . '",';}?>],
            }]
        },
// Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<script>
 var ctx = document.getElementById('chart_temuan').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',
        // The data for our dataset
        data: {
            labels: [<?php while ($temuan = mysqli_fetch_array($querycharttemuan)) { echo '"' . $temuan['kategori'] . '",';}?>],
            datasets: [{
                label:'Surat Tugas ',
                 data: [<?php while ($temuan = mysqli_fetch_array($querycharttemuan2)) { echo '"' . $temuan['total'] . '",';}?>],
                backgroundColor: ['rgba(255, 99, 132, 0.6)',
                                'rgba(54, 162, 235, 0.4)',
                                'rgba(255, 206, 86, 0.6)',
                                'rgba(52, 207, 70, 0.4)',
                                'rgba(153, 102, 255, 0.6)',
                                'rgba(255, 159, 64, 0.4)',
                                'rgba(75, 192, 192, 0.6)',
                                'rgba(192, 192, 192, 0.4)',
                                'rgba(70, 130, 180, 0.6)',
                                'rgba(250, 69, 1, 0.4)',
                                'rgba(221, 160, 221, 0.6)',
                                ],
           
                borderColor: ['rgba(255, 99, 132, 0.1)',
                                'rgba(54, 162, 235, 0.4)',
                                'rgba(255, 206, 86, 0.6)',
                                'rgba(52, 207, 70, 0.4)',
                                'rgba(153, 102, 255, 0.6)',
                                'rgba(255, 159, 64, 0.4)',
                                'rgba(75, 192, 192, 0.6)',
                                'rgba(192, 192, 192, 0.4)',
                                'rgba(70, 130, 180, 0.1)',
                                'rgba(250, 69, 1, 0.4)',
                                'rgba(221, 160, 221, 0.6)',],
               
            }]
        },
// Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<script>
 var ctx = document.getElementById('chart_koreksi').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php while ($koreksi = mysqli_fetch_array($querychartkoreksi)) { echo '"' . $koreksi['tahun'] . '",';}?>],
            datasets: [{
                label:'Koreksi Cost Recovery Per Tahun',
                 data: [<?php while ($koreksi = mysqli_fetch_array($querychartkoreksi2)) { echo '"' . $koreksi['total'] . '",';}?>],
                backgroundColor: [
                                'rgba(255, 0, 0, 0.4)',
                                'rgba(153, 102, 255, 0.4)', 
                                'rgba(255, 159, 64, 0.4)',
                                'rgba(255, 99, 132, 0.4)',
                                'rgba(54, 162, 235, 0.4)',
                                'rgba(255, 99, 132, 0.4)',
                                'rgba(54, 162, 235, 0.4)',
                                'rgba(255, 206, 86, 0.4)',
                                'rgba(75, 192, 192, 0.4)',
                                'rgba(153, 102, 255, 0.4)',
                                'rgba(255, 206, 86, 0.4)',
                                'rgba(75, 192, 192, 0.4)',
                                'rgba(255, 159, 64, 0.4)'],
           
                borderColor: ['rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'],
               
            }]
        },
// Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<!DOCTYPE html>
 <?php 
  include("conn.php");
  $tahun = $_POST['tahun'];
  ?>
<html lang="en">
<head>
  <meta http-equiv="refresh" content="300">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Monitoring Booking Ruangan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="100" width="100">
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Booking Ruangan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Booking Ruangan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-home"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><b>Ruang Rapat Cakti</b></span>
				<?php 
								$query2="SELECT a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit where tanggal_mulai >= now() and tanggal_selesai <= now() and tempat = '' or now() BETWEEN tanggal_mulai and tanggal_selesai and tempat = '2'  GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								$agenda = $data2['agenda'];
								if($agenda ==""){echo "<span class='badge badge-success'>Tersedia</span>";}else{echo "<span class='badge badge-danger'>Sedang dipakai</span>";}?>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ruang Rapat Direktur</span>
                 <?php 
								$query2="SELECT a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit where tanggal_mulai >= now() and tanggal_selesai <= now() and tempat = '' or now() BETWEEN tanggal_mulai and tanggal_selesai and tempat = '1'  GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								$agenda = $data2['agenda'];
								if($agenda ==""){echo "<span class='badge badge-success'>Tersedia</span>";}else{echo "<span class='badge badge-danger'>Sedang dipakai</span>";}?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-microphone"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ruang Broadcast Lt 15</span>
                 <?php 
								$query2="SELECT a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit where tanggal_mulai >= now() and tanggal_selesai <= now() and tempat = '' or now() BETWEEN tanggal_mulai and tanggal_selesai and tempat = '4'  GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								$agenda = $data2['agenda'];
								if($agenda ==""){echo "<span class='badge badge-success'>Tersedia</span>";}else{echo "<span class='badge badge-danger'>Sedang dipakai</span>";}?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ruang Rapat Gijzeling</span>
                <?php 
								$query2="SELECT a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit where tanggal_mulai >= now() and tanggal_selesai <= now() and tempat = '' or now() BETWEEN tanggal_mulai and tanggal_selesai and tempat = '3'  GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								$agenda = $data2['agenda'];
								if($agenda ==""){echo "<span class='badge badge-success'>Tersedia</span>";}else{echo "<span class='badge badge-danger'>Sedang dipakai</span>";}?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card">

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title"><b>Informasi Agenda Day</b></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
					  <th>No</th>
                      <th>Tempat</th>
                      <th>Jam Mulai</th>
                      <th>Jam Selesai</th>
                      <th>Agenda</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
        include("bulan.php");
          $query = "SELECT a.id,
case when a.tempat = 1 then 'Ruang Rapat Direktur' 
when a.tempat = 2 then 'Ruang Rapat Cakti' 
when a.tempat = 3 then 'Ruang Rapat Gijzeling' 
when a.tempat = 4 then 'Ruang Broadcast Lt 15'
when a.tempat = 5 then 'Ruang Broadcast Lt 14'
when a.tempat = 6 then 'Ruang Rapat Auditor'
else 'Ruang Closing A Lt 14' end AS tempat,
a.tanggal_mulai,
a.tanggal_selesai,
a.agenda,
a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit nama_subdit from booking_ruang a left join id_seksi b on a.subdit = b.id_subdit 
WHERE 
DATE(a.tanggal_mulai) = CURDATE() 
AND DATE(a.tanggal_selesai) = CURDATE() 
OR (CURDATE() BETWEEN DATE(a.tanggal_mulai) AND DATE(a.tanggal_selesai))
GROUP BY a.id,a.tempat,a.tanggal_mulai,a.tanggal_selesai,a.agenda,a.subdit,a.peminjam,a.peserta,a.keterangan,a.created_by,b.subdit order by tanggal_mulai asc";
          $run = mysqli_query($konek,$query);
          $no=1;
		  $rowLimit = 3;
          while($data= mysqli_fetch_array($run)){
		  if($no <= $rowLimit){
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
                <?php echo $data['tempat']; ?>
              </td>
              <td><?php echo substr($data['tanggal_mulai'],11,5); ?> WIB </td>
			  <td><?php echo substr($data['tanggal_selesai'],11,5); ?> WIB</td>
              <td> <?php echo $data['agenda']; ?></td>
          </tr>
        <?php
		}
          $no++;
          }
        ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">Aditya Rangga Prasetyo</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>

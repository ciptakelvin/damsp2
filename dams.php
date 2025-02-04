<!DOCTYPE html>
<?php
include("conn.php");
@session_start();
$timeout = 1; // Set timeout menit
$logout_redirect_url = "index.php"; // Set logout URL
 
$timeout = $timeout * 1800; // Ubah menit ke detik
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Waktu Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
$ses_id = $_SESSION['id'];
$user = $_SESSION['nip9'];

if(($ses_id == '') && ($user == '')) 
{
	header("Location:index.php");
}

$user1=$_SESSION['user'];
$query = "select * from pegawai where nip9 = '$user'";
$run =mysqli_query($konek,$query);
$data=mysqli_fetch_array($run);
$id_peg = $data['id_peg'];
$nipsikka = $data['nip9'];
$seksi = $data['id_sie'];
$nama = $data['nama'];
$panggil = $data['panggil'];
$sifat = $data['sifat'];
$jenis_user = $data['jenis_user'];
if($user=="000000001")
{
	$jabatan = "Kepala";
}
else if($user=="000000002")
{
	$jabatan = "";
}
else
{
	$jabatan = $data['jabatan'];
}
$gambar = $data['gambar'];
//echo $nama;
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daily Activity Monitoring System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <!-- Ionicons 
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- Google Font: Source Sans Pro 
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
  <!-- DataTables -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css">
    <!-- JQVMap -->
  <link rel="stylesheet" href="css/jqvmap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="css/OverlayScrollbars.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="css/bootstrap-duallistbox.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="css/summernote-bs4.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <!-- /.navbar -->
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><img src="img/sidebar.png" width="30px" height="30px"></a>
      </li>
    </ul>
	 <div class="row">
          <div class="col-sm-12">
            <h5 class="m-0 text-dark">Daily Activity Monitoring System</h5>
          </div><!-- /.col -->
     </div><!-- /.row -->

    <!-- Right navbar links -->
	<?php
		include("breadcrumb.php");
	?>
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
        <li class="breadcrumb-item active"><?php echo $bc;?></li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="img/dams1.png"
           alt="Dams Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">DAMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/<?php echo $gambar; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="?module=profil" class="d-block"><?php echo substr($nama,0,15); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
	  <?php 
      // cek jika yang login adalah admin
      if($jenis_user == "admin" or $jenis_user == "dir" or $jenis_user == "admin_dir" or $jenis_user == "admin_pel"){ ?>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="?module=dashboard&v=1" class="nav-link">
              <img src="img/15.png" width="25" height="25">
              <p>
                Beranda
              </p>
            </a>
          </li>
          <?php }?>
      <?php 
      //cek jika yang login adalah admin
      if($jenis_user == "admin" or $jenis_user == "dir"){ ?>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="?module=dashboard_direktur_utama&v=1" class="nav-link">
              <img src="img/16.png" width="25" height="25">
              <p>
                Jadwal Pejabat
              </p>
            </a>
          </li>
          <?php }?> 
      <?php 
      // cek jika yang login adalah admin
      if($jenis_user == "admin"){ ?>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="?module=dashboard_direktur&v=1" class="nav-link">
              <img src="img/16.png" width="25" height="25">
              <p>
                Rencana Jadwal Pejabat
              </p>
            </a>
          </li>
          <?php }?>
             <?php 
          // cek jika yang login adalah admin
          if($jenis_user == "admin"){ ?>
            <a href="?module=jadwal_direktur" class="nav-link">
              <img src="img/input jadwal RB.png" width="25" height="25">
              <p>
                Input Agenda Pejabat
              </p>
            </a>
          </li>
          <?php }?>
                <?php 
      // cek jika yang login adalah admin
      if($jenis_user == "admin" or $jenis_user == "admin_dir" or $jenis_user == "admin_pel" or $jenis_user == "admin_spd"){ ?>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="?module=penugasan_pegawai_st&v=1" class="nav-link">
              <img src="img/surat.png" width="25" height="25">
              <p>
                Penugasan Pegawai ST
              </p>
            </a>
          </li>
          <?php }?>
          <?php 
      // cek jika yang login adalah admin
      if($jenis_user == "admin" or $jenis_user == "admin_dir" or $jenis_user == "admin_pel" or $jenis_user == "admin_spd"){ ?>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="?module=booking_ruang&v=1" class="nav-link">
              <img src="img/5.png" width="25" height="25">
              <p>
                Booking Ruangan P2
              </p>
            </a>
          </li>
          <?php }?>
		  <?php
		  if($jabatan == "Kepala")
		  {
		  ?>
          <li class="nav-item">
            <a href="?module=rki_pelaksana" class="nav-link">
              <img src="img/rko.png" width="25" height="25">
              <p>
                Uraian RKI Pelaksana
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?module=realisasi_pelaksana" class="nav-link">
              <img src="img/rko.png" width="25" height="25">
              <p>
                Realisasi RKI Pelaksana
              </p>
            </a>
          </li>
		  <?php
		  }
		  else
		  {
		  ?>
       <?php 
      // cek jika yang login adalah admin
      if($jenis_user == "admin" or $jenis_user == "user"){ ?>
          <li class="nav-item">
            <a href="?module=rko" class="nav-link">
              <img src="img/4.png" width="25" height="25">
              <p>
                RKO
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="?module=kegiatan" class="nav-link">
              <img src="img/9_.png" width="25" height="25">
              <p>
                Kegiatan Subdit
              </p>
            </a>
          </li>
          <li class="nav-item">
          <?php }?>
          <?php 
          // cek jika yang login adalah admin
          if($jenis_user == "admin"){ ?>
		  <li class="nav-item">
            <a href="?module=kepegawaian" class="nav-link">
              <img src="img/6.png" width="25" height="25">
              <p>
                Kepegawaian
              </p>
            </a>
          </li>
		  <?php
		  }
		  ?>
		<?php 
          // cek jika yang login adalah admin
          if($jenis_user == "admin" or $jenis_user == "admin_spd"){ ?>
		  <li class="nav-item">
            <a href="?module=spd" class="nav-link">
              <img src="img/6.png" width="25" height="25">
              <p>
                SPD
              </p>
            </a>
          </li>
		  <?php
		  }
		  ?>
	       <?php }?>
   
		   
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <img src="img/7.png" width="25" height="25">
              <p>
                Keluar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
      
    </section>
    <!-- Main content -->
    <section class="content">
      <?php

if(isset($_GET['halaman']))
{
  $halaman = $_GET['halaman'];
}else{
  $page=1;
}
if($halaman>1){
  $halaman_awal = ($halaman * $batas) - $batas;
}else{
$halaman_awal = 0;  
} ?>
	<?php
		include("content.php");
	?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2025 Kerjasama dan Dukungan Pemeriksaan.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>



<!-- OPTIONAL SCRIPTS -->

<!-- ChartJS -->
<script src="js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="js/sparkline.js"></script>
<!-- JQVMap -->
<script src="js/jquery.vmap.min.js"></script>
<script src="js/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="js/jquery.knob.min.js"></script>

<!-- daterangepicker -->
<script src="js/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Summernote -->
<script src="js/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="js/dashboard4.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>

<!-- Select2 -->
<script src="js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="js/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="js/moment.min.js"></script>
<script src="js/jquery.inputmask.bundle.min.js"></script>
<!-- bootstrap color picker -->
<script src="js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=".js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="js/bootstrap-switch.min.js"></script>
<!-- InputMask -->
<script src="js/moment.min.js"></script>
<script src="js/jquery.inputmask.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="js/bs-custom-file-input.min.js"></script>
<!-- bs-custom-file-input -->
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
  <script>
function showPilihan1(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState== 4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getPilihan1.php?q="+str,true);
  xmlhttp.send();
}
</script>
</body>
</html>

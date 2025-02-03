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
$query = "select * from pegawai where nip9 = '$user'";
$run =mysqli_query($konek,$query);
$data=mysqli_fetch_array($run);
$id_peg = $data['id_peg'];
$nipsikka = $data['nip9'];
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
                            <!-- /.card-header -->						  
<div class="col-12">
          <div class="card">
            <div class="card-header">

                <div class="text-right">
                    <a href="#" class="btn btn-sm btn-info">
                      Jadwal Pejabat
                    </a>
                    <a href="?module=pencarian_dashboard_direktur_utama" class="btn btn-sm btn-success">
                      Cari Jadwal
                    </a>
                  </div>
            </div>
			<div class="card-header p-2">
                <ul class="nav nav-pills">
                	<?php 
     				 // cek jika yang login adalah admin
      				if($jenis_user == "admin" or $jenis_user == "dir"){ ?>
                  <li class="nav-item"><a class="nav-link active" href="#direktur" data-toggle="tab">Direktur</a></li>
                  <?php }?>
                  <?php 
     				 // cek jika yang login adalah admin
      				if($jenis_user == "admin" or $jenis_user == "dir"){ ?>
                  <li class="nav-item"><a class="nav-link" href="#perencanaan" data-toggle="tab">Kasubdit Perencanaan</a></li>
                  <?php }?>
                  <?php 
     				 // cek jika yang login adalah admin
      				if($jenis_user == "admin" or $jenis_user == "dir"){ ?>
                  <li class="nav-item"><a class="nav-link" href="#teknik" data-toggle="tab">Kasubdit Teknik</a></li>
                  <?php }?>
                  <?php 
     				 // cek jika yang login adalah admin
      				if($jenis_user == "admin" or $jenis_user == "dir"){ ?>
                  <li class="nav-item"><a class="nav-link" href="#transus" data-toggle="tab">Kasubdit Transus</a></li>
                  <?php }?>
                  <?php 
     				 // cek jika yang login adalah admin
      				if($jenis_user == "admin" or $jenis_user == "dir"){ ?>
                  <li class="nav-item"><a class="nav-link" href="#kersduk" data-toggle="tab">Kasubdit Kersduk</a></li>
                  <?php }?>
                  <?php 
     				 // cek jika yang login adalah admin
      				if($jenis_user == "admin" or $jenis_user == "dir"){ ?>
                  <li class="nav-item"><a class="nav-link" href="#penagihan" data-toggle="tab">Kasubdit Penagihan</a></li>
                  <?php }?>
                </ul>
              </div>
                 <div class="card-body">
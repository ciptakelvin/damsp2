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
                  </div>
            </div>
                 <div class="card-body">
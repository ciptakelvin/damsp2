<?php
//membuat koneksi ke database
include 'conn.php';

//variabel nim yang dikirimkan form.php
$nama = $_GET['nama'];
//mengambil data
$query = mysqli_query($konek, "select * from pegawai where nama='$nama'");
$run = mysqli_fetch_array($query);
$data = array(
            'id_peg'      =>  $run['id_peg'],
            'nip18'      =>  $run['nip18'],
            'id_sie'      =>  $run['id_sie']);

//tampil data
echo json_encode($data);
?>
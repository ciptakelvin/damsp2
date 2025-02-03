<?php
include("conn.php");

$id_rp = $_POST['id_rp'];
$nama = $_POST['nama'];
$nip9= $_POST['nip9'];
$nip18= $_POST['nip18'];
//$tanggal= $_POST['tanggal'];
$jab= $_POST['jab'];
$panggol = $_POST['panggol'];
$wa= $_POST['wa'];
$pass= $_POST['pass'];
$id_sie= $_POST['id_sie'];
$jenis_user = $_POST['jenis_user'];
$status = $_POST['status'];

$query = "update pegawai set nip9='$nip9', nip18='$nip18', nama='$nama', jabatan = '$jab', wa='$wa', pass='$pass', status='$status', jenis_user='$jenis_user', id_sie='$id_sie' where id_peg='$id_rp'";
$run = mysqli_query($konek,$query);

if($run)
{
?>
		<script language="JavaScript">
            alert('Data Pegawai berhasil diedit');
            document.location='../../dams.php?module=kepegawaian';
        </script>
<?php
}
else
{
	?>
		<script language="JavaScript">
            alert('Data Pegawai GAGAL diedit');
            document.location='../../dams.php?module=view_pegawai';
        </script>
<?php
}
?>
<?php
include("conn.php");

$nama = $_POST['nama'];
$nip9= $_POST['nip9'];
$nip18= $_POST['nip18'];
//$tanggal= $_POST['tanggal'];
$jab= $_POST['jab'];
$panggol = $_POST['panggol'];
$wa= $_POST['wa'];
$password= $_POST['password'];
$id_sie= $_POST['id_sie'];
$jenis_user = $_POST['jenis_user'];
$status = $_POST['status'];

$query = "INSERT INTO PEGAWAI(nip9, nip18, nama, panggol, id_sie, wa, pass, jabatan, status, jenis_user) VALUES ('$nip9','$nip18','$nama','$panggol','$id_sie','$wa','$password','$jab','$status','$jenis_user')";
$run = mysqli_query($konek,$query);

if($run)
{
?>
		<script language="JavaScript">
            alert('Pegawai baru berhasil ditambah');
            document.location='../../dams.php?module=kepegawaian';
        </script>
<?php
}
else
{
	?>
		<script language="JavaScript">
            alert('Pegawai baru GAGAL ditambah');
            document.location='../../dams.php?module=input_pegawai';
        </script>
<?php
}
?>
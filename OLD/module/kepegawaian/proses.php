<?php
include("../../conn.php");

$namapeg = $_POST['namapeg'];
$nip9= $_POST['nip9'];
$nip18= $_POST['nip18'];
//$tanggal= $_POST['tanggal'];
$seksi= $_POST['seksi'];
$jabatan= $_POST['jabatan'];
$panggol= $_POST['panggol'];

$query = "INSERT INTO pegawai(nip9, nip18, nama, panggol, id_sie, pass, jabatan, status) VALUES ('$nip9','$nip18',UPPER('$namapeg'),'$panggol','$seksi','$nip9','$jabatan','1')";
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
            document.location='../../dams.php?module=kepegawaian';
        </script>
<?php
}
?>
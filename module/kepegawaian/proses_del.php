<?php
include("conn.php");
$id = $_GET['id'];

$query = "update pegawai set status = '0' where id_peg ='$id'";
$run = mysqli_query($konek,$query);

if($run)
{
?>
		<script language="JavaScript">
            alert('Pegawai baru berhasil dihapus');
            document.location='dams.php?module=kepegawaian';
        </script>
<?php
	//header("Location : ?module=kepegawaian");
}
?>
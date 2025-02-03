<?php
include "../../conn.php";
$idrko = $_POST['idrko'];
$iduraian = $_POST['iduraian'];
$pic = $_POST['pic'];
$peg = $_POST['peg'];


$query = "insert into uraian_rki (id_rko,id_uraian,pic,id_peg, status) values ('$idrko','$iduraian','$pic','$peg','1')";
$run=mysqli_query($konek,$query);

if($run)
{
	header("Location:../../dams.php?module=input_rki");
}
?>
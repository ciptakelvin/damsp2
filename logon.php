<?php
include"conn.php";

$user = $_POST['user'];
$pass = $_POST['pass'];
$jenis_user = $_POST['jenis_user'];
//echo $user;
$query = "select * from pegawai where nip9 = '$user'";
$run = mysqli_query($konek,$query);
$data=mysqli_fetch_array($run);
if(($user == '' or $user == null) && ($pass == '' or $pass == null))
{
Header("Location:index.php?error=1");
}
elseif(($user == $data['nip9']) && ($pass == $data['pass']))
{
	@session_start();
	//$nip9 = $data['nip9'];
	$_SESSION['id']=session_id();
	$_SESSION['id_peg']=$data['id_peg'];
	$_SESSION['nip9']=$data['nip9'];
	$_SESSION['nip18']=$data['nip18'];
	$_SESSION['nama']=$data['nama'];
	$_SESSION['panggil']=$data['panggil'];
	$_SESSION['panggol']=$data['panggol'];
	$_SESSION['id_sie']=$data['id_sie'];
	$_SESSION['jenis_user']='admin';
	Header("Location:functions.php");
}
else
{
	Header("Location:index.php?error=1");
}

?>
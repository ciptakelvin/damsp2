<?php
include "../../conn.php";
$user = $_POST['user'];
$panggilan= $_POST['panggilan'];
$email = $_POST['email'];
$wa = $_POST['wa'];
$motivasi = $_POST['motivasi'];
$gambar = $_POST['gambar'];
$nama_gambar = $user.".jpg";

$query = "update pegawai set panggil = '$panggilan', email = '$email', wa = '$wa', motivasi = '$motivasi', gambar = '$nama_gambar' where nip9 = '$user'";
$run = mysqli_query($konek,$query);

if($run)
{
								if (isset($_FILES['gambar']['name'])) {
								$target_dir = "../../img/";
								$file_name = $_FILES["gambar"]["name"];
								$xxx = $_FILES["gambar"]["tmp_name"];
								$new_name  = $nama_gambar;
								//$file_name = $id_rikber;
								
								$target_file = $target_dir . $new_name;
								$uploadOk = 1;
								$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
								// Check if image file is a actual image or fake image
								if(isset($_POST["submit"])) {
									$check = getimagesize($_FILES["gambar"]["tmp_name"]);
									if($check !== false) {
										//echo "File is an image - " . $check["mime"] . ".";
										$uploadOk = 1;
									} else {
										//echo "File is not an image.";
										$uploadOk = 0;
									}
								}
								// Check if file already exists
								//if (file_exists($target_file)) {
								//	echo "Sorry, file already exists.";
								//	$uploadOk = 0;
								//}
								// Check file size
								
								// Allow certain file formats
								if($imageFileType != "jpg") {
									//echo "<script type='text/javascript'>window.location.href = '../../main.php?module=rikbersama_view&q=$idrikber&alert=6'; </script>";
									$uploadOk = 0;
								}
								// Check if $uploadOk is set to 0 by an error
								if ($uploadOk == 0) {
									echo "<script type='text/javascript'>window.location.href = '../../dams.php?module=profil&ket=gagal'; </script>";
								// if everything is ok, try to upload file
								} else {
									if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
									echo "<script type='text/javascript'>window.location.href = '../../dams.php?module=profil&ket=profil'; </script>";
									} else {
									echo "<script type='text/javascript'>window.location.href = '../../dams.php?module=profil&ket=gagal'; </script>";
									}
								}
							}
}
?>
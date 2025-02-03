<?php
include("../../conn.php");

$id_rp = $_POST['id'];
$no_surat = $_POST['no_surat'];
$tanggal_surat = $_POST['tanggal_surat'];
$agenda = $_POST['agenda'];
$start_event = $_POST['start_event'];
$end_event = $_POST['end_event'];
$tempat = $_POST['tempat'];
$nama_tempat = $_POST['nama_tempat'];
$keterangan = $_POST['keterangan'];
$sifat = $_POST['sifat'];
$pic = $_POST['pic'];
$lhr = $_POST['lhr'];

$sie1=$_POST['sie1'];
$sie2=$_POST['sie2'];
$sie3=$_POST['sie3'];
$sie4=$_POST['sie4'];
$sie5=$_POST['sie5'];
$sie6=$_POST['sie6'];
$sie7=$_POST['sie7'];
$sie8=$_POST['sie8'];
$sie9=$_POST['sie9'];
$sie10=$_POST['sie10'];
$sie11=$_POST['sie11'];
$sie12=$_POST['sie12'];
$sie13=$_POST['sie13'];
$sie14=$_POST['sie14'];
$sie15=$_POST['sie15'];
$sie16=$_POST['sie16'];
$sie17=$_POST['sie17'];
$sie18=$_POST['sie18'];
$sie19=$_POST['sie19'];
$sie20=$_POST['sie20'];
$sie21=$_POST['sie21'];
$sie22=$_POST['sie22'];
$sie23=$_POST['sie23'];
$upload_und=$_FILES['upload_und']['name'];
$upload_rapat=$_FILES['upload_rapat']['name'];
$upload_lhr=$_FILES['upload_lhr']['name'];
$sql="select * from events where id='$id_rp'";
$hasil=mysqli_query($konek,$sql);
$data=mysqli_fetch_array($hasil);
$file_und=$data['file_und'];
$file_rapat=$data['file_rapat'];
$file_lhr=$data['file_lhr'];
if($file_und != ""){$new_name_und = $file_und;}elseif($upload_und==""){$new_name_und=="";}else{$new_name_und = "UND_".$id_rp.".pdf";}
if($file_rapat != ""){$new_name_rapat = $file_rapat;}elseif($upload_rapat==""){$new_name_rapat=="";}else{$new_name_rapat = "rapat_".$id_rp.".pdf";}
if($file_lhr != ""){$new_name_lhr = $file_lhr;}elseif($upload_lhr==""){$new_name_lhr=="";}else{$new_name_lhr = "lhr_".$id_rp.".pdf";}

//echo $sie2;
//$cek = "select * from events where start_event between '$start_event' and '$end_event' and status ='1' and id !='$id_rp' and pic = '$pic' or end_event between '$start_event'and '$end_event' and status ='1'and id=!'$id_rp' and pic = '$pic' or start_event<= '$start_event' and end_event>='$end_event' and status ='1'and id!='$id_rp' and pic = '$pic'";
//$rcek=mysqli_query($konek,$cek);
//$data3 = mysqli_fetch_array($rcek);
//$tes = $data3['tempat'];
//if ($tes != null) {echo "<script type='text/javascript'>window.location.href = '../../dams.php?module=view_rp_direktur&id=$id_rp&ket=gagal'; </script>";}else{
$query = "update events set keterangan ='$keterangan', lhr ='$lhr', no_surat='$no_surat', tanggal_surat='$tanggal_surat', title='$agenda', tempat='$tempat', tempat_lainnya='$nama_tempat',start_event='$start_event', end_event='$end_event', sifat='$sifat', pic='$pic',file_und='$new_name_und',file_rapat='$new_name_rapat',file_lhr='$new_name_lhr', sie1 ='$sie1', sie2 ='$sie2', sie3 ='$sie3', sie4 ='$sie4', sie5 ='$sie6', sie7 ='$sie7'
, sie8 ='$sie8', sie9 ='$sie9', sie10 ='$sie10', sie11 ='$sie11', sie12 ='$sie12', sie13 ='$sie13', sie14 ='$sie14', sie14 ='$sie14', sie15 ='$sie15', sie16 ='$sie16', sie17 ='$sie17', sie18 ='$sie18', sie19 ='$sie19', sie20 ='$sie20', sie21 ='$sie21', sie22 ='$sie22', sie23 ='$sie22' where id='$id_rp'";
$run=mysqli_query($konek,$query);
if($run)
{
	if (isset($_FILES['upload_und']['name']) or ($_FILES['upload_rapat']['name']) or ($_FILES['upload_lhr']['name'])){
								$target_dir_und = "../../document/und/";
								$target_dir_rapat = "../../document/rapat/";
								$target_dir_lhr = "../../document/lhr/";
								$file_name_und = $_FILES["upload_und"]["name"];
								$file_name_rapat = $_FILES["upload_rapat"]["name"];
								$file_name_lhr = $_FILES["upload_lhr"]["name"];
								$xxx = $_FILES["upload_und"]["tmp_name"];
								
								//$file_name = $id_rikber;
								
								$target_file_und = $target_dir_und . $new_name_und;
								$target_file_rapat = $target_dir_rapat . $new_name_rapat;
								$target_file_lhr = $target_dir_lhr . $new_name_lhr;
								$uploadOk = 1;
								$imageFileType = strtolower(pathinfo($target_file_und,PATHINFO_EXTENSION));
								// Check if image file is a actual image or fake image
								if(isset($_POST["submit"])) {
									$check = empty($upload_und);
									if($check !== true) {
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
								if($imageFileType != "pdf") {
									//echo "<script type='text/javascript'>window.location.href = '../../main.php?module=rikbersama_view&q=$idrikber&alert=6'; </script>";
									$uploadOk != 0;
								}
								// Check if $uploadOk is set to 0 by an error
								if ($uploadOk == 0) {
									echo "<script type='text/javascript'>window.location.href = '../../dams.php?module=view_input_monitoring_migas&ket=gagal&id=$id_rp'; </script>";
								// if everything is ok, try to upload file
								} 
								 else {
									if (move_uploaded_file($_FILES["upload_und"]["tmp_name"], $target_file_und) and move_uploaded_file($_FILES["upload_rapat"]["tmp_name"], $target_file_rapat) and move_uploaded_file($_FILES["upload_lhr"]["tmp_name"], $target_file_lhr) or move_uploaded_file($_FILES["upload_rapat"]["tmp_name"], $target_file_rapat) and move_uploaded_file($_FILES["upload_und"]["tmp_name"], $target_file_und) and move_uploaded_file($_FILES["upload_lhr"]["tmp_name"], $target_file_lhr) or move_uploaded_file($_FILES["upload_lhr"]["tmp_name"], $target_file_lhr) and move_uploaded_file($_FILES["upload_und"]["tmp_name"], $target_file_und) and move_uploaded_file($_FILES["upload_rapat"]["tmp_name"], $target_file_rapat)) {
									header("Location:../../dams.php?module=jadwal_direktur&id=$id_rp&ket=ubah");
									} else {
									header("Location:../../dams.php?module=jadwal_direktur&id=$id_rp&ket=ubah");
									}
								}
							}
}
//}
?>
<?php
//panggil koneksi database
include "conn.php";
 @session_start();
$ses_id = $_SESSION['id'];
$user = $_SESSION['nip9'];

if(($ses_id == '') && ($user == '')) 
{
header("Location:index.php");
}
$query2 = "select subdit from pegawai, id_seksi where nip9 = '$user' and pegawai.id_sie=id_seksi.id_sie";
$run2 =mysqli_query($konek,$query2);
$data2=mysqli_fetch_array($run2);
$subdit= $data2['subdit'];
		if($subdit == "SubDirektorat Kerjasama dan Dukungan Pemeriksaan")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and (sie20 ='1' or sie1 ='1' or sie2 ='1' or sie3 = '1') order by id ");
		}
		if($subdit == "SubDirektorat Perencanaan Pemeriksaan")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and (sie17 ='1' or sie4 ='1' or sie5 ='1' or sie6 = '1') order by id ");
		}
		if($subdit == "SubDirektorat Teknik dan Pengendalian Pemeriksaan")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and s(sie18 ='1' or sie7 ='1' or sie8 ='1' or sie9 = '1') order by id ");
		}
		if($subdit == "SubDirektorat Pemeriksaan Transaksi Khusus")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and (sie19 ='1' or sie10 ='1' or sie11 ='1' or sie12 = '1') order by id ");
		}
		if($subdit == "SubDirektorat Penagihan")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and (sie21 ='1' or sie13 ='1' or sie14 ='1' or sie15 = '1') order by id ");
		}
		if($subdit == "Direktur")
		{
			$query = mysqli_query($konek, "select * from events where status=1 and subdit ='$subdit' and (sie16 ='1' or sie22='1') order by id ");
		}

$dataArr = array();
while($data = mysqli_fetch_array($query)){
  if($data['sifat']=='Penting'){
  	$dataArr[] = array(
  		'backgroundColor' => 'rgb(252, 227, 3)',
  		'borderColor' => 'rgb(252, 227, 3)',
      'id' => $data['id'],
  		'title' => $data['title']." di ".$data['tempat']." PIC : ".$data['pic'],
  		'start' => $data['start_event'],
  		'end' => $data['end_event'],
  	);
  	}
	elseif($data['sifat']=='Sangat Penting'){
		$dataArr[] = array(
		'textColor' => 'white',
		'backgroundColor' => 'rgb(255, 0, 0)',
  		'borderColor' => 'rgb(255, 0, 0)',
      'id' => $data['id'],
		'title' => $data['title']." di ".$data['tempat']." PIC : ".$data['pic'],
  		'start' => $data['start_event'],
  		'end' => $data['end_event'],
  	); 
	}
	else
	{
		$dataArr[] = array(
		'backgroundColor' => 'rgb(3, 252, 161)',
  		'borderColor' => 'rgb(3, 252, 161)',
      'id' => $data['id'],
		'title' => $data['title']." di ".$data['tempat']." PIC : ".$data['pic'],
  		'start' => $data['start_event'],
  		'end' => $data['end_event'],	
	);}
}echo json_encode($dataArr);
  
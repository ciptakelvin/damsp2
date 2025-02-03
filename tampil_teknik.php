<?php
//panggil koneksi database
include "conn.php";
$json = array();
$show = mysqli_query($konek, "select * from events where status=1 and validasi=1 and sie18 ='1' order by id    ");
while($row = mysqli_fetch_assoc($show)){
  if($row['sifat']=='Penting'){
  	$json[] = array(
  		'backgroundColor' => 'rgb(252, 227, 3)',
  		'borderColor' => 'rgb(252, 227, 3)',
  		'title' => $row['title']." di ".$row['tempat']." PIC : ".$row['pic'],
  		'start' => $row['start_event'],
  		'end' => $row['end_event'],
  	);
  	}
	elseif($row['sifat']=='Sangat Penting'){
		$json[] = array(
		'textColor' => 'white',
		'backgroundColor' => 'rgb(255, 0, 0)',
  		'borderColor' => 'rgb(255, 0, 0)',
		'title' => $row['title']." di ".$row['tempat']." PIC : ".$row['pic'],
  		'start' => $row['start_event'],
  		'end' => $row['end_event'],
  	); 
	}
	else
	{
		$json[] = array(
		'backgroundColor' => 'rgb(3, 252, 161)',
  		'borderColor' => 'rgb(3, 252, 161)',
		'title' => $row['title']." di ".$row['tempat']." PIC : ".$row['pic'],
  		'start' => $row['start_event'],
  		'end' => $row['end_event'],	
	);}
  }echo json_encode($json);
  ?>
  
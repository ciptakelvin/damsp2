<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$konek = mysqli_connect("localhost","root","","dams_p2");
if (!$konek){
			die ("Koneksi ke Server Gagal !<br>");
				}
//echo 'Koneksi ke server berhasil';
$Koneksi = mysqli_select_db($konek,"dams_p2");
			if (!$Koneksi){
			die ("Koneksi ke Database Gagal !");
			}
//echo 'Koneksi ke database berhasil';
?>
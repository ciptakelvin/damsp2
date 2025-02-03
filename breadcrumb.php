<?php
$module=$_GET['module'];
	if($module=="")
	{
		$bc = "Beranda";
	}
	if($module=="jadwal_direktur")
	{
		$bc = "Jadwal_Direktur";
	}
	if($module=="booking_ruang")
	{
		$bc = "Booking Ruang";
	}
	if($module=="dashboard_direktur")
	{
		$bc = "dashboard_Direktur";
	}
	if($module=="dashboard")
	{
		$bc = "Beranda";
	}
	if($module=="profil")
	{
		$bc = "Profil";
	}
	if($module=="rko")
	{
		$bc = "RKO";
	}
	if($module=="view_uraian")
	{
		$bc = "RKO";
	}
	if($module=="input_uraian")
	{
		$bc = "RKO";
	}
	if($module=="edit_uraian")
	{
		$bc = "RKO";
	}
	if($module=="kegiatan")
	{
		$bc = "Kegiatan Subdit";
	}
	if($module=="input_kegiatan")
	{
		$bc = "Kegiatan Subdit";
	}
	if($module=="view_kegiatan")
	{
		$bc = "Kegiatan Subdit";
	}
	if($module=="surat_tugas")
	{
		$bc = "Surat Tugas";
	}
	if($module=="input_st")
	{
		$bc = "Surat Tugas";
	}
	if($module=="view_st")
	{
		$bc = "Surat Tugas";
	}
		if($module=="dashboard_direktur_utama")
	{
		$bc = "Jadwal Pejabat";
	}
?>
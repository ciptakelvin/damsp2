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
function bulan1($bulan)
{
Switch ($bulan){
    case 01 : $bulan="Januari";
        Break;
    case 02 : $bulan="Februari";
        Break;
    case 03 : $bulan="Maret";
        Break;
    case 04 : $bulan="April";
        Break;
    case 05 : $bulan="Mei";
        Break;
    case 06 : $bulan="Juni";
        Break;
    case 07 : $bulan="Juli";
        Break;
    case 08 : $bulan="Agustus";
        Break;
    case 09 : $bulan="September";
        Break;
    case 10 : $bulan="Oktober";
        Break;
    case 11 : $bulan="November";
        Break;
    case 12 : $bulan="Desember";
        Break;
    }
return $bulan;
}


function bulan2($bulan)
{
Switch ($bulan){
    case 01 : $bulan="Januari";
        Break;
    case 02 : $bulan="Februari";
        Break;
    case 03 : $bulan="Maret";
        Break;
    case 04 : $bulan="April";
        Break;
    case 05 : $bulan="Mei";
        Break;
    case 06 : $bulan="Juni";
        Break;
    case 07 : $bulan="Juli";
        Break;
    case 08 : $bulan="Agustus";
        Break;
    case 09 : $bulan="September";
        Break;
    case 10 : $bulan="Oktober";
        Break;
    case 11 : $bulan="November";
        Break;
    case 12 : $bulan="Desember";
        Break;
    }
return $bulan;
}

?>
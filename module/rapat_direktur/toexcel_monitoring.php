<?php
 // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");
     
    // membuat nama file ekspor "export-to-excel.xls"
    header("Content-Disposition: attachment; filename=Monitoring_pemeriksaan_migas.xls");
    
?>
<h4>DAFTAR AGENDA PEJABAT</h4>
 <table border=1 >

                  <thead  style="text-align:center" >
                <tr>
                  <th>No</th>
                  <th>Nomor Surat/
                  Tanggal Surat</th>
                  <th>Agenda</th>
                  <th>Tempat</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Sifat</th>
                  <th>PIC</th>
                </tr>
                </thead>
        <?php
				include("../../bulan.php");
         @session_start();
        $ses_id = $_SESSION['id'];
        $user = $_SESSION['nip9'];
        if(($ses_id == '') && ($user == '')) 
        {
          header("Location:index.php");
        }
        $user1=$_SESSION['user'];
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

					$no=1;
					while($data= mysqli_fetch_array($query))
					{
						$thn_keg = substr($data['start_event'],0,4);
						$bln_keg = substr($data['start_event'],5,2);
						$tgl_keg = substr($data['start_event'],8,2);
						$thn_keg2 = substr($data['end_event'],0,4);
						$bln_keg2 = substr($data['end_event'],5,2);
						$tgl_keg2 = substr($data['end_event'],8,2);
						$thn_keg3 = substr($data['tanggal_surat'],0,4);
						$bln_keg3 = substr($data['tanggal_surat'],5,2);
						$tgl_keg3 = substr($data['tanggal_surat'],8,2);
				
				?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data['no_surat']."<br>".$tgl_keg3." ".bulan1($bln_keg3)." ".$thn_keg3;?></td>
					  	<td><?php echo $data['title']; ?></td>
					  	<td><?php echo $data['tempat']; ?></td>
					 	<td><?php echo $tgl_keg." ".bulan1($bln_keg)." ".$thn_keg; ?><br><p>Waktu <?php echo substr($data['start_event'],11,5); ?> WIB</p></td>
					  	<td><?php echo $tgl_keg2." ".bulan1($bln_keg2)." ".$thn_keg2; ?><br><p>Waktu <?php echo substr($data['end_event'],11,5); ?> WIB</p></td>
					  	<td><?php echo $data['sifat']; ?></td>
					  	<td><?php if ($data['sie1']=='1'){ echo " - Seksi Kerjasama Pemeriksaan<br> ";}
									if ($data['sie2']=='1'){ echo " - Seksi Dukungan Teknis Pemeriksaan<br> ";}
									if ($data['sie3']=='1'){ echo " - Seksi Data dan Dukungan Pemeriksaan<br> ";}
									if ($data['sie4']=='1'){ echo " - SubDirektorat Perencanaan Pemeriksaan<br> ";}
									if ($data['sie5']=='1'){ echo " - Seksi Perencanaan Pemeriksaan Wajib Pajak Badan<br> ";}
									if ($data['sie6']=='1'){ echo " - Seksi Strategi Pemeriksaan<br> ";}
									if ($data['sie7']=='1'){ echo " - SubDirektorat Teknik dan Pengendalian Pemeriksaan<br> ";}
									if ($data['sie8']=='1'){ echo " - SubDirektorat Teknik dan Pengendalian Pemeriksaan<br> ";}
									if ($data['sie9']=='1'){ echo " - SubDirektorat Teknik dan Pengendalian Pemeriksaan<br> ";}
									if ($data['sie10']=='1'){ echo " - SubDirektorat Pemeriksaan Transaksi Khusus<br> ";}
									if ($data['sie11']=='1'){ echo " - Seksi Pemeriksaan Wajib Pajak Sektor Sumber Daya Alam<br> ";}
									if ($data['sie12']=='1'){ echo " - Seksi Transfer Pricing dan Transaksi Khusus Lainnya<br> ";}
									if ($data['sie13']=='1'){ echo " - Seksi Strategi dan Dukungan Penagihan<br> ";}
									if ($data['sie14']=='1'){ echo " - Seksi Perencanaan dan Evaluasi Penagihan<br> ";}
									if ($data['sie15']=='1'){ echo " - SubDirektorat Penagihan<br> ";}
									if ($data['sie16']=='1'){ echo " - Direktur Pemeriksaan dan Penagihan<br> ";}
									if ($data['sie17']=='1'){ echo " - SubDirektorat Perencanaan Pemeriksaan<br> ";}
									if ($data['sie18']=='1'){ echo " - SubDirektorat Teknik dan Pengendalian Pemeriksaan<br> ";}
									if ($data['sie19']=='1'){ echo " - SubDirektorat Pemeriksaan Transaksi Khusus<br> ";}
									if ($data['sie20']=='1'){ echo " - SubDirektorat Kerjasama dan Dukungan Pemeriksaan<br> ";}
									if ($data['sie21']=='1'){ echo " - SubDirektorat Penagihan<br> ";}
									if ($data['sie22']=='1'){ echo " - SubBagian Tata Usaha<br> ";}
						?></td>
          </tr>
        <?php
          $no++;
          }
        ?>
              </table>
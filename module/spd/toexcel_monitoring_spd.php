<?php
 // fungsi header dengan mengirimkan raw data excel
   header("Content-type: application/vnd-ms-excel");
     
    // membuat nama file ekspor "export-to-excel.xls"
   header("Content-Disposition: attachment; filename=Monitoring_pegawai_st_harian.xls");
    
?>
<h4>Daftar Rekapitulasi SPD Pegawai Tahun Ini</h4>
 <table border=1 >

                  <thead  style="text-align:center" >
                <tr>
                  <th>No</th>
                  <th>Nomor Surat/
                  Tanggal Surat</th>
                  <th>Agenda</th>
                  <th>Tempat</th>
                  <th>Waktu</th>
				  <th>Daftar Pegawai</th>
                  <th>Realisasi</th>
                </tr>
                </thead>
         <?php
        include("../../bulan.php");
          $query = "select a.id,a.no_surat,tanggal_surat,a.agenda,a.mulai,a.selesai,case when a.tempat = 'Lainnya' then a.tempat_lainnya else a.tempat end tempat_fix,a.status, c.nama, d.realisasi from events_pegawai_p2 a left join pegawai_events c ON a.id = c.id_events_pgw LEFT JOIN id_seksi b ON c.id_sie = b.id_sie left join spd d on c.nama = d.nama and c.id_events_pgw = d.id_events_pgw where a.status='1' and EXTRACT(YEAR FROM a.tanggal_surat) = EXTRACT(YEAR FROM CURRENT_DATE) and b.subdit = 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan' ORDER BY a.no_surat,c.nama";
          $run = mysqli_query($konek,$query);
          $no=1;
          while($data= mysqli_fetch_array($run))
          {
			$data_subdit = $data['nama_subdit'];
            $thn_keg = substr($data['tanggal_surat'],0,4);
            $bln_keg = substr($data['tanggal_surat'],5,2);
            $tgl_keg = substr($data['tanggal_surat'],8,2);
           $thn_keg2 = substr($data['mulai'],0,4);
           $bln_keg2 = substr($data['mulai'],5,2);
           $tgl_keg2 = substr($data['mulai'],8,2);
           $thn_keg3 = substr($data['selesai'],0,4);
           $bln_keg3 = substr($data['selesai'],5,2);
           $tgl_keg3 = substr($data['selesai'],8,2);
        
        ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['no_surat']; ?>&emsp;(<?php echo $tgl_keg." ".bulan1($bln_keg)." ".$thn_keg; ?>)</td>
              <td> <?php echo $data['agenda']; ?></td>
              <td>
                Tempat &emsp;&emsp;&nbsp;: 
				<?php
					include("conn.php");
					$idcek = $data['id'];
					$mulai = $data['mulai'];
					$selesai = $data['selesai'];
					$tempat = $data['tempat_fix'];
					$tempat_lainnya = $data['tempat_lainnya'];
					if($tempat == 'Lainnya'){echo $tempat_lainnya;}else{echo $tempat;}
				$cek = "select * from events_pegawai_p2 where mulai between '$mulai' and '$selesai' and tempat='Lainnya' and tempat_lainnya = '$tempat_lainnya' and status ='1' and id !='$idcek' or selesai between '$mulai'and '$selesai' and tempat='Lainnya' and tempat_lainnya = '$tempat_lainnya' and status ='1' and id!='$idcek' or mulai<= '$mulai' and selesai>='$selesai' and tempat='Lainnya' and status ='1' and tempat_lainnya = '$tempat_lainnya' and id!='$idcek' or mulai between '$mulai' and '$selesai' and tempat='$tempat' and tempat!='Lainnya' and status ='1' and id!='$idcek' or selesai between '$mulai'and '$selesai' and tempat='$tempat' and tempat!='Lainnya' and status ='1' and id!='$idcek' or mulai<= '$mulai' and selesai>='$selesai' and tempat='$tempat' and tempat!='Lainnya' and status ='1' and id!='$idcek'";
				$rcek=mysqli_query($konek,$cek);
				$data3 = mysqli_fetch_array($rcek);
				$tes = $data3['tempat'];
				//if($tempat == $tes){echo " <span style='background-color:red;color:white;'>($tempat)</span>";}else{echo " ($tempat)";}?>
                <td><?php echo $tgl_keg2." ".bulan1($bln_keg2)." ".$thn_keg2; ?> <?php echo substr($data['mulai'],11,5); ?> -
                <?php echo $tgl_keg3." ".bulan1($bln_keg3)." ".$thn_keg3; ?> <?php echo substr($data['selesai'],11,5); ?> WIB</td>
			  <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['realisasi']; ?></td>
			  
          </tr>
        <?php
          $no++;
          }
        ?>
              </table>
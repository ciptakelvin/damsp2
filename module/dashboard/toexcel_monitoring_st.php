<?php
 // fungsi header dengan mengirimkan raw data excel
   header("Content-type: application/vnd-ms-excel");
     
    // membuat nama file ekspor "export-to-excel.xls"
   header("Content-Disposition: attachment; filename=Monitoring_pegawai_st_harian.xls");
    
?>
<h4>Daftar Pegawai ST Hari Ini</h4>
 <table border=1 >

                  <thead  style="text-align:center" >
                <tr>
                  <th>No</th>
                  <th>Nomor Surat/
                  Tanggal Surat</th>
                  <th>Agenda</th>
                  <th>Tempat</th>
                  <th>Daftar Pegawai</th>
                  <th>Seksi</th>
                  <th>PIC ST</th>
                </tr>
                </thead>
         <?php
        include("../../bulan.php");
          $query = "SELECT a.*,b.subdit,c.nama, d.seksi from events_pegawai_p2 a LEFT JOIN id_seksi b on a.id_sie=b.id_sie LEFT JOIN pegawai_events c on a.ID = c.id_events_pgw LEFT JOIN ID_SEKSI d ON c.id_sie = d.id_sie where mulai >= curdate() and selesai <= curdate()+ interval 1 DAY and a.status = '1' and a.jenis_st ='Lainnya' or curdate() +INTERVAL 1 DAY  between mulai and selesai +INTERVAL 1 DAY  and a.status = '1' and a.jenis_st ='Lainnya' order by mulai asc";
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
            <td><?php echo $data['no_surat']; ?><br><?php echo $tgl_keg." ".bulan1($bln_keg)." ".$thn_keg; ?></td>
              <td> <?php echo $data['agenda']; ?></td>
              <td>
                Tempat &emsp;&emsp;&nbsp;: 
				<?php
					include("conn.php");
					$idcek = $data['id'];
					$mulai = $data['mulai'];
					$selesai = $data['selesai'];
					$tempat = $data['tempat'];
					$tempat_lainnya = $data['tempat_lainnya'];
					if($tempat == 'Lainnya'){echo $tempat_lainnya;}else{echo $tempat;}
				$cek = "select * from events_pegawai_p2 where mulai between '$mulai' and '$selesai' and tempat='Lainnya' and tempat_lainnya = '$tempat_lainnya' and status ='1' and id !='$idcek' or selesai between '$mulai'and '$selesai' and tempat='Lainnya' and tempat_lainnya = '$tempat_lainnya' and status ='1' and id!='$idcek' or mulai<= '$mulai' and selesai>='$selesai' and tempat='Lainnya' and status ='1' and tempat_lainnya = '$tempat_lainnya' and id!='$idcek' or mulai between '$mulai' and '$selesai' and tempat='$tempat' and tempat!='Lainnya' and status ='1' and id!='$idcek' or selesai between '$mulai'and '$selesai' and tempat='$tempat' and tempat!='Lainnya' and status ='1' and id!='$idcek' or mulai<= '$mulai' and selesai>='$selesai' and tempat='$tempat' and tempat!='Lainnya' and status ='1' and id!='$idcek'";
				$rcek=mysqli_query($konek,$cek);
				$data3 = mysqli_fetch_array($rcek);
				$tes = $data3['tempat'];
				//if($tempat == $tes){echo " <span style='background-color:red;color:white;'>($tempat)</span>";}else{echo " ($tempat)";}?>
                <br>Dari&emsp;&emsp;&emsp;&emsp;: <?php echo $tgl_keg2." ".bulan1($bln_keg2)." ".$thn_keg2; ?> <?php echo substr($data['mulai'],11,5); ?> WIB
                <br>Sampai &emsp;&emsp; : <?php echo $tgl_keg3." ".bulan1($bln_keg3)." ".$thn_keg3; ?> <?php echo substr($data['selesai'],11,5); ?> WIB
              </td>
			  <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['seksi']; ?></td>
			  <td><?php echo $data['subdit']; ?></td>
          </tr>
        <?php
          $no++;
          }
        ?>
              </table>
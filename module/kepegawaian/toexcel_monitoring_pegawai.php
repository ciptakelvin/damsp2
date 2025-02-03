<?php
 // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");
     
    // membuat nama file ekspor "export-to-excel.xls"
    header("Content-Disposition: attachment; filename=Daftar_pegawai.xls");
    
?>
<h4>Daftar Pegawai</h4>
 <table border=1 >

                  <thead  style="text-align:center" >
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIP/ID</th>
				  <th>Seksi</th>
                  <th>User</th>
                  <th>Status</th>
                </tr>
                </thead>
         <?php
        include("../../bulan.php");
          $query = "select a.*, b.seksi, b.subdit from pegawai a Left join id_seksi b on a.id_sie=b.id_sie where a.status='1' order by a.id_sie DESC";
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
					  <td><?php echo $data['nama']; ?></td>
					  <td><?php echo $data['nip9']; ?></td>
					  <td><?php if ($data['jenis_user']=='dir' and $data['seksi']=='SubBagian Tata Usaha'){echo 'Direktur P2';}else{echo $data['seksi'];}; ?></td>
					  <td><?php if ($data['jenis_user']=='dir'){echo "Pejabat";}elseif($data['jenis_user']=='admin_dir'){echo "Sekre";}elseif($data['jenis_user']=='admin_pel'){echo "Admin ST";}else{echo "Biasa";}; ?></td>
            <td><?php if ($data['status']=='1'){echo "Aktif";}else{echo "Pindah";} ;?></td>
          </tr>
        <?php
          $no++;
          }
        ?>
              </table>
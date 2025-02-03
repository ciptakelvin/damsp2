
<?php
$tanggal = $_POST['tanggal'];
//echo $tanggal;
?>
<section class="content">
	<div class="container-fluid">
     <div class="row ">
        <div class="col-12">
          <div class="card card-success">
		  
            <div class="card-header">
              <h3 class="card-title">Pencarian Jadwal Pejabat</h3>
              <form action="?module=pencarian_dashboard_direktur_utama" method="post">
        <div class="text-right">
                    <input type="date" name="tanggal">
          <input type="submit" value="Cari Jadwal">
                  </div>
        </form>
            </div>
			<div class="card-body">
				<div class="row">
				   <table id="example2" class="table table-bordered table-hover form-control-sm">
                <thead>
               <tr>
                  <th>Direktur</th>
                  <th>Perencanaan</th>
                  <th>Teknik</th>
                  <th>Transus</th>
                  <th>Kersduk</th>
                  <th>Penagihan</th>
                </tr>
                </thead>
                <tbody>
				<?php
        include("bulan.php");
          // $query = "select * from events where start_event like '$tanggal%' and status='1' and validasi='1'";
          // $run = mysqli_query($konek,$query);
          // $no=1;
          // while($data= mysqli_fetch_array($run))
          // {
          //   $thn_keg = substr($data['start_event'],0,4);
          //   $bln_keg = substr($data['start_event'],5,2);
          //   $tgl_keg = substr($data['start_event'],8,2);
          //   $thn_keg2 = substr($data['end_event'],0,4);
          //   $bln_keg2 = substr($data['end_event'],5,2);
          //   $tgl_keg2 = substr($data['end_event'],8,2);
          //   $thn_keg3 = substr($data['tanggal_surat'],0,4);
          //   $bln_keg3 = substr($data['tanggal_surat'],5,2);
          //   $tgl_keg3 = substr($data['tanggal_surat'],8,2);
        
        ?>
					<tr>
            <td>
              <?php
               
              $query04 = "select * from events where start_event like '$tanggal%' and status='1' and validasi='1' and sie16='1'";
              $run04 = mysqli_query($konek,$query04);
              $no=1;
              // echo "kosong";
              while($data04 = mysqli_fetch_array($run04))
              {
                if($data04['SUBDIT'] != ''){
                  echo "Tidak ada Jadwal";
                }
              else
                {
                  echo $no.". ".$data04['title']."<br>tanggal Mulai : ".$data04['start_event']."<br>tanggal Selesai : ".$data04['end_event'];
				  if($data04['file_und']=='')
				  {
					echo "<br>File Und : No File Download <br>";
				  }
				  else
				  {
				   echo "<br>File Und &emsp;&emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_und.php?filename=$data04[file_und]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data04['file_rapat']=='')
				  {
					echo "Bahan rapat &emsp;&nbsp;: No File Download <br>";
				  }
				  else
				  {
				   echo "Bahan rapat &emsp;&nbsp;: <a title='Download File PDF' href='module/rapat_direktur/download_rapat.php?filename=$data04[file_rapat]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data04['file_lhr']=='')
				  {
					echo "Hasil rapat &emsp;&emsp;: No File Download <br>";
				  }
				  else
				  {
				   echo "Hasil rapat &emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_lhr.php?filename=$data04[file_lhr]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
                }
                $no++;
              }
              ?>
              </td>
              <td>
                <?php
               
              $query041 = "select * from events where start_event like '$tanggal%' and status='1' and validasi='1' and sie17='1'";
              $run041 = mysqli_query($konek,$query041);
              $no=1;
              // echo "kosong";
              while($data041 = mysqli_fetch_array($run041))
              {
                if($data041['SUBDIT'] != ''){
                  echo "Tidak ada Jadwal";
                }
              else
                {
                  echo $no.". ".$data041['title']."<br>tanggal Mulai : ".$data041['start_event']."<br>tanggal Selesai : ".$data041['end_event'];
				  if($data041['file_und']=='')
				  {
					echo "<br>File Und : No File Download <br>";
				  }
				  else
				  {
				   echo "<br>File Und &emsp;&emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_und.php?filename=$data041[file_und]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data041['file_rapat']=='')
				  {
					echo "Bahan rapat &emsp;&nbsp;: No File Download <br>";
				  }
				  else
				  {
				   echo "Bahan rapat &emsp;&nbsp;: <a title='Download File PDF' href='module/rapat_direktur/download_rapat.php?filename=$data041[file_rapat]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data041['file_lhr']=='')
				  {
					echo "Hasil rapat &emsp;&emsp;: No File Download <br>";
				  }
				  else
				  {
				   echo "Hasil rapat &emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_lhr.php?filename=$data041[file_lhr]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
                }
              $no++;
              }
              ?>
              </td>
               <td>
               <?php
               
              $query042 = "select * from events where start_event like '$tanggal%' and status='1' and validasi='1' and sie18='1'";
              $run042 = mysqli_query($konek,$query042);
              $no=1;
              // echo "kosong";
              while($data042 = mysqli_fetch_array($run042))
              {
                if($data042['SUBDIT'] != ''){
                  echo "Tidak ada Jadwal";
                }
              else
                {
                  echo $no.". ".$data042['title']."<br>tanggal Mulai : ".$data042['start_event']."<br>tanggal Selesai : ".$data042['end_event'];
				  if($data042['file_und']=='')
				  {
					echo "<br>File Und : No File Download <br>";
				  }
				  else
				  {
				   echo "<br>File Und &emsp;&emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_und.php?filename=$data042[file_und]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data042['file_rapat']=='')
				  {
					echo "Bahan rapat &emsp;&nbsp;: No File Download <br>";
				  }
				  else
				  {
				   echo "Bahan rapat &emsp;&nbsp;: <a title='Download File PDF' href='module/rapat_direktur/download_rapat.php?filename=$data042[file_rapat]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data042['file_lhr']=='')
				  {
					echo "Hasil rapat &emsp;&emsp;: No File Download <br>";
				  }
				  else
				  {
				   echo "Hasil rapat &emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_lhr.php?filename=$data042[file_lhr]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
                }
              $no++;
              }
              ?> 
              </td>
               <td>
                <?php
               
              $query043 = "select * from events where start_event like '$tanggal%' and status='1' and validasi='1' and sie19='1'";
              $run043 = mysqli_query($konek,$query043);
              $no=1;
              // echo "kosong";
              while($data043 = mysqli_fetch_array($run043))
              {
                if($data043['SUBDIT'] != ''){
                  echo "Tidak ada Jadwal";
                }
              else
                {
                  echo $no.". ".$data043['title']."<br>tanggal Mulai : ".$data043['start_event']."<br>tanggal Selesai : ".$data043['end_event'];
				  if($data043['file_und']=='')
				  {
					echo "<br>File Und : No File Download <br>";
				  }
				  else
				  {
				   echo "<br>File Und &emsp;&emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_und.php?filename=$data043[file_und]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data043['file_rapat']=='')
				  {
					echo "Bahan rapat &emsp;&nbsp;: No File Download <br>";
				  }
				  else
				  {
				   echo "Bahan rapat &emsp;&nbsp;: <a title='Download File PDF' href='module/rapat_direktur/download_rapat.php?filename=$data043[file_rapat]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data043['file_lhr']=='')
				  {
					echo "Hasil rapat &emsp;&emsp;: No File Download <br>";
				  }
				  else
				  {
				   echo "Hasil rapat &emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_lhr.php?filename=$data043[file_lhr]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
                }
              $no++;
              }
              ?>
              </td>
               <td>
                 <?php
               
              $query044 = "select * from events where start_event like '$tanggal%' and status='1' and validasi='1' and sie20='1'";
              $run044 = mysqli_query($konek,$query044);
              $no=1;
              // echo "kosong";
              while($data044 = mysqli_fetch_array($run044))
              {
                if($data044['SUBDIT'] != ''){
                  echo "Tidak ada Jadwal";
                }
              else
                {
                  echo $no.". ".$data044['title']."<br>tanggal Mulai : ".$data044['start_event']."<br>tanggal Selesai : ".$data044['end_event'];
				  if($data044['tempat']=='Lainnya')
				  {
					echo "<br>Tempat : ".$data044['tempat_lainnya'];
				  }
				  else
				  {
				   echo "<br>Tempat : ".$data044['tempat'];
				  }
				  if($data044['file_und']=='')
				  {
					echo "<br>File Und : No File Download <br>";
				  }
				  else
				  {
				   echo "<br>File Und &emsp;&emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_und.php?filename=$data044[file_und]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data044['file_rapat']=='')
				  {
					echo "Bahan rapat &emsp;&nbsp;: No File Download <br>";
				  }
				  else
				  {
				   echo "Bahan rapat &emsp;&nbsp;: <a title='Download File PDF' href='module/rapat_direktur/download_rapat.php?filename=$data044[file_rapat]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data044['file_lhr']=='')
				  {
					echo "Hasil rapat &emsp;&emsp;: No File Download <br><br>";
				  }
				  else
				  {
				   echo "Hasil rapat &emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_lhr.php?filename=$data044[file_lhr]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br><br>";
				  }
				 
                }
              $no++;
              }
              ?>
              <td>
             <?php
               
              $query045 = "select * from events where start_event like '$tanggal%' and status='1' and validasi='1' and sie21='1'";
              $run045 = mysqli_query($konek,$query045);
              $no=1;
              // echo "kosong";
              while($data045 = mysqli_fetch_array($run045))
              {
                if($data045['SUBDIT'] != ''){
                  echo "Tidak ada Jadwal";
                }
              else
                {
                  echo $no.". ".$data045['title']."<br>tanggal Mulai : ".$data045['start_event']."<br>tanggal Selesai : ".$data045['end_event'];if($data044['file_und']=='')
				  {
					echo "<br>File Und : No File Download <br>";
				  }
				  else
				  {
				   echo "<br>File Und &emsp;&emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_und.php?filename=$data045[file_und]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data045['file_rapat']=='')
				  {
					echo "Bahan rapat &emsp;&nbsp;: No File Download <br>";
				  }
				  else
				  {
				   echo "Bahan rapat &emsp;&nbsp;: <a title='Download File PDF' href='module/rapat_direktur/download_rapat.php?filename=$data045[file_rapat]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
				  
				  if($data045['file_lhr']=='')
				  {
					echo "Hasil rapat &emsp;&emsp;: No File Download <br>";
				  }
				  else
				  {
				   echo "Hasil rapat &emsp;&emsp;: <a title='Download File PDF' href='module/rapat_direktur/download_lhr.php?filename=$data045[file_lhr]' alt='Lihat' class='btn btn-secondary btn-sm'> Download</a> <br>";
				  }
                }
             $no++;
            }
              ?>
              </td>
					</tr>
				<?php
					// $no++;
					// }
				?>
                </tbody>
              </table>
            
				</div>
            </div>
		</div>
            <!-- /.card-header -->

            
          <!-- /.card -->
		  
		</div>
	</div>
</div>
</section>

<!-- DataTables -->
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap4.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
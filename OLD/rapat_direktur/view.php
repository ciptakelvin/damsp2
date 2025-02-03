<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus Kegiatan Ini ?");
}
</script>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title form-control-sm">Agenda Direktur</h3>
			  <div class="text-right">
                    <a href="?module=input_rapat_direktur" class="btn btn-sm btn-warning">
                      Tambah Agenda
                    </a>
                  </div>
            </div>
			<div class="card-body">
				<div class="row">
				   <table id="example2" class="table table-bordered table-hover form-control-sm">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No. Surat/<br> Tanggal</th>
                  <th>Agenda</th>
                  <th>Tempat</th>
                  <th>Tanggal Agenda</th>
                  <th>Waktu</th>
                  <th>Sifat</th>
                  <th>PIC</th>
                  <th>Menu</th>
                </tr>
                </thead>
                <tbody>
				<?php
        include("bulan.php");
        $batas = 3;        
        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
 
        $previous = $halaman - 1;
        $next = $halaman + 1;
        $data_rapat_direktur = mysqli_query($konek,"select * from rapat_direktur where status='1' LIMIT $halaman_awal, $batas");
        $data = mysqli_query($konek,"select * from rapat_direktur where status='1'");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);
        
        $no =$halaman_awal+1;
        while($d =mysqli_fetch_array($data_rapat_direktur))
				
					{
						$thn_keg = substr($d['tanggal'],0,4);
						$bln_keg = substr($d['tanggal'],5,2);
						$tgl_keg = substr($d['tanggal'],8,2);
				?>

					<tr>
					  <td><?php echo $no; ?></td>
					  <td><?php echo $d['nomor']; ?><br><?php echo $tgl_keg." ".bulan1($bln_keg)." ".$thn_keg; ?></td>
					  <td><?php echo $d['agenda']; ?></td>
					  <td><?php echo $d['tempat']; ?></td>
					  <td><?php echo $d['tanggal_rapat']; ?></td>
					  <td><?php echo substr($d['waktu_mulai'],0,5); ?><p>-<?php echo substr($d['waktu_selesai'],0,5); ?></td>
					  	<td><?php echo $d['sifat']; ?></td>
					  <td><?php echo $d['unit'];?></td>

					  <td>
						<a title="Lihat" href="?module=view_rp_direktur&id=<?php echo $d['id_rp_dir'];?>" alt="Lihat" class="btn btn-sm btn-warning" width=5px><img src="img/edit.png" height="20" width="20"> Edit</a>
						<a title="Hapus" href="?module=del_rp_direktur&id=<?php echo $d['id_rp_dir'];?>" alt="Lihat" class="btn btn-sm btn-danger" width=10px><img src="img/delete.png" height="20" width="20">Hapus</a>
									</td>
					</tr>

        <?php
          $no++;
          }
        ?>
                </tbody>

              </table>
               
                    <nav>
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
        </li>
        <?php
        for($x=1;$x<=$total_halaman;$x++){
          ?>
          <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x?>"><?php echo $x; ?></a></li>
           <?php
        }
        ?>      
        <li class="page-item">
          <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
        </li>
      </ul>
    </nav>      
				</div>
            </div>
		</div>
	</div>

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
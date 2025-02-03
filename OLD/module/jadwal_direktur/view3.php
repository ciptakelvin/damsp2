<link rel="stylesheet" href="css/fontawesome.min.css">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title form-control-sm">Kegiatan Direktur Pemeriksaan dan Penagihan dengan Surat Tugas</h3>
			  <div class="text-right">
                    <a href="?module=input_st_direktur" class="btn btn-sm btn-warning">
                      Tambah Surat Tugas
                    </a>
                  </div>
            </div>
			<div class="card-body">
				<div class="row">
				   <table id="example2" class="table table-bordered table-hover form-control-sm">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No. ST/<br> Tanggal</th>
                  <th>Agenda</th>
                  <th>Tempat</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Sifat</th>
                  <th>Pegawai</th>
                  <th>Menu</th>
                </tr>
                </thead>
                <tbody>
				<?php
				include("bulan.php");
					$query = "select * from surat_tugas_direktur where status ='1' ";
					$run = mysqli_query($konek,$query);
					$no=1;
					while($data= mysqli_fetch_array($run))
					{
						$thn_keg = substr($data['tanggal'],0,4);
						$bln_keg = substr($data['tanggal'],5,2);
						$tgl_keg = substr($data['tanggal'],8,2);
				?>
					<tr>
					  <td><?php echo $no; ?></td>
					  <td><?php echo $data['nomor']; ?><br><?php echo $tgl_keg." ".bulan1($bln_keg)." ".$thn_keg; ?></td>
					  <td><?php echo $data['agenda']; ?></td>
					  <td><?php echo $data['tempat']; ?></td>
					  <td><?php echo $data['awal']; ?></td>
					  <td><?php echo $data['akhir']; ?></td>
					  <td><?php echo $data['sifat']; ?></td>
					  <td><?php $id_st = $data['id_st'];
								$query2="select * from pegawai_tugas_direktur where id_st_dir ='$id_st' and status = '1'";
								$run2=mysqli_query($konek,$query2);
								$nomor = 1;
								while($data2=mysqli_fetch_array($run2))
								{
									echo "<div>".$nomor.". ".$data2['nama']."</div>";
									$nomor++; 
								}
								?>
								</td>
					  <td>
						<a href="?module=view_st_direktur&id=<?php echo $data['id_st'];?>" class="btn btn-sm btn-warning"><img src="img/edit.png" height="20" width="20"> Edit</a>
						<a href="?module=del_st_direktur&id=<?php echo $data['id_st'];?>" class="btn btn-sm btn-danger"><img src="img/delete.png" height="23" width="27"> Hapus</a>
									</td>
					</tr>
				<?php
					$no++;
					}
				?>
                </tbody>
              </table>
            
				</div>
            </div>
		</div>
	</div>

<!-- DataTables -->
<script src="js/jquery.dataTables.js"></script>
<script src="js/all.min"></script>
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
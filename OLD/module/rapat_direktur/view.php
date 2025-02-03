<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus Kegiatan Ini ?");
}
</script>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title form-control-sm">Undangan Rapat Direktur</h3>
			  <div class="text-right">
                    <a href="?module=input_rapat_direktur" class="btn btn-sm btn-warning">
                      Tambah Rapat
                    </a>
                  </div>
            </div>
			<div class="card-body">
				<div class="row">
				   <table id="example2" class="table table-bordered table-hover form-control-sm">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No. Undangan/<br> Tanggal</th>
                  <th>Agenda</th>
                  <th>Tempat</th>
                  <th>Tanggal Rapat</th>
                  <th>Waktu</th>
                  <th>Sifat</th>
                  <th>PIC</th>
                  <th>Menu</th>
                </tr>
                </thead>
                <tbody>
				<?php
				//include("bulan2.php");
					$query = "select * from rapat_direktur where status ='1' ORDER BY tanggal_rapat ASC ";
					$run = mysqli_query($konek,$query);
					$no=1;
					while($data= mysqli_fetch_array($run))
					{
						//$thn_keg = substr($data['tanggal'],0,4);
						//$bln_keg = substr($data['tanggal'],5,2);
						//$tgl_keg = substr($data['tanggal'],8,2);
				?>
					<tr>
					  <td><?php echo $no; ?></td>
					  <td><?php echo $data['nomor']; ?><br><?php echo $tgl_keg." ".$bln_keg." ".$thn_keg; ?></td>
					  <td><?php echo $data['agenda']; ?></td>
					  <td><?php echo $data['unit']; ?></td>
					  <td><?php echo $data['tanggal_rapat']; ?></td>
					  <td><?php echo substr($data['waktu_mulai'],0,5); ?><p>-<?php echo substr($data['waktu_selesai'],0,5); ?></td>
					  	<td><?php echo $data['sifat']; ?></td>
					  <td><?php $id_peg = $data['pic'];
								$query2="select * from pegawai where id_peg ='$id_peg'";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								echo $data2['nama'];?></td>

					  <td>
						<a title="Lihat" href="?module=view_rp_direktur&id=<?php echo $data['id_rp_dir'];?>" alt="Lihat" class="btn btn-sm btn-warning"><img src="img/edit.png" height="20" width="20"> Edit</a>
						<a title="Hapus" href="?module=del_rp_direktur&id=<?php echo $data['id_rp_dir'];?>" alt="Lihat" class="btn btn-sm btn-danger"><img src="img/delete.png" height="20" width="20"> Delete</a>
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
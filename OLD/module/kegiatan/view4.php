<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus Kegiatan Ini ?");
}
</script>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title form-control-sm">Undangan Rapat Subdit</h3>
			  <div class="text-right">
                    <a href="?module=input_rapat" class="btn btn-sm btn-warning">
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
                  <th>Waktu</th>
                  <th>PIC</th>
                  <th>Menu</th>
                </tr>
                </thead>
                <tbody>
				<?php
				include("bulan.php");
					$query = "select * from rapat_subdit where status ='1' ";
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
					  <td><?php echo $data['nomor']; ?><br><?php echo $tgl_keg." ".bulan2($bln_keg)." ".$thn_keg; ?></td>
					  <td><?php echo $data['agenda']; ?></td>
					  <td><?php echo $data['unit']; ?></td>
					  <td><?php echo $data['tanggal']; ?></td>
					  <td><?php $id_peg = $data['pic'];
								$query2="select * from pegawai where id_peg ='$id_peg'";
								$run2=mysqli_query($konek,$query2);
								$data2=mysqli_fetch_array($run2);
								echo $data2['nama'];
						?></td>
					  <td><a title="Lihat" href="?module=view_rp&id=<?php echo $data['id_rp'];?>" alt="Lihat"><img src="img/look.png" height="20" width="20"></a>
						<a title="Hapus" onclick="myFunction_1()" href="?module=del_rp&id=<?php echo $data['id_rp'];?>"><img src="img/del.png" height="20" width="20"></a>
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
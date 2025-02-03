
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title form-control-sm">Daftar Pegawai Subdit Kersduk</h3>
				<div class="text-right">
                    <a href="?module=input_pegawai" class="btn btn-sm btn-success">
                      Tambah Pegawai
                    </a>
                  </div>
            </div>
			<div class="card-body">
				<div class="row">
				   <table id="example2" class="table table-bordered table-hover form-control-sm">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Jabatan</th>
                  <th>Seksi</th>
                  <th>Menu</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$query = "select * from pegawai a, id_seksi b where a.id_sie = b.id_sie and a.id_sie!='4' and status='1' order by jabatan";
					$run = mysqli_query($konek,$query);
					$no=1;
					while($data= mysqli_fetch_array($run))
					{
				?>
					<tr>
					  <td><?php echo $no; ?></td>
					  <td><?php echo $data['nama']; ?></td>
					  <td><?php echo $data['nip18']; ?></td>
					  <td><?php echo $data['jabatan']; ?></td>
					  <td><?php echo $data['seksi']; ?></td>
					  
					  <td><a title="Lihat" href="?module=view_pegawai&id=<?php echo $data['id_peg'];?>" alt="Lihat"><img src="img/look.png" height="20" width="20"></a>
						<a title="Hapus" href="?module=del_pegawai&id=<?php echo $data['id_peg'];?>"><img src="img/del.png" height="20" width="20"></a>
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
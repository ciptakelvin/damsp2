<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus Kegiatan Ini ?");
}
</script>
<section class="content">
	<div class="container-fluid">
     <div class="row ">
        <div class="col-12">
          <div class="card card-success">
		  
            <div class="card-header">
              <h3 class="card-title">Surat Tugas Pegawai Subdit</h3>
			  <div class="text-right">
                    <a href="?module=input_st" class="btn btn-sm btn-warning">
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
                  <th>Waktu</th>
                  <th>Pegawai</th>
                  <th>Menu</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$query = "select * from surat_tugas where status ='1'";
					$run = mysqli_query($konek,$query);
					$no=1;
					while($data= mysqli_fetch_array($run))
					{
				?>
					<tr>
					  <td><?php echo $no; ?></td>
					  <td><?php echo $data['nomor']; ?><br><?php echo $data['tanggal']; ?></td>
					  <td><?php echo $data['agenda']; ?></td>
					  <td><?php echo $data['tempat']; ?></td>
					  <td><?php echo $data['awal']; ?></td>
					  <td><?php $id_st = $data['id_st'];
								$query2="select * from pegawai_tugas where id_st ='1'";
								$run2=mysqli_query($konek,$query2);
								while($data2=mysqli_fetch_array($run2)
								{
									echo "pegawai"; 
								}
								?>
								</td>
					  <td><a title="Lihat" href="?module=view_st&id=<?php echo $data['id_st'];?>" alt="Lihat"><img src="img/look.png" height="20" width="20"></a>
						<a title="Hapus" onclick="myFunction_1()" href="?module=del_st&id=<?php echo $data['id_st'];?>"><img src="img/del.png" height="20" width="20"></a>
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
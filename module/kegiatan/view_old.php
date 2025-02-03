<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus Kegiatan Ini ?");
}
</script>
<section class="content">
	<div class="container-fluid">
     <div class="row ">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Kegiatan Subdit tanpa Surat Tugas</h3>
			  <div class="text-right">
                    <a href="?module=input_kegiatan" class="btn btn-sm btn-warning">
                      Tambah Kegiatan
                    </a>
                  </div>
            </div>
			<div class="card-body">
				<div class="row">
					<div class="col-12 timeline timeline-inverse">
					<?php
						$query = "select * from tugas_subdit a, id_seksi b where a.pic = b.id_sie";
						$run = mysqli_query($konek, $query);
						while($data=mysqli_fetch_array($run))
						{
					?>
					<!-- timeline time label -->
                      <div class="time-label form-control-sm">
                        <span class="bg-danger">
                          <?php echo $data['tanggal'];?>
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
						<i class="fa bg-primary"></i>
                        <div class="timeline-item ">
                          <h3 class="timeline-header form-control-sm"><a href="#"></a>PIC : <?php echo $data['seksi'];?></h3>

                          <div class="timeline-body form-control-sm">
							<?php echo $data['tugas']." pada ".$data['tanggal']." di ".$data['tempat'].". Peserta : ".$data['peserta']; ?>
                          </div>
                          <div class="timeline-footer">
                          </div>
                        </div>
                      </div>
					<?php			
						}
					?>
                      
					  
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa bg-gray"></i>
                      </div>
                    </div>
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
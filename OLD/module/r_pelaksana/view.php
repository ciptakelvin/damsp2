<?php
$query = "select * from id_seksi where id_sie ='$seksi'";
$run = mysqli_query($konek,$query);
$data = mysqli_fetch_array($run);
?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">RKI Pelaksana <?php echo $data['seksi']; ?></h3>
              </div>
              <div class="card-body">
                  <div class="text-left">
					<a href="?module=rki_pelaksana" class="btn btn-sm btn-secondary">
					<img src="img/back2.png" width="15" height="15">
                      Kembali
                    </a>
                  </div>
				  <br>
			  <?php
			  $query2 = "select * from pegawai where id_sie ='$seksi' and jabatan = 'Pelaksana'";
			  $run2 = mysqli_query($konek,$query2);
			  ?>
			  <table id="example1" class="table table-bordered table-striped form-control-sm">
				<tr><th>No</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Pangkat/Gol</th>
					<th>Capaian</th>
					<th>Menu</th>
				</tr>
				<?php
				$no = 1;
				while($data1 = mysqli_fetch_array($run2))
				{				
				?>
					<tr><td><?php echo $no; ?></td>
						<td><?php echo $data1['nip18']; ?></td>
						<td><?php echo $data1['nama']; ?></td>
						<td><?php echo $data1['panggol']; ?></td>
						<td><?php echo $data1['indikator']; ?></td>
						<td><a title="Edit" href="?module=view_rpelaksana&id=<?php echo $data1['id_peg']; ?>"><img src="img/look.png" height="20" width="20"></a>
						</td>
					</tr>
				<?php
				$no++;
				}
				?>
			  </table>
              </div>
              <!-- /.card-body -->
            </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
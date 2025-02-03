<?php
$id_peg = $_GET['id'];
$query = "select * from pegawai where id_peg ='$id_peg'";
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
                <h3 class="card-title">RKI Pelaksana <?php echo $data['nama']; ?></h3>
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
			  $query2 = "SELECT a.*, b.uraian FROM rki_pegawai a, uraian_rko b where a.id_uraian = b.id_uraian and a.pic = '$id_peg' and a.status ='1'";
			  $run2 = mysqli_query($konek,$query2);
			  ?>
			  <table id="example1" class="table table-bordered table-striped form-control-sm">
				<tr><th>No</th>
					<th>RKO</th>
					<th>RKI</th>
					<th>Target</th>
					<th>Realisasi</th>
					<th>Menu</th>
				</tr>
				<?php
				$no = 1;
				while($data1 = mysqli_fetch_array($run2))
				{				
				?>
					<tr><td><?php echo $no; ?></td>
						<td><?php echo $data1['uraian']; ?></td>
						<td><?php echo $data1['kegiatan']; ?></td>
						<td><?php echo $data1['volume']." ".$data1['satuan']; ?></td>
						<td><?php
									$id_keg = $data1['id_rkipeg'];
									$query3 ="select count(*) jml from realisasi_rki where id_keg ='$id_keg' and val='1'"; 
									$run3 = mysqli_query($konek,$query3);
									$data3 = mysqli_fetch_array($run3);
									echo $data3['jml']." ".$data1['satuan'];
						?></td>
						<td><a href="?module=validasi_rki&id=<?php echo $data1['id_rkipeg']; ?>" class="btn btn-sm btn-warning">Lihat</a>
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
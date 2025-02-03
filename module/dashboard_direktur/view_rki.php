<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus RKI ini ?");
}
</script>
<?php
//query data pegawai
$id_pegawai = $_GET['id'];

//query RKI
$query2 = "select a.id_rki, a.id_uraian, a.id_peg, b.uraian, b.id_rko from uraian_rki a, uraian_rko b where a.id_uraian = b.id_uraian and a.status ='1' and id_peg = '$id_pegawai'";
$run2 = mysqli_query($konek,$query2);

?>
<div class="row">

          <!-- /.col -->
          <div class="col-md-12">
			  
				<?php
					$ket = $_GET['ket'];
					if($ket == "profil")
					{
				?><div class="col-sm-12">
					<a href="#" class="btn btn-sm btn-success">
                      Perubahan profil sukses disimpan
                    </a>
				</div>
				<br>
				<?php
					}
					else if($ket == "gagal")
					{
				?>
				<div class="col-sm-12">
					<a href="#" class="btn btn-sm btn-danger">
                      Perubahan profil gagal disimpan
                    </a>
				</div>
				<br>
				<?php
				}
				?>
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item form-control-sm"><a class="nav-link active" href="#activity" data-toggle="tab">RKI</a></li>
                </ul>
              </div>
              <div class="card-body">
                
				<div class="tab-content">
				
                  <div class="active tab-pane" id="activity">
					      <div class="card">
							<div class="card-body p-0">
							  <table class="table table-striped projects form-control-sm">
								  <thead>
									  <tr>
										  <th style="width: 1%">
											  #
										  </th>
										  <th style="width: 20%">
											  Project Name
										  </th>
										  <th style="width: 30%">
											  Team Members
										  </th>
										  <th>
											  Project Progress
										  </th>
									  </tr>
								  </thead>
								  <tbody>
								  <?php
									while($data2= mysqli_fetch_array($run2))
									{
									
								  ?>
									  <a href="#">
									  <tr>
										  <td>#</td>
										  <td><?php echo $data2['uraian']; ?></td>
										  <td>
											<ul class="list-inline">
										 <?php
											$id_uraian = $data2['id_uraian'];
											$query3 = "select a.*, b.id_peg, b.nama, b.panggil, b.gambar FROM uraian_rki a, pegawai b WHERE a.id_peg = b.id_peg and a.status ='1' and a.id_uraian = '$id_uraian'";
											$run3 = mysqli_query($konek,$query3);
											while($data3=mysqli_fetch_array($run3))
											{
										?>
												  <li class="list-inline-item">
													  <img alt="" title="<?php echo $data3['panggil']; ?>" width="50" height="50" src="img/<?php echo  $data3['gambar']; ?>">
												  </li>
										<?php
											}
										  ?>
											  </ul>
										  </td>
										  <?php
											$id_rki =$data2['id_rki'];
											$query4 = "SELECT count(*) realisasi FROM `realisasi_rki` WHERE id_rki ='$id_rki' and val='1'";
											$run4 = mysqli_query($konek,$query4);
											$data4 = mysqli_fetch_array($run4);
											
											$query5 = "select volume from rki_pegawai where id_rkipeg ='1'";
											$run5 = mysqli_query($konek,$query5);
											$data5 = mysqli_fetch_array($run5);
											
											$realisasi = $data4['realisasi'] *100 / $data5['volume'];
											
										  ?>
										  <td class="project_progress">
											  <div class="progress progress-sm">
												  <div class="progress-bar bg-green" role="progressbar" aria-volumenow="<?php echo $realisasi; ?>" aria-volumemin="0" aria-volumemax="100" style="width: <?php echo $realisasi; ?>%">
												  </div>
											  </div>
											  <small>
												  <?php echo $realisasi; ?>% Complete
											  </small>
										  </td>
									  </tr>
									  </a>
									  <?php
									  }
									  ?>
								  </tbody>
							  </table>
							</div>
							<!-- /.card-body -->
      </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
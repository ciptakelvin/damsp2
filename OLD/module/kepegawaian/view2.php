<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus RKI ini ?");
}
</script>
<?php
$id_peg = $_GET['id'];
//query data pegawai
$query = "select a.id_peg, nip9, nip18, nama, panggil, motivasi, email, wa, panggol, gambar, b.id_sie, b.seksi, jabatan from pegawai a, id_seksi b where id_peg = '$id_peg' and a.id_sie = b.id_sie";
$run = mysqli_query($konek,$query);
$data = mysqli_fetch_array($run);

//query RKI
$query2 = "select a.id_rki, a.id_uraian, a.id_peg, b.uraian, b.id_rko from uraian_rki a, uraian_rko b where a.id_uraian = b.id_uraian and a.status ='1' and id_peg = '$id_peg'";
$run2 = mysqli_query($konek,$query2);

?>
<div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                        src="img/<?php echo $data['gambar'];?>"
                       alt="User profile picture">
                </div>

                 <h3 class="profile-username text-center small"><?php echo $data['nama']; ?></h3>

                <p class="text-muted text-center small"><?php echo $data['jabatan'];?>&nbsp;<?php echo $data['seksi']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <strong><img src="img/cita.png" width="25" height="25"> Motivasi</strong>
					<p class="text-muted small">
					  <?php echo $data['motivasi'];?>
					</p>
                  </li>
                  <li class="list-group-item">
                    <strong><img src="img/contact.png" width="25" height="25">Kontak</strong>
					<p class="text-muted small" >
					  <?php echo $data['wa'];?><br>
					   <?php echo $data['email'];?>
					</p>
                  </li>
                  <li class="list-group-item">
                    <strong><img src="img/panggol.png" width="25" height="25"> Pangkat/Golongan</strong>
					<p class="text-muted small">
					  <?php echo $data['panggol'];?>
					</p>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item form-control-sm"><a class="nav-link active" href="#activity" data-toggle="tab">RKI</a></li>
                  <li class="nav-item form-control-sm "><a class="nav-link" href="#timeline" data-toggle="tab">Tugas</a></li>
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
								  $no=1;
									while($data2= mysqli_fetch_array($run2))
									{
									
								  ?>
									  <tr>
										  <td><?php echo $no; ?></td>
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
											$query4 = "SELECT sum(vol) realisasi FROM `realisasi_rki` WHERE id_rki ='$id_rki' and val='1' ";
											$run4 = mysqli_query($konek,$query4);
											$data4 = mysqli_fetch_array($run4);
											$query5 = "select sum(volume) rencana from rki_pegawai a, realisasi_rki b where a.id_rkipeg = b.id_rki and a.id_rki ='$id_rki' and a.status='1' and b.status = '1'";
											$run5 = mysqli_query($konek,$query5);
											$data5 = mysqli_fetch_array($run5);
											
											$realisasi = $data4['realisasi'] *100 / $data5['rencana'];
											
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
									  <?php
									  $no++;
									  }
									  ?>
								  </tbody>
							  </table>
							</div>
							<!-- /.card-body -->
      </div>
      <!-- /.card -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
					  <?php
						$id_pegawai = $data['id_peg'];
						$today = date("Y-m-d");
						$seminggu = date("Y-m-d",strtotime("-7 days",strtotime($today)));
						//echo $seminggu;
						$query4 = "select agenda, awal tanggal, tempat from surat_tugas a, pegawai_tugas b where a.id_st = b.id_st and id_peg ='$id_pegawai' and tanggal >= '$seminggu' union all select agenda, tanggal, tempat from rapat_subdit where pic='$id_pegawai' and tanggal >= '$seminggu' union all select tugas, tanggal, tempat from tugas_subdit where pic ='$id_pegawai' and tanggal >= '$seminggu'";
						$run4 = mysqli_query($konek,$query4);
						while($data4 = mysqli_fetch_array($run4))
						{
					  ?>
                      <div class="time-label form-control-sm">
                        <span class="bg-danger">
                          <?php echo $data4['tanggal']; ?>
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
						<i class="fa bg-primary"></i>
                        <div class="timeline-item ">
                          <h3 class="timeline-header form-control-sm"><a href="#">Surat Tugas</a> </h3>

                          <div class="timeline-body form-control-sm">
                            <?php echo $data4['agenda']." ".$data4['tanggal']." di ".$data4['tempat']; ?>
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
                  <!-- /.tab-pane -->
                  <!-- /.tab-pane -->
				  
				  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
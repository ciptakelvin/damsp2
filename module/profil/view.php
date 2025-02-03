<script>
function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus RKI ini ?");
}
</script>
<?php
//query data pegawai
$query = "select a.id_peg, nip9, nip18, nama, panggil, motivasi, email, wa, panggol, gambar, b.id_sie from pegawai a, id_seksi b where nip9 = '$user' and a.id_sie = b.id_sie";
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

                <p class="text-muted text-center small"><?php echo $data['seksi']; ?></p>

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
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
			  
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
                  <li class="nav-item form-control-sm"><a class="nav-link active" href="#settings" data-toggle="tab">Profil</a></li>
                  <li class="nav-item form-control-sm"><a class="nav-link" href="#password" data-toggle="tab">Password</a></li><?php if($data['id_sie'] == '1' || $data['id_sie'] == '2' || $data['id_sie'] == '3'){ 
				?>
				<li class="nav-item form-control-sm"><a class="nav-link" href="#activity" data-toggle="tab">RKI</a></li>
                <li class="nav-item form-control-sm "><a class="nav-link" href="#timeline" data-toggle="tab">Tugas</a></li>
				<?php
				}
				?>
				
                </ul>
              </div>
              <div class="card-body">
                
				<div class="tab-content">
				
                  <div class="tab-pane" id="activity">
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
										  <th style="width: 20%">
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
										  <td class="project-actions text-right">
											  <a title="ubah" href="?module=view_rki&uraian=<?php echo $data2['id_uraian'];?>&id=<?php echo $data2['id_rki'];?>">
												  <img src="img/edit.png" width="20" height="20">
											  </a>
											  <a title="hapus" onclick="myFunction_1()" href="?module=del_rki&id=<?php echo $data2['id_rki'];?>">
												  <img src="img/del.png" width="20" height="20">
											  </a>
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
		<div class="text-right">
                    <a href="?module=input_rki" class="btn btn-sm btn-primary">
                      Tambah RKI
                    </a>
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

                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="module/profil/proses3.php">
                      <div class="form-group row">
					  <input type="hidden" name ="user" value="<?php echo $user; ?>">
                        <label for="inputName" class="col-sm-2 col-form-label form-control-sm">Panggilan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" id="panggilan" name="panggilan" placeholder="Nama Panggilan" value="<?php echo $data['panggil'];?>" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label form-control-sm">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Email"  value="<?php echo $data['email'];?>" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label form-control-sm">Whatsapp</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" id="wa" name="wa" placeholder="Nomor Whatsapp" value="<?php echo $data['wa'];?>" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label form-control-sm">Motivasi</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" id="motivasi" name="motivasi" placeholder="Motivasi" value="<?php echo $data['motivasi'];?>" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label form-control-sm">Gambar<br>(.JPG)</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control form-control-sm" id="gambar" name="gambar">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn bg-gradient-success btn-sm">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
				  
				  <div class="tab-pane" id="password">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="module/profil/proses4.php">
						<div class="form-group row">
						<input type="hidden" name ="user" value="<?php echo $user; ?>">
                        <label for="inputName" class="col-sm-2 col-form-label form-control-sm">Password Lama</label>
                        <div class="col-sm-8">
                          <input type="password" class="col-sm-8 form-control form-control-sm" id="lama" name="lama" placeholder="Password Lama">
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label form-control-sm">Password Baru</label>
                        <div class="col-sm-8">
                          <input type="password" class="col-sm-8 form-control form-control-sm" id="baru" name="baru" placeholder="Password Baru" required>
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label form-control-sm">Konfirmasi Password Baru</label>
                        <div class="col-sm-8">
                          <input type="password" class="col-sm-8 form-control form-control-sm" id="baru2" name="baru2" placeholder="Konfirmasi Password Baru" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-8 text-right">
                            <button type="submit" class="btn bg-gradient-success btn-sm">Simpan</button>
                        </div>
                      </div>
					  </form>
				  </div>
				  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
<section class="col-lg-12 connectedSortable">

            <!-- Map card -->

            <!-- /.card -->

            <!-- solid sales graph -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <img src="img/capaian_rki.png" width="25" height="25">
                  Capaian RKI Pelaksana
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-success btn-sm" data-card-widget="collapse">
                    <i><img src="img/minimize.png" width="20" height="20"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
				<?php
				$query = "select r.id_peg, id_sie, nama, realisasi/target*100 realisasi from pegawai r left join (select * from (select pic, sum(volume) target from rki_pegawai where status='1' group by pic) x , (select id_peg, sum(volume) realisasi from realisasi_rki group by id_peg) y where x.pic=y.id_peg) z on r.id_peg = z.pic where r.id_sie !='4' order by r.id_peg desc";
				$run = mysqli_query($konek, $query);
				while($data = mysqli_fetch_array($run)){
				?>
				<div class="col-4 text-center">
				<a href="?module=realisasi_rki&id=<?php echo $data['id_peg']; ?>">
                    <input type="text" class="knob" data-readonly="true" value="<?php echo $data['realisasi']; ?>" data-width="60" data-height="60"
                           data-fgColor="#9803fc">

                    <div class="text-white"><?php echo $data['nama']; ?></div>
				</a>
                  </div>
				<?php
				}
				?>	
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->

            <!-- /.card -->
          </section>
<script>

</script>
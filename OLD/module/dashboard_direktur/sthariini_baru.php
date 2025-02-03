<?php
$today = date("Y-m-d");
$seminggu = date("Y-m-d",strtotime("-7 days",strtotime($today)));

$query = "select a.*, b.gambar, b.nama from surat_tugas_direktur c, pegawai_tugas_direktur a, pegawai b where a.id_st_dir = c.id_st and a.id_peg = b.id_peg and a.status ='1' and c.tanggal > '$seminggu'";
$run=mysqli_query($konek,$query);

$query2 = "select count(*) jml from pegawai_tugas_direktur where status ='1' and c.tanggal <= '$seminggu'";
$run2 = mysqli_query($konek,$query2);
$data2 = mysqli_fetch_array($run2);
?>
 <section class="content">
  <div class="container-fluid">
     <div class="row ">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Kegiatan Direktur Dengan Surat Tugas</h3>
            </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 timeline timeline-inverse">
          <?php
          $today = date("Y-m-d");
          $seminggu = date("Y-m-d",strtotime("-1 days",strtotime($today)));
          $seminggu2 = date("Y-m-d",strtotime("+7 days",strtotime($today)));
            $query = "select * from surat_tugas_direktur where status ='1' and awal between '$seminggu' and '$seminggu2'  ORDER BY awal DESC";
            $run = mysqli_query($konek, $query);
            while($data=mysqli_fetch_array($run))
            {
          ?>
          <!-- timeline time label -->
                      <div class="time-label form-control-sm">
                        <span style="background-color: #04db3e; color: white;">
                          <?php echo $data['tanggal'];?>
                        </span>
                        <span class="bg-blue">
                          <?php echo date('d M Y',strtotime ($data['awal']));?> - <?php echo date('d M Y',strtotime ($data['akhir']));?>
                        </span>
                       <?php 
                       $sifat = $data['sifat'];
                       if($sifat =="Biasa")
                        {
                            echo "<span class='bg-yellow'>Biasa</span>";
                          }elseif($sifat == "Penting"){
                            echo "<span style='background-color: #ff1000; color: white;'>Penting</span>";
                          }else{ echo "<span style='background-color: #9e0a00; color: white'>Sangat Penting</span>";}
                          ?>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
            <i class="fa bg-primary"></i>
                        <div class="timeline-item ">
                          <h3 class="timeline-header form-control-sm"><a href="#"></a>Tempat : <?php echo $data['tempat'];?></h3>

                          <div class="timeline-body form-control-sm">
              <?php echo $data['agenda']." pada ".$data['awal']." di ".$data['tempat'] ?>
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
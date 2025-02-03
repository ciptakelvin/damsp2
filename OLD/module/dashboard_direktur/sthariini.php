<?php
$today = date("Y-m-d");
$seminggu = date("Y-m-d",strtotime("-7 days",strtotime($today)));

$query = "select a.*, b.gambar, b.nama from surat_tugas_direktur c, pegawai_tugas_direktur a, pegawai b where a.id_st_dir = c.id_st and a.id_peg = b.id_peg and a.status ='1' and c.tanggal > '$seminggu'";
$run=mysqli_query($konek,$query);

$query2 = "select count(*) jml from pegawai_tugas_direktur where status ='1' and c.tanggal <= '$seminggu'";
$run2 = mysqli_query($konek,$query2);
$data2 = mysqli_fetch_array($run2);
?>
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Pegawai ST Bersama Direktur Minggu Ini</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger"><?php echo $data2['jml'] ?> Pegawai</span>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
					<?php
						while($data=mysqli_fetch_array($run))
						{
					?>
                      <li>
                        <img src="<?php echo "img/".$data['gambar']; ?>" alt="User Image">
                        <a class="users-list-name" href="#"><?php $data['panggil']; ?></a>
                      </li>
					<?php
						}
					?>
                      
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="?module=jadwal_direktur">Lihat Detail</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
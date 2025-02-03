<?php
$bulanini = date("m");
$seminggu = date("Y-m-d",strtotime("-7 days",strtotime($today)));

$query = "select* from tugas_subdit where status ='1' and date_format(tanggal,'%m') = '$bulanini' ";
$run=mysqli_query($konek,$query);
include("bulan.php");

?>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <img src="img/kegiatan_subdit.png" width="25" height="25">
				  <?php
				  //$today = now();
				  ?>
                  Kegiatan Subdit Bulan <?php echo date('M Y'); ; ?>
                </h3>

               <!-- <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>-->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
				<?php
					$bln = date("m");
					while($data=mysqli_fetch_array($run))
					{
						$thn_keg = substr($data['tanggal'],0,4);
						$bln_keg = substr($data['tanggal'],5,2);
						$tgl_keg = substr($data['tanggal'],8,2);
						
				?>
				<li>
                    <!-- drag handle -->
                    <span class="handle">

                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                    </div>
                    <!-- todo text -->
                    <span class="col-md-8 text"><?php echo $data['tugas'];?></span>
                    <!-- Emphasis label -->
                    <small class="badge badge-warning"><?php echo $tgl_keg." ".bulan($bln_keg)." ".$thn_keg; ?></small>
                    <!-- General tools such as edit or delete-->
                    
                  </li>
				<?php
					}
				?>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
               <!-- <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button>-->
              </div>
            </div>
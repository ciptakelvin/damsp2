<?php
$bulanini = date("m");
$seminggu = date("Y-m-d",strtotime("-7 days",strtotime($today)));

$query = "select* from rapat_direktur where status ='1' and date_format(tanggal_rapat,'%m') = '$bulanini' ORDER BY tanggal_rapat DESC ";
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
                  Agenda Direktur Hari Ini 
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
            $wkt_mul = substr($data['waktu_mulai'],0,5);
            $wkt_sel = substr($data['waktu_selesai'],0,5);
						
				?>
				<li>
                    <!-- drag handle -->
                    <span class="handle">

                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                    </div>
                    <!-- todo text -->
                    <table width="1050px">
                    
                      <th colspan="4" width="1200px">
                    <span class="badge badge-warning col-md-12 text" style="font-size:20px"><?php echo $data['agenda'];?></span></th>
                    <tr>
                    <!-- Emphasis label -->
                    <td width="250px"><span class="badge badge-warning max-width:200px; min-width:200px; max-height:50px; min-height:50px; width:200px; height:50px;" style="font-size:15px"><?php echo $tgl_keg." ".bulan($bln_keg)." ".$thn_keg." Jam ".$wkt_mul." - ".$wkt_sel." WIB "; ?></span></td>
                      <td width="1000px"><span class="max-width:200px; min-width:200px; max-height:50px; min-height:50px; width:200px; height:50px;"><div class="sparkbar" maxlenght="24" data-color="#00a65a" data-height="20"><?php echo $data['tempat'];?></div></span></td>
                      <td width="400px"><span style="font-size:13px" class="bg"><div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $data['unit'];?></div></span></td>
                      <td width="100px"><?php 
                       $sifat = $data['sifat'];
                       if($sifat =="Biasa")
                        {
                            echo "<span style='font-size:13px' class='badge badge-warning'>Biasa</span>";
                          }elseif($sifat == "Penting"){
                            echo "<span style='font-size:13px' class='badge badge-danger'>Penting</span>";
                          }else{ echo "<span style='font-size:13px' class='badge badge-danger'>Sangat Penting</span>";}
                          ?></td>
                    </tr>
                    <tr><th colspan="4" width="1200px">
                    <span class="badge badge-warning col-md-12 text" style="font-size:15px">Nomor Surat : <?php echo $data['nomor'];?></span></th></tr>
                    </table>
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
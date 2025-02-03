<div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0 col-md-12">
						  
							<div class="card-header">
							<img src="img/rapat.png" width="25" height="25">
								  Rapat Direktur Minggu Ini
							</div>
                <div class="table-responsive">
                  <table class="table form-control-sm">
                    <tbody>
					<?php
					$today = date("Y-m-d");
					$seminggu = date("Y-m-d",strtotime("-1 days",strtotime($today)));
          $seminggu2 = date("Y-m-d",strtotime("+7 days",strtotime($today)));
						$query = "select * from rapat_direktur where status ='1' and tanggal_rapat between '$seminggu' and '$seminggu2'";
						$run=mysqli_query($konek,$query);
						while($data=mysqli_fetch_array($run))
						{
					?>
                    <tr>
                      
                      <td><span style="font-size:13px" class="badge badge-success"><?php echo $data['agenda'];?></span></td>
                      <td><span style="font-size:13px" class="badge badge-warning"><?php echo date('d M Y', strtotime($data['tanggal_rapat']));?> <?php echo substr($data['waktu_mulai'],0,5);?> - <?php echo substr($data['waktu_selesai'],0,5);?></td>
                      <td><span style="font-size:13px" class="badge badge-success">
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $data['tempat'];?></div>
                        <td><span style="font-size:13px" class="badge badge-danger"><?php echo $data['unit'];?></td>
                      </td>
                      <td><?php 
                       $sifat = $data['sifat'];
                       if($sifat =="Biasa")
                        {
                            echo "<span style='font-size:13px' class='badge badge-warning'>Biasa</span>";
                          }elseif($sifat == "Penting"){
                            echo "<span style='font-size:13px' class='badge badge-danger'>Penting</span>";
                          }else{ echo "<span style='font-size:13px' class='badge badge-danger'>Sangat Penting</span>";}
                          ?></td>
                    </tr>
					<?php
					}
					?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              <!--  <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
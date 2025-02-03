<div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0 col-md-12">
						  
							<div class="card-header">
							<img src="img/rapat.png" width="25" height="25">
								  Rapat Minggu Ini
							</div>
                <div class="table-responsive">
                  <table class="table form-control-sm">
                    <tbody>
					<?php
					$today = date("Y-m-d");
					$seminggu = date("Y-m-d",strtotime("-7 days",strtotime($today)));
						$query = "select * from rapat_subdit where status ='1' and tanggal = '$seminggu'";
						$run=mysqli_query($konek,$query);
						while($data=mysqli_fetch_array($run))
						{
					?>
                    <tr>
                      <td><?php echo $data['unit'];?></td>
                      <td><?php echo $data['waktu'];?></td>
                      <td><span class="badge badge-success"><?php echo $data['agenda'];?></span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $data['tempat'];?></div>
                      </td>
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
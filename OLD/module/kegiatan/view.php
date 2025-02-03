<div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item form-control-sm"><a class="nav-link active" href="#activity" data-toggle="tab">Surat Tugas</a></li>
                  <li class="nav-item form-control-sm "><a class="nav-link" href="#timeline" data-toggle="tab">Acara</a></li>
                  <li class="nav-item form-control-sm "><a class="nav-link" href="#meeting" data-toggle="tab">Rapat</a></li>
                </ul>
              </div>
              <div class="card-body">
				<div class="tab-content">
                  <div class="active tab-pane" id="activity">
					<?php
					include("view3.php");
					?>
      <!-- /.card -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
					<?php
					include("view_old.php");
					?>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="meeting">
                    <!-- The timeline -->
					<?php
					include("module/rapat/view.php");
					?>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
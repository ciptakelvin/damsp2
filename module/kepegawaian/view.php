<head>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<style>
div.scrollmenu {
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 7px;
  text-decoration: none;
}
</style>
</head>
<script>

function myFunction_1() {
  confirm("Apakah Anda Yakin Akan Menghapus Kegiatan Ini ?");
}
function myFunction_2(){
  confirm("Apakah Anda Yakin Akan Memvalidasi Agenda Ini ?");
}
function myFunction_3(){
  confirm("Apakah Anda Yakin Akan Menghapus Validasi Agenda Ini ?");
}

</script>
<div class="col-12">
          <div class="card">
            <div class="card-header">
              <h5>Daftar Pegawai Direktorat P2</h5>
				      <div class="text-right">
                    <a href="?module=input_pegawai" class="btn btn-sm btn-success">
                      Tambah Pegawai
                    </a>
					<a style="text-align:center" href="module/kepegawaian/toexcel_monitoring_pegawai.php" class="btn btn-sm btn-success">
                      Export Excel
                    </a>
                  </div>
            </div>
			 <div class="scrollmenu">
              <div class="card-body">
			     <div class="tab-content">
                <div class="row">
              <div class="card-body p-0">
				   <table id="example3" class="table table-bordered table-hover form-control-sm">
                <thead style="text-align:center" >
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIP/ID</th>
				  <th>Seksi</th>
                  <th>User</th>
                  <th>Status</th>
                  <th>Menu</th>
                </tr>
                </thead>
                <tbody>
				<?php
        include("conn.php");
					$query = "select a.*, b.seksi, b.subdit from pegawai a Left join id_seksi b on a.id_sie=b.id_sie where a.status='1' order by a.id_sie DESC";
					$run = mysqli_query($konek,$query);
					$no=1;
					while($data= mysqli_fetch_array($run))
					{
				?>
					<tr>
					  <td><?php echo $no; ?></td>
					  <td><?php echo $data['nama']; ?></td>
					  <td><?php echo $data['nip9']; ?></td>
					  <td><?php if ($data['jenis_user']=='dir' and $data['seksi']=='SubBagian Tata Usaha'){echo 'Direktur P2';}else{echo $data['seksi'];}; ?></td>
					  <td><?php if ($data['jenis_user']=='dir'){echo "<a title='Role Pejabat' alt='Role' class='btn btn-sm btn-danger' style='color:white'> Pejabat</a>";}elseif($data['jenis_user']=='admin_dir'){echo "<a title='Role sekre' alt='Role' class='btn btn-sm btn-warning'> Sekre</a>";}elseif($data['jenis_user']=='admin_pel'){echo "<a title='Role Admin ST' alt='Role' class='btn btn-sm btn-success'  style='color:white'> Admin ST</a>";}else{echo "<a title='Role Admin ST' alt='Role' class='btn btn-sm btn-info'  style='color:white'> Biasa</a>";}; ?></td>
            <td><?php if ($data['status']=='1'){echo "<a title='aktif' alt='aktif' class='btn btn-sm btn-success' style='color:white'> Aktif</a>";}else{echo "<a title='Pindah' alt='Role' class='btn btn-sm btn-warning' > Pindah</a>";} ;?></td>
					  
					  <td>
            <a title="Edit Kegiatan" href="?module=view_pegawai&id=<?php echo $data['id_peg'];?>" alt="Edit" class="btn btn-sm btn-warning"><img src="img/9_.png" height="20" width="20"> Edit</a>
            <a title="Hapus Kegiatan" href="?module=del_pegawai&id=<?php echo $data['id_peg'];?>" alt="Lihat" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');"><img src="img/10_.png" height="20" width="20" > Hapus</a>
									</td>
					</tr>
				<?php
					$no++;
					}
				?>
                </tbody>
              </table>
            
				</div>
            </div>
		</div>
	</div>
		</div>
            </div>

<!-- DataTables -->
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap4.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example3').DataTable({
    "dom": "<'row'<'col-sm-12 col-md-8'l><'col-sm-12 col-md-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
      "paging": true,
      "pagelenght":true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
       oLanguage: {
      oPaginate: {
        sNext: 'Next ',
        sPrevious: ' Previous'
      }
    },
    iDisplayLength: 10,
    "responsive": {
      pagingType: "simple"
    }

    });
  });
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
    "dom": "<'row'<'col-sm-12 col-md-8'l><'col-sm-12 col-md-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
      "paging": true,
      "pagelenght":true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
       oLanguage: {
      oPaginate: {
        sNext: 'Next ',
        sPrevious: ' Previous'
      }
    },
    iDisplayLength: 10,
    responsive: {
      pagingType: "simple"
    }

    });
  });
</script>
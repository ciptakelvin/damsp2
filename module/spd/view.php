<head>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<style>
div.scrollmenu {
  overflow: auto;
 
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
              <h5>Daftar Pegawai Kersduk ST Tahun ini</h5>
            </div>
			 <div class="scrollmenu">
              <div class="card-body">
			     <div class="tab-content">
                <div class="row">
				 <div class="text-right">
                    <a style="text-align:center" href="module/spd/toexcel_monitoring_spd.php" class="btn btn-sm btn-success">
                      Export Excel
                    </a>
                  </div>
              <div class="card-body p-0">
			  <div class="dt-responsive table-responsive">
				   <table id="example3" class="table table-bordered table-hover form-control-sm">
                <thead style="text-align:center" >
                <tr>
                  <th>No</th>
                  <th>No ST</th>
                  <th>Agenda</th>
				  <th>Tempat dan Tanggal Kegiatan</th>
                  <th>Pegawai</th>
                  <th>Menu</th>
                </tr>
                </thead>
                <tbody>
				<?php
        include("bulan.php");
					$query = "select a.id,a.no_surat,tanggal_surat,a.agenda,a.mulai,a.selesai,case when a.tempat = 'Lainnya' then a.tempat_lainnya else a.tempat end tempat_fix,a.status, count(c.nama) jml_pgw_st, count(d.nama) jml_pgw_byr from events_pegawai_p2 a left join pegawai_events c ON a.id = c.id_events_pgw LEFT JOIN id_seksi b ON c.id_sie = b.id_sie left join spd d on c.nama = d.nama and c.id_events_pgw = d.id_events_pgw where a.status='1' and EXTRACT(YEAR FROM a.tanggal_surat) = EXTRACT(YEAR FROM CURRENT_DATE) and b.subdit = 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan' Group by a.id,a.no_surat,tanggal_surat,a.agenda,a.mulai,a.selesai,a.tempat_lainnya,a.tempat,a.status order by mulai desc";
					$run = mysqli_query($konek,$query);
					$no=1;
					while($data= mysqli_fetch_array($run))
					{
			$thn_keg = substr($data['tanggal_surat'],0,4);
            $bln_keg = substr($data['tanggal_surat'],5,2);
            $tgl_keg = substr($data['tanggal_surat'],8,2);
           $thn_keg2 = substr($data['mulai'],0,4);
           $bln_keg2 = substr($data['mulai'],5,2);
           $tgl_keg2 = substr($data['mulai'],8,2);
           $thn_keg3 = substr($data['selesai'],0,4);
           $bln_keg3 = substr($data['selesai'],5,2);
           $tgl_keg3 = substr($data['selesai'],8,2);
		   $id = $data['id'];
		   //echo $id;
				?>
					<tr data-children='<table>
		  								<thead>
		      							<th style="background-color:#501537;color:#fff;text-align:center">Nama</th>
										<th style="background-color:#501537;color:#fff;text-align:center">Target</th>
										<th style="background-color:#501537;color:#fff;text-align:center">Realisasi</th>
		    							</tr>
		  								</thead>
		  								<?php
		  								$no2=1;
		  								$query2 = "SELECT a.nama,FORMAT(c.target,0) as target,FORMAT(c.realisasi,0) as realisasi FROM pegawai_events a LEFT JOIN id_seksi b on a.id_sie = b.id_sie left join spd c on a.nama = c.nama and a.id_events_pgw = c.id_events_pgw WHERE a.id_events_pgw = $id and b.subdit = 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan'";
										$run2 = mysqli_query($konek,$query2);
		  								while($data2=mysqli_fetch_array($run2)){
		  								?>
		  								<tbody>
		    							<tr>
		      							<td><?php echo $data2['nama'];?></td>
										<td><?php echo $data2['target'];?></td>
										<td><?php echo $data2['realisasi'];?></td>
		    						    </tr>
		    						  	<?php
										$no2++;
										}
										?>
		  							  </tbody>
									  </table>'>
					  <td><?php echo $no; ?></td>
					  <?php if($data['jml_pgw_byr']==$data['jml_pgw_st']){echo  '<td style="background-color:#0ecc77; color:#fff;text-align:center;text-align:center">' .$data['no_surat'].'<br>'.$tgl_keg.' '.bulan1($bln_keg).' '.$thn_keg.'</td>';}else{echo '<td>'.$data['no_surat'].'<br>'.$tgl_keg.' '.bulan1($bln_keg).' '.$thn_keg.'</td>';}?>
					  <td><?php echo $data['agenda']; ?></td>
					  <td><?php echo $data['tempat_fix']; ?><br><?php echo $tgl_keg2." ".bulan1($bln_keg2)." ".$thn_keg2; ?> - <?php echo $tgl_keg3." ".bulan1($bln_keg3)." ".$thn_keg3; ?></td>
					  <td><button class = 'viewChildren btn btn-sm btn-outline-danger' >Rincian Pegawai</button></td>
					  <td>
            <a title="Edit Kegiatan" href="?module=edit_spd&id=<?php echo $id;?>" alt="Edit" class="btn btn-sm btn-warning"><img src="img/9_.png" height="20" width="20"> Edit</a>
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
        "pagelenght": true,
        "lengthChange": false,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "details": {
            "renderer": function (api, rowIdx, columns) {
                var data = $.map(columns, function (col, i) {
                    return col.hidden ?
                        '<tr data-dt-row="' + col.rowIndex + '" data-dt-column="' + col.columnIndex + '">' +
                        '<td>' + col.title + ':' + '</td> ' +
                        '<td>' + col.data + '</td>' +
                        '</tr>' :
                        '';
                }).join('');
                return data ? $('<table/>').append(data) : false;
            }
        },
        "oLanguage": {
            "oPaginate": {
                "sNext": 'Next ',
                "sPrevious": ' Previous'
            }
        },
        "iDisplayLength": 10,
        "responsive": {
            "pagingType": "simple"
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
<script>
    $(document).on("click", ".viewChildren", rowClickHandler);

function rowClickHandler() {
  var btn = $(this);
  var tr = btn.closest('tr');
  var dtRow = $("#example3").DataTable().row(tr);
  if (dtRow.child.isShown()) {
    dtRow.child.hide();
    btn.text('Rincian Pegawai');
  } else {
    var children = tr.data("children");
    dtRow.child(children).show();
    btn.text('Tutup Rincian');
  }
}
    </script>
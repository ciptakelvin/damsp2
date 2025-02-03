<section class="col-lg-12 connectedSortable">
            <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <img src="img/capaian_subdit.png" width="25" height="25">
                  Capaian RKO Subdit
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i><img src="img/minimize.png" width="20" height="20"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
				<?php
				$query = "select id_sie, sum(realisasi) realisasi from (select r.id_peg, id_sie, nama, realisasi/target*100 realisasi from pegawai r left join (select * from (select pic, sum(volume) target from rki_pegawai where status='1' group by pic) x , (select id_peg, sum(volume) realisasi from realisasi_rki group by id_peg) y where x.pic=y.id_peg) z on r.id_peg = z.pic order by r.id_peg desc) t where id_sie !='4' group by id_sie";
				$run = mysqli_query($konek, $query);
				while($data = mysqli_fetch_array($run)){
				?>
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="<?php echo $data['realisasi']; ?>" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Sie <?php echo $data['id_sie']; ?></div>
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
$(function () {

  'use strict'

  /* jQueryKnob */
  $('.knob').knob()

  // Sales graph chart
  var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d');
  //$('#revenue-chart').get(0).getContext('2d');

  var salesGraphChartData = {
    labels  : ['2020 Q1', '2020 Q2', '2020 Q3', '2020 Q4'],
    datasets: [
      {
        label               : 'Digital Goods',
        fill                : false,
        borderWidth         : 2,
        lineTension         : 0,
        spanGaps : true,
        borderColor         : '#efefef',
        pointRadius         : 3,
        pointHoverRadius    : 7,
        pointColor          : '#efefef',
        pointBackgroundColor: '#efefef',
        data                : [4820, 15073, 10687, 8432]
      }
    ]
  }

  var salesGraphChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: false,
    },
    scales: {
      xAxes: [{
        ticks : {
          fontColor: '#efefef',
        },
        gridLines : {
          display : false,
          color: '#efefef',
          drawBorder: false,
        }
      }],
      yAxes: [{
        ticks : {
          stepSize: 5000,
          fontColor: '#efefef',
        },
        gridLines : {
          display : true,
          color: '#efefef',
          drawBorder: false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  var salesGraphChart = new Chart(salesGraphChartCanvas, { 
      type: 'line', 
      data: salesGraphChartData, 
      options: salesGraphChartOptions
    }
  )

})
</script>
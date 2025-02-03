<head>
<link rel="stylesheet" href="css/fullcalendar.css"/>
<link rel="stylesheet" href="css/bootstrap.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
</head>
<div class="tab-content">
<div class="active tab-pane" id="direktur">
 <div class="container">
    <div id="calendar"></div>
  </div>
</div>
<div class="tab-pane" id="perencanaan">
  <div class="container">
    <div id="calendar2"></div>
  </div>
</div>
<div class="tab-pane" id="teknik">
  <div class="container">
    <div id="calendar3"></div>
  </div>
</div>
<div class="tab-pane" id="transus">
  <div class="container">
    <div id="calendar4"></div>
  </div>
</div>
<div class="tab-pane" id="kersduk">
  <div class="container">
    <div id="calendar5"></div>
  </div>
</div>
<div class="tab-pane" id="penagihan">
  <div class="container">
    <div id="calendar6"></div>
  </div>
</div>
</div>
  <script>
    //Persiapkan JQUERY
    $(document).ready(function(){
      var calendar = $('#calendar').fullCalendar({
        //izinkan tabel bisa di edit
        editable: true,
        selectable: true,
        selectHelper: true,
		defaultView: 'listWeek',
        //atur header kalender 
        header:{
          left:'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        buttonText:{
          today: 'today',
          month: 'month',
          week: 'week',
          day: 'day',
        },
        //tampilkan data dari database
        events :'tampil_direktur.php',
        //izinkan tabel/kalender bisa di pilih edit
        select: function(start, end){
          $getScript('/events/new', function(){
            $('#event_date_range').val(moment(start).format("DD/MM/YYYY HH:mm") + '-' + moment(end).format("date_range_picker"))
          })
        }
            });
          }
      );
  </script>
  <script>
    //Persiapkan JQUERY
    $(document).ready(function(){
      var calendar = $('#calendar2').fullCalendar({
        //izinkan tabel bisa di edit
        editable: true,
        selectable: true,
        selectHelper: true,
		defaultView: 'listWeek',
        //atur header kalender 
        header:{
          left:'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        buttonText:{
          today: 'today',
          month: 'month',
          week: 'week',
          day: 'day',
        },
        //tampilkan data dari database
        events :'tampil_perencanaan.php',
        //izinkan tabel/kalender bisa di pilih edit
        select: function(start, end){
          $getScript('/events/new', function(){
            $('#event_date_range').val(moment(start).format("DD/MM/YYYY HH:mm") + '-' + moment(end).format("date_range_picker"))
          })
        }
            });
          }
      );
  </script>
   <script>
    //Persiapkan JQUERY
    $(document).ready(function(){
      var calendar = $('#calendar3').fullCalendar({
        //izinkan tabel bisa di edit
        editable: true,
        selectable: true,
        selectHelper: true,
		defaultView: 'listWeek',
        //atur header kalender 
        header:{
          left:'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        buttonText:{
          today: 'today',
          month: 'month',
          week: 'week',
          day: 'day',
        },
        //tampilkan data dari database
        events :'tampil_teknik.php',
        //izinkan tabel/kalender bisa di pilih edit
        select: function(start, end){
          $getScript('/events/new', function(){
            $('#event_date_range').val(moment(start).format("DD/MM/YYYY HH:mm") + '-' + moment(end).format("date_range_picker"))
          })
        }
            });
          }
      );
  </script>
   <script>
    //Persiapkan JQUERY
    $(document).ready(function(){
      var calendar = $('#calendar4').fullCalendar({
        //izinkan tabel bisa di edit
        editable: true,
        selectable: true,
        selectHelper: true,
		defaultView: 'listWeek',
        //atur header kalender 
        header:{
          left:'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        buttonText:{
          today: 'today',
          month: 'month',
          week: 'week',
          day: 'day',
        },
        //tampilkan data dari database
        events :'tampil_transus.php',
        //izinkan tabel/kalender bisa di pilih edit
        select: function(start, end){
          $getScript('/events/new', function(){
            $('#event_date_range').val(moment(start).format("DD/MM/YYYY HH:mm") + '-' + moment(end).format("date_range_picker"))
          })
        }
            });
          }
      );
  </script>
   <script>
    //Persiapkan JQUERY
    $(document).ready(function(){
      var calendar = $('#calendar5').fullCalendar({
        //izinkan tabel bisa di edit
        editable: true,
        selectable: true,
        selectHelper: true,
		defaultView: 'listWeek',
        //atur header kalender 
        header:{
          left:'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        buttonText:{
          today: 'today',
          month: 'month',
          week: 'week',
          day: 'day',
        },
        //tampilkan data dari database
        events :'tampil_kersduk.php',
        //izinkan tabel/kalender bisa di pilih edit
        select: function(start, end){
          $getScript('/events/new', function(){
            $('#event_date_range').val(moment(start).format("DD/MM/YYYY HH:mm") + '-' + moment(end).format("date_range_picker"))
          })
        }
            });
          }
      );
  </script>
     <script>
    //Persiapkan JQUERY
    $(document).ready(function(){
      var calendar = $('#calendar6').fullCalendar({
        //izinkan tabel bisa di edit
        editable: true,
        selectable: true,
        selectHelper: true,
		defaultView: 'listWeek',
        //atur header kalender 
        header:{
          left:'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        buttonText:{
          today: 'today',
          month: 'month',
          week: 'week',
          day: 'day',
        },
        //tampilkan data dari database
        events :'tampil_penagihan.php',
        //izinkan tabel/kalender bisa di pilih edit
        select: function(start, end){
          $getScript('/events/new', function(){
            $('#event_date_range').val(moment(start).format("DD/MM/YYYY HH:mm") + '-' + moment(end).format("date_range_picker"))
          })
        }
            });
          }
      );
  </script>

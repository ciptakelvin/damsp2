<head>
<link rel="stylesheet" href="css/fullcalendar.css"/>
<link rel="stylesheet" href="css/bootstrap.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
</head>
</ul>
</div>
<body>
  <div class="container">
    <div id="calendar"></div>
  </div>
  <script>
    //Persiapkan JQUERY
    $(document).ready(function(){
      var calendar = $('#calendar').fullCalendar({
        //izinkan tabel bisa di edit
        editable: true,
        //atur header kalender 
		defaultView: 'listWeek',
        header:{
          left:'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        //tampilkan data dari database
        events :'tampil.php',
        //izinkan tabel/kalender bisa di pilih edit
        selectable: true,
        selectHelper: true, 
  //      select: function(start, end, allDay){
          //tampilkan pesan input
//          var title = prompt("Masukan Judul Kegiatan");
//          var tempat = prompt("Masukan Tempat Kegiatan");
 //         var pic = prompt("Masukan PIC Kegiatan");
//          if (title){
            //tampung tanggal yang dipilih ke dalam variable start dan end
 //           var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
 //           var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
            // perintah ajax lempar data untuk disimpan
 //           $.ajax({
 //             url : "simpan.php",
 //             type : "POST",
//              data : {
 //               title: title,
 //               tempat: tempat,
//                start: start,
 //               end: end,
 //               status: 1,
 //               pic: pic,
  //              validasi: 0
  //            },
 //             success : function(){
                //jika simpan sukses refresh kalender dan tampilkan pesan sukses
 //               calendar.fullCalendar('refetchEvents');
 //               alert('Simpan Sukses..!');
 //             }
 //           });
 //         }
 //       },
        //event ketika judul kegiatan diseret /drop 
 //       eventDrop : function(event){
 //         var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
 //         var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
 //         var title = event.title;
 //         var id = event.id;
          // perintah ajax lempar data untuk disimpan
 //           $.ajax({
 //             url : "ubah.php",
 //             type : "POST",
 //             data : {
 //               title: title,
 //               start: start,
 //               end: end,
 //               id: id
 //             },
 //             success : function(){
                //jika simpan sukses refresh kalender dan tampilkan pesan sukses
//                calendar.fullCalendar('refetchEvents');
 //               alert('Ubah Jadwal Sukses..!');
 //             }
 //           });
 //       },
         //event ketika judul kegiatan diseret /drop 
  //      eventClick : function(event){
  //        if(confirm("Apakah anda yakin akan menghapus kegiatan ini?")){
  //          var id = event.id;
  //          $.ajax({
  //            url : "hapus.php",
  //            type : "POST",
  //            data : {
  //              id: id
  //            },
  //            success : function(){
                //jika simpan sukses refresh kalender dan tampilkan pesan sukses
   //             calendar.fullCalendar('refetchEvents');
   //             alert('Jadwal Kegiatan Berhasil Dihapus..!');
   //           }
   //         });
  //        }
   //     }
    });
    });
  </script>
</body>

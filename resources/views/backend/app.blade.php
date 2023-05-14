<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tagaytay Profiling System</title>
  <script src="{{asset('plugins/alpine/alpine.min.js')}}"></script>
  <script src="{{asset('plugins/chart.js/Chart.js')}}"></script>
<!-- <style>
  body {
  padding-top: 60px; /* replace 70px with the height of your navbar */
}
  </style> -->
  <!-- <script type="text/javascript"> 
        function preventBack() { 
            window.history.forward();  
        } 
          
        setTimeout("preventBack()", 0); 
          
        window.onunload = function () { null }; 
    </script> -->
  <script src="{{asset('plugins/highcharts/highcharts.js')}}"></script>
  <script src="{{asset('plugins/highcharts/modules/data.js')}}"></script>
  <script src="{{asset('plugins/highcharts/modules/accessibility.js')}}"></script>
  <script src="{{asset('plugins/highcharts/modules/exporting.js')}}"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Daterange picker -->

  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/residents/residents.css')}}">

  <link rel="stylesheet" href="{{asset('plugins/data/button.css')}}">

</head>


<body class="hold-transition sidebar-mini layout-fixed">
<!-- <div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="{{ asset('dist/img/seal.png') }}" alt="TCLogo" height="60" width="60">
</div> -->

  <!-- Navbar -->
  @include('backend.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('backend.sidebar')

  <!-- Content Wrapper. Contains page content -->

  @yield('content')

  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <strong>Copyright © 2022-2023 <a href="#">Tagaytay Profiling System</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer> -->
  <!-- <footer class="main-footer">
<strong>Copyright &copy; 2022-2023 <a href="#">TPS</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
<b>Version</b> 1.0.0
</div>
</footer> -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- </div> -->
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->

  <!-- Sparkline -->
  <!-- JQVMap -->


  <!-- jQuery Knob Chart -->
  <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('plugins/moment/moment.min.js')}}"></script>

  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <!-- DataTables  & Plugins -->
  <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('plugins/datatables/fixed.js')}}"></script>
  <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

  <script src="{{asset('dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->

  <script>


      $(function() {
        var route = window.location.pathname; // Get the current route

  var barangay;
  if (route.includes('asisan')) {
    barangay = 'Asisan';
  } else if (route.includes('bagongtubig')) {
    barangay = 'Bagong Tubig';
  } else if (route.includes('calabuso')) {
    barangay = 'Calabuso';
  }
  else if (route.includes('dapdap_east')) {
    barangay = 'Dapdap East';
  }
  else if (route.includes('dapdap_west')) {
    barangay = 'Dapdap West';
  }
  else if (route.includes('francisco')) {
    barangay = 'Francisco';
  }
  else if (route.includes('guinhawa_north')) {
    barangay = 'Guinhawa North';
  }
  else if (route.includes('guinhawa_south')) {
    barangay = 'Guinhawa South';
  }
  else if (route.includes('iruhin_central')) {
    barangay = 'Iruhin Central';
  }
  else if (route.includes('iruhin_east')) {
    barangay = 'Iruhin East';
  }
  else if (route.includes('iruhin_west')) {
    barangay = 'Iruhin West';
  }
  else if (route.includes('kaybagal_central')) {
    barangay = 'Kaybagal Central';
  }
  else if (route.includes('kaybagal_north')) {
    barangay = 'Kaybagal North';
  }
  else if (route.includes('kaybagal_south')) {
    barangay = 'Kaybagal South';
  }
  else if (route.includes('magasawang_ilat')) {
    barangay = 'Mag-asawang ILat';
  }
  else if (route.includes('maharlika_east')) {
    barangay = 'Maharlika East';
  }
  else if (route.includes('maharlika_west')) {
    barangay = 'Maharlika West';
  }
  else if (route.includes('maitim_central')) {
    barangay = 'Maitim II Central';
  }
  else if (route.includes('maitim_east')) {
    barangay = 'Maitim II East';
  }
  else if (route.includes('maitim_west')) {
    barangay = 'Maitim II West';
  }
  else if (route.includes('mendezcrossing_east')) {
    barangay = 'Mendez Crossing East';
  }
  else if (route.includes('mendezcrossing_west')) {
    barangay = 'Mendez Crossing West';
  }
  else if (route.includes('neogan')) {
    barangay = 'Neogan';
  }
  else if (route.includes('patutongmalaki_north')) {
    barangay = 'Patutong Malaki North';
  }
  else if (route.includes('patutongmalaki_south')) {
    barangay = 'Patutong Malaki South';
  }
  else if (route.includes('sambong')) {
    barangay = 'Sambong';
  }
  else if (route.includes('sanjose')) {
    barangay = 'San Jose';
  }
  else if (route.includes('silangcrossing_east')) {
    barangay = 'Silang Crossing East';
  }
  else if (route.includes('silangcrossing_west')) {
    barangay = 'Silang Crossing West';
  }
  else if (route.includes('sungay_east')) {
    barangay = 'Sungay East';
  }
  else if (route.includes('sungay_west')) {
    barangay = 'sungay_west';
  }
  else if (route.includes('tolentino_East')) {
    barangay = 'Tolentino East';
  }
  else if (route.includes('tolentino_west')) {
    barangay = 'Tolentino West';
  }
  else if (route.includes('zambal')) {
    barangay = 'Zambal';
  }
  $('#example1').DataTable({
    "responsive": false,
    "lengthChange": true,
    "autoWidth": false,
    "scrollX": false,
    
    "buttons": [{
      extend: 'collection',
      text: '<i class="fa-solid fa-download"></i> Export',
      buttons: [{
        extend: "csv",
        filename: '' + barangay + ' residents',
      }, {
        extend: "excel",
        filename: '' + barangay + ' residents',
      }, {
        extend: "pdf",
        filename: '' + barangay + ' residents',
        title: '',
        orientation: 'portrait', // Adjust orientation if needed
        
        customize: function(doc) {
          var currentDate = new Date().toLocaleDateString(undefined, {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
          });

          // Prepend header
          doc.content.unshift(
          {
            columns: [
              {
                image: 'data:image/png;base64,{{ base64_encode(file_get_contents(public_path('dist/img/seal.png'))) }}',
                width: 50,
                height: 50,
                alignment: 'left'
              },
              {
                text: [
                  { text: 'Republic of the Philippines\n', fontSize: 12 },
                  { text: 'City of Tagaytay\n', fontSize: 12 },
                  { text: 'OFFICE OF THE CITY PLANNING AND DEVELOPMENT\n', fontSize: 12, bold: true }
                ],
                alignment: 'center'
              }
            ],
            margin: [0, 0, 0, 10]
          },
          { canvas: [{ type: 'line', x1: 0, y1: 10, x2: 520, y2: 10, lineWidth: 1 }] },
          { text: '\n' },
          { text: 'List of ' + barangay + ' Residents', alignment: 'center', fontSize: 14, bold: true },
          { text: 'As of ' + currentDate, alignment: 'center', fontSize: 8 },
          { text: '\n' }
        );

  var tableNodes = doc.content.filter(function(node) {
    return node.table !== undefined;
  });

  if (tableNodes.length > 0) {
    var table = tableNodes[0].table;
    table.widths = Array(table.body[0].length + 1).join('*').split('');
    
  }
          // Footer
          doc.footer = function(currentPage, pageCount) {
            return {
              text: 'Printed by: {{auth()->user()->firstname}} {{auth()->user()->lastname}}   |   Page ' + currentPage.toString() + ' of ' + pageCount.toString(),
              alignment: 'right',
              fontSize: 8,
              margin: [0, 10, 20, 0]
            };
          };
          doc.styles = {
    header: {
      font: 'Helvetica',
      bold: true
    }
  };
        }
      }, {
        extend: "print",
        title: '',
        customize: function(win) {
          var currentDate = new Date().toLocaleDateString(undefined, {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
          });

          // Prepend header
          $(win.document.body).prepend('<div style="text-align:center;"><img src="{{asset('dist/img/seal.png')}}" style="float:left;width:100px;height:100px;"><h1 style="display:inline-block;">Republic of the Philippines <br> City of Tagaytay <br><b> OFFICE OF THE CITY PLANNING AND DEVELOPMENT</b><br></h1></div><hr><h1 style="text-align:center";><b>List of ' + barangay + ' Residents </b><br><small>As of ' + currentDate + '</small></h1>');

          // Style the title
          $(win.document.body).find('h1')
   
            .css('font-size', '20px')
            .css('margin-top', '20px')
            .css('margin-bottom', '30px')
.css('font-family', 'sans-serif');
          // Add footer
          var footer = '<div style="text-align:right;font-size:12px;margin-top:20px;">Printed by: {{auth()->user()->firstname}} {{auth()->user()->lastname}} </div>';
          $(win.document.body).append(footer);
        }
      }]
    }]
  }).buttons().container().appendTo('#test');
      });

      $(function() {
      $('#example2').DataTable({
        "responsive": false,
        "lengthChange": true,
        "autoWidth": false,
        "scrollX": true,
        "buttons": [{
          extend: 'collection',
          text: '<i class="fa-solid fa-download"></i> Export',
          buttons: ["copy", {
            extend: "csv",
            filename: 'users_activitylogs'
          }, {
            extend: "excel",
            filename: 'users_activitylogs'
          }, {
            extend: "pdf",
            filename: 'users_activitylogs'
          }, "print", ]
        }]

      }).buttons().container().appendTo('#test');

      // $('#example4 thead tr').clone(true).addClass('filters').appendTo( '#example4 thead' );
      var tables = $('#example4, #example5, #example6, #example7, #example8, #example9').DataTable({
        "responsive": false,
        "lengthChange": true,
        "autoWidth": false,
        "scrollX": true,

        "buttons": [{
          extend: 'collection',
          text: '<i class="fa-solid fa-download"></i> Export',
          buttons: [{
              text: 'Excel',
              action: function(e, dt, node, config) {
                window.location.href = "{{ route('residents.export') }}";
              }
            },
            {
              text: 'CSV',
              action: function(e, dt, node, config) {
                window.location.href = "{{ route('residents.exportcsv') }}";
              }
            },
  //           {
  //             extend: 'pdf',
  //             text: 'Print',
  //             title: 'Residents',
  //             download: 'open',
  //             orientation: 'landscape',
  //             pageSize: 'LEGAL',
  //             exportOptions: {
  //               columns: '{{ auth()->user()->role == "Enumerator" ? ":not(:last-child)" : "" }}' // exclude last column for System Admins
  //  // exclude last column
  //             },
      //      }
          ]
        }]
      });

      tables.buttons().container().appendTo($('#test'));

      $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
    var table = $(e.target.hash).find('table').DataTable();
    $('#test').html(table.buttons().container());
    $($.fn.dataTable.tables(true)).DataTable().columns.adjust().fixedColumns().relayout();
});


      var tables = $('#example10, #example11, #example12, #example13, #example14, #example15').DataTable({
        "responsive": false,
        "lengthChange": true,
        "autoWidth": false,
        "scrollX": true,

        "buttons": [{
          extend: 'collection',
          text: '<i class="fa-solid fa-download"></i> Export',
          buttons: [{
              text: 'Excel',
              action: function(e, dt, node, config) {
                window.location.href = "{{ route('households.export') }}";
              }
            },
            {
              text: 'CSV',
              action: function(e, dt, node, config) {
                window.location.href = "{{ route('households.csvexport') }}";
              }
            },
            // {
            //   extend: 'pdf',
            //   text: 'Print',
            //   title: 'Households',
            //   download: 'open',
            //   orientation: 'landscape',
            //   pageSize: 'A0',
            //   exportOptions: {
            //     columns: '{{ auth()->user()->role == "Enumerator" ? ":not(:last-child)" : "" }}' // exclude last column for System Admins
            //   },
             
            // }
          ]
        }]
      });

      tables.buttons().container().appendTo($('#test'));

      $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
    var table = $(e.target.hash).find('table').DataTable();
    $('#test').html(table.buttons().container());
    $($.fn.dataTable.tables(true)).DataTable().columns.adjust().fixedColumns();
});



    $('#backup-table').DataTable({
      "searching": true,
      "dom": '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
    });


    $('#addnew').on('hidden.bs.modal', function(e) {
      $(this).find('form').trigger('reset');
    })
    $('#addhousehold').on('hidden.bs.modal', function(e) {
      $(this).find('form').trigger('reset');
    })
  });
  </script>


</body>

</html>
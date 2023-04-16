<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tagaytay Profiling System</title>
  <script src="{{asset('plugins/alpine/alpine.min.js')}}"></script>
  <script src="{{asset('plugins/chart.js/Chart.js')}}"></script>

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
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
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
            filename: 'residents_list',

          }, {
            extend: "excel",
            filename: 'residents_list'
          }, {
            extend: "pdf",
            filename: 'residents_list',
            title: 'List of Residents',
            exportOptions: {
              columns: ':not(:last-child)' // exclude last column
            },

          }, {
            extend: "print",
            title: 'List of Residents',
            exportOptions: {
              columns: ':not(:last-child)' // exclude last column
            },
            customize: function(win) {
              // Add logo to the left of the title
              $(win.document.body).prepend('<div style="text-align:center;"><img src="{{asset('
                dist / img / seal.png ')}}" style="float:left;width:100px;height:100px;margin-right:5px;"><h1 style="display:inline-block;font-size:20px;font-weight:bold;margin:0; font-family:sans-serif;">Republic of the Philippines <br> City of Tagaytay <br> OFFICE OF THE CITY PLANNING AND DEVELOPMENT</h1></div>');

              // Style the title
              $(win.document.body).find('h1')
                .css('text-align', 'center')
                .css('font-size', '20')
                .css('font-weight', 'bold')
                .css('margin-top', '20px')
                .css('margin-bottom', '30px');
            }
          }]
        }]
      }).buttons().container().appendTo('#test');
      $('#example2').DataTable({
        "responsive": false,
        "lengthChange": true,
        "autoWidth": false,
        "scrollX": true,
        "buttons": [{
          extend: 'collection',
          text: '<i class="fa-solid fa-download"></i> Export',
          buttons: [ "copy", {
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
            {
              extend: 'pdf',
              text: 'Print',
              title: 'Residents',
              download: 'open',
              orientation: 'landscape',
              pageSize: 'LEGAL',
              exportOptions: {
                columns: ':not(:last-child)' // exclude last column
              }
            }
          ]
        }]
      });

      tables.buttons().container().appendTo($('#test'));

      $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        var table = $(e.target.hash).find('table').DataTable();
        $('#test').html(table.buttons().container());
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
                window.location.href = "{{ route('residents.export') }}";
              }
            },
            {
              text: 'CSV',
              action: function(e, dt, node, config) {
                window.location.href = "{{ route('residents.exportcsv') }}";
              }
            },
            {
              extend: 'pdf',
              text: 'Print',
              title: 'Households',
              download: 'open',
              orientation: 'landscape',
              pageSize: 'A0',
              exportOptions: {
                columns: ':not(:last-child)' // exclude last column
              }
            }
          ]
        }]
      });

      tables.buttons().container().appendTo($('#test'));

      $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        var table = $(e.target.hash).find('table').DataTable();
        $('#test').html(table.buttons().container());
      });

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
  </script>


</body>

</html>
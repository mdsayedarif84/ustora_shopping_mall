    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    {{--    <link rel="stylesheet" href="{!! asset('css/app.css') !!}">--}}
        <!-- Theme style -->
        <link rel="stylesheet" href="{!! asset('admin/dashboard/dist/css/adminlte.min.css') !!}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{!! asset('admin/dashboard/plugins/fontawesome-free/css/all.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('admin/dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{!! asset('/') !!}admin/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{!! asset('/') !!}admin/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="{!! asset('/') !!}admin/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

        {{--    CKEditor link--}}
        <script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('admin/ckeditor/samples/js/sample.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('admin/ckeditor/samples/css/samples.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}">
        <!--ckeditor/ckeditor end -->
    </head>
    <body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.components.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.components.sidebar')
        <!-- Content Wrapper. Contains page content -->
        @yield('body')
        <!-- /.control-sidebar -->
        <!-- Main Footer -->
        <footer class="main-footer navbar-gray-dark">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->
    {{--<link  href="{!! asset('js/app.js') !!}">--}}
    <!-- jQuery -->
    <script src="{!! asset('admin/dashboard/plugins/jquery/jquery.min.js') !!}"></script>
    <!-- Bootstrap 4 -->
    <script src="{!! asset('admin/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{!! asset('/') !!}admin/dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/jszip/jszip.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{!! asset('admin/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}"></script>
    <!-- AdminLTE App -->
    <script src="{!! asset('admin/dashboard/dist/js/adminlte.js') !!}"></script>


    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{!! asset('/') !!}admin/dashboard/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/raphael/raphael.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="{!! asset('/') !!}admin/dashboard/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="{!! asset('/') !!}admin/dashboard/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{!! asset('admin/dashboard/dist/js/demo.js') !!}"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{!! asset('/') !!}admin/dashboard/dist/js/pages/dashboard2.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(document).ready(function (){
            $('#msg').click(function (){
                $(this).text(' ');
            });
        });
    </script>
    <script>
        initSample();
    </script>

    </body>
    </html>

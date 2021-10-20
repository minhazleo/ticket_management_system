<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="{{ asset('backend') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Stack css Start -->
@stack('css')
        <!-- Stack css End -->

		<!-- App css -->
		<link href="{{ asset('backend') }}/assets/css/material/bootstrap-material.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{ asset('backend') }}/assets/css/material/app-material.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{ asset('backend') }}/assets/css/material/bootstrap-material-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{ asset('backend') }}/assets/css/material/app-material-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />


    </head>

    <body class="hold-transition sidebar-mini loading">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('backend.layout.navbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.layout.left-sidebar')
            <!-- Left Sidebar End -->

            {{-- <div class="content-page"> --}}
            <div class="content-wrapper">

                <div class="content">

                    <div class="container-fluid">

                        @yield('content')

                    </div> <!-- container -->
                </div>

                {{-- @include('backend.layout.footer') --}}

            </div>

            @include('backend.layout.footer')

        </div>

        <!-- END wrapper -->

            {{-- @include('backend.layout.right-sidebar') --}}

        <!-- Right bar overlay-->

        {{-- <div class="rightbar-overlay"></div> --}}

        <!-- Vendor js -->
        @stack('summernote')
        <script src="{{ asset('backend') }}/assets/js/vendor.min.js"></script>


        <!-- KNOB JS -->
        <script src="{{ asset('backend') }}/assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <!-- Plugins js-->
        <script src="{{ asset('backend') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Dashboard init-->
        {{-- <script src="{{ asset('backend') }}/assets/js/pages/dashboard-sales.init.js"></script> --}}
        <!-- Stack JS Start -->
        @stack('scripts')
        <!-- Stack JS Start -->
        <!-- App js -->
        <script src="{{ asset('backend') }}/assets/js/app.min.js"></script>


        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE -->
        {{-- <script src="dist/js/adminlte.js"></script> --}}


        <script src="{{ asset('js/app.js') }}"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        {{-- <script src="dist/js/demo.js"></script> --}}
        <script src="dist/js/pages/dashboard3.js"></script>



    </body>
</html>

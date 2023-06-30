<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

       <!-- Theme Config Js -->
       <script src="/assets/js/hyper-config.js"></script>
       <!-- App css -->
       <link href="/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />
       <!-- Icons css -->
       <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />



    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    {{-- @vite([ 'resources/js/app.js']) --}}
</head>
<body>

<div id="app" class="wrapper">

           <!-- ========== Topbar Start ========== -->
        @include('share.navbar')
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('share.sidebar')
        <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                            @yield('content')



                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


</div>


       <!-- Vendor js -->
       <script src="/assets/js/vendor.min.js"></script>

       <!-- Daterangepicker js -->
       <script src="/assets/vendor/daterangepicker/moment.min.js"></script>
       <script src="/assets/vendor/daterangepicker/daterangepicker.js"></script>

       <!-- Charts js -->
       <script src="/assets/vendor/chart.js/chart.min.js"></script>
       <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>

       <!-- Vector Map js -->
       <script src="/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
       <script src="/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

       <!-- Analytics Dashboard App js -->
       <script src="/assets/js/pages/demo.dashboard-analytics.js"></script>

       <!-- App js -->
       <script src="/assets/js/app.min.js"></script>

       <script>
        $('document').ready(function(){
            $("#checkTodos").change(function () {
                $("input:checkbox").prop('checked', $(this).prop("checked"));
            });
        });
    </script>

</body>
</html>

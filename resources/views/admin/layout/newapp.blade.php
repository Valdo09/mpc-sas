
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MPC</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{ asset('public/admin/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/public/admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{asset('public/admin/css/imageuploadify.min.css')}}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>
    <link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('admin.partials._nav');

        @include('admin.partials._header');

        @include('admin.partials._sidebar');

        @yield('content')

        @include('admin.partials._footer');

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('public/admin/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/settings.js') }}"></script>
    <script src="{{ asset('public/admin/js/gleek.js') }}"></script>
    <script src="{{ asset('public/admin/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('public/admin/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('public/admin/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('public/admin/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('public/admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('public/admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('public/admin/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>

    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function(){
            $('#table').DataTable();
        });
    </script>


    <script src="{{ asset('public/js/dashboard/dashboard-1.js') }}"></script>

    @hasSection ('js')
        @yield('js')
    @endif


</body>


</html>

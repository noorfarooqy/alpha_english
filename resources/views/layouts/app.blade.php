<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('pageTitle') - {{env('APP_NAME', 'Koostem')}} </title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="/admin/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="/admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/admin/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/admin/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="/admin/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/admin/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="/admin/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/admin/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/assets/css/lib/unix.css" rel="stylesheet">
    <link href="/admin/assets/css/style.css" rel="stylesheet">
</head>

<body>

    @include('sidebar.main_sidebar')
    <!-- /# sidebar -->

    @include('header.main_header')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    @yield('breadcrumb-link')
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="/admin/assets/js/lib/jquery.min.js"></script>
    <script src="/admin/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="/admin/assets/js/lib/menubar/sidebar.js"></script>
    <script src="/admin/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="/admin/assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->
    <script src="/admin/assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="/admin/assets/js/lib/weather/weather-init.js"></script>
    <script src="/admin/assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="/admin/assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="/admin/assets/js/lib/chartist/chartist.min.js"></script>
    <script src="/admin/assets/js/lib/chartist/chartist-init.js"></script>
    <script src="/admin/assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="/admin/assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="/admin/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="/admin/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="/admin/assets/js/scripts.js"></script>
    <!-- scripit init-->
</body>

</html>

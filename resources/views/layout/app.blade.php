<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MPC</title>
  <meta content="MPC est une société de rénovation de bâtiments située à Mont-sur-Lausanne.
Disposant d'une équipe pluridisciplinaire rigoureuse et réactive, la société MPC propose différentes prestations de rénovation d'intérieure et d'extérieure telles que :La rénovation de maison,La rénovation d'appartement,La rénovation de cuisine,La rénovation de sol,etc." name="description">
  <meta content="MPC,mpc,rénovation de cuisine,renovation de cuisine,rénovation de maison,renovation de maison,renovation de fenêtre,rénovation de fenêtre,rénovation de sol,renovation de sol" name="keywords">
  <!-- Favicons -->
  <!-- <link href="{{ asset('{{--public/--}}assets/img/favicon-96x96.png') }}" rel="icon"> -->
  <link href="{{ asset('{{--public/--}}logo_mpc.jpg') }}" width="96px" height="96px" rel="icon">
  <link href="{{ asset('{{--public/--}}assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link rel="stylesheet" type="text/css" href="{{ asset('{{--public/--}}assets/css/font/flaticon.css') }}">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('{{--public/--}}assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('{{--public/--}}assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('{{--public/--}}assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('{{--public/--}}assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('{{--public/--}}assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('{{--public/--}}assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('{{--public/--}}assets/css/style.css') }}" rel="stylesheet">
  <style>
    .dropdown-show:hover .dropdown-menu {display: block;}
    .dropdown-show {
  position: relative;
  display: inline-block;
}

  </style>
</head>

<body>
  @include('partials.header')

  @yield('content')


  @include('partials.footer')


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('{{--public/--}}assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('{{--public/--}}assets/vendor/jquery/jquery.validate.js') }}"></script>
  <script src="{{ asset('{{--public/--}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('{{--public/--}}assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('{{--public/--}}assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('{{--public/--}}assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('{{--public/--}}assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('{{--public/--}}assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('{{--public/--}}assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('{{--public/--}}assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('{{--public/--}}assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('{{--public/--}}assets/js/main.js') }}"></script>

</body>

</html>

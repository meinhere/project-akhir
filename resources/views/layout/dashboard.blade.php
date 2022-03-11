<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>{{ $title }}</title>
  <link href="{{ URL('/assets/css/pace.min.css') }}" rel="stylesheet" />
  <script src="{{ URL('/assets/js/pace.min.js') }}"></script>
  <!--favicon-->
  <link rel="icon" href="{{ URL('/img/favicon.ico') }}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{ URL('/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="{{ URL('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  {{-- <link href="BS/css/bootstrap.min.css" rel="stylesheet" /> --}}
  <!-- animate CSS-->
  <link href="{{ URL('/assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="{{ URL('/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="{{ URL('/assets/css/sidebar-menu.css') }}" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="{{ URL('/assets/css/app-style.css') }}" rel="stylesheet" />
  <!-- Trix CSS-->
  <link href="{{ URL('/css/trix.css') }}" rel="stylesheet" />
  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }

  </style>

</head>

<body class="bg-theme bg-theme1">

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start sidebar-wrapper-->
    @include('dashboard.partiels.sidebar')
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    @include('dashboard.partiels.topbar')
    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">

        <!--Start Dashboard Content-->
        <div class="container-fluid">
          @yield('content')
        </div>
        <!--End Dashboard Content-->

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

      </div>
      <!-- End container-fluid-->

    </div>
    <!--End content-wrapper-->

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  </div>
  <!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{ URL('/assets/js/jquery.min.js') }}"></script>
  <script src="{{ URL('/assets/js/popper.min.js') }}"></script>
  <script src="{{ URL('/assets/js/bootstrap.min.js') }}"></script>
  {{-- <script src="BS/js/bootstrap.min.js"></script> --}}
  <!-- simplebar js -->
  <script src="{{ URL('/assets/plugins/simplebar/js/simplebar.js') }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ URL('/assets/js/sidebar-menu.js') }}"></script>
  <!-- Custom scripts -->
  <script src="{{ URL('/assets/js/app-script.js') }}"></script>
  <!-- Trix scripts -->
  <script src="{{ URL('/js/trix.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Templates CSS -->
  <link rel="icon" href="{{ asset('/img/favicon.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="<?= asset('/BS/css/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= asset('/fonts/css/font-awesome.min.css') ?>" />

  <!--  Custom CSS -->
  <link rel="stylesheet" href="<?= asset('/css/style.css') ?>" />
  <link rel="stylesheet" href="<?= asset('/css/auth.css') ?>" />
  <link rel="stylesheet" href="<?= asset('/css/article.css') ?>" />


  <title>{{ $title }}</title>
</head>

<body>
  <div class="app-container h-100">
    <!-- Navbar -->
    @include('partiels.navbar')
    <!-- Akhir Navbar -->

    <!-- Sidebar Menu -->
    @include('partiels.sidebar')
    <!-- Akhir Sidebar Menu -->

    <div class="page-content h-100 w-100 d-flex flex-column">
      {{-- Content --}}
      @yield('content')
      {{-- Akhir Content --}}

      {{-- Footer --}}
      @if (Request::is(['footer*', 'riwayat*', 'chat-dengan-petani*']))
      @else
        @include('partiels.footer')
      @endif
      {{-- Akhir Footer --}}
    </div>
  </div>

  <!-- Templates Javascript -->
  <script src="{{ asset('/js/jquery-3.5.1.min.js') }} "></script>
  <script src="{{ asset('/BS/js/bootstrap.bundle.min.js') }} "></script>

  <!-- Custom Javascript -->
  <script src="{{ asset('/js/script.js') }}"></script>
  <script src="/js/app.js"></script>
</body>

</html>

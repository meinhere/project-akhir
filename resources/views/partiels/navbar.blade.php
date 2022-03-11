<div class="page d-flex flex-column h-100">
  <div class="page-header position-fixed">
    <div class="no-gutters">
      <div class="flex-column d-sm-flex align-items-center">
        <div class="custom-container header-border-bottom w-100 px-4 py-lg-0">
          <nav class="navbar-expand-lg navbar-light px-0 py-2 d-flex flex-row justify-content-between">
            <div class="d-flex flex-row w-100 space-between">
              <div class="d-flex flex-row align-items-center pe-2">
                <span class="header-navbar d-flex align-items-center">
                  <button type="button" aria-expanded="false" aria-label="Toggle navigation"
                    class="btn navbar-toggler border-0 shadow-none">
                    <i class="fa fa-bars"></i>
                  </button>
                </span>
                <span class="d-flex flex-lg-fill">
                  <a href="/" class="navbar-brand">
                    <img src="<?= URL('/img/navbar-brand.jpg') ?>" alt="Brand Logo">
                  </a>
                </span>
              </div>
              <ul class="nav main-nav font-weight-bold pe-3 ms-5 d-none d-lg-flex align-items-center">
                <li class="nav-item">
                  <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
                </li>
                <li class="nav-item"><a href="/artikel"
                    class="nav-link  {{ Request::is(['artikel*', 'kategori*']) ? 'active' : '' }}">Artikel</a>
                </li>
                <li class="nav-item"><a href="/riwayat"
                    class="nav-link  {{ Request::is('riwayat') ? 'active' : '' }}">Riwayat</a></li>
              </ul>

              @auth
                <ul class="nav main-nav ms-auto">
                  <li class="nav-link dropdown mt-2">
                    <a href="#" class="dropdown-toggle text-decoration-none" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Selamat datang, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu py-0" aria-labelledby="navbarDropdown">
                      <li>
                        <span class="dropdown-item">
                          <i class="fa fa-user"></i>
                          {{ auth()->user()->email }}</a>
                        </span>
                      </li>
                      @if (auth()->user()->role != 'User')
                        <li>
                          <a href="/dashboard" class="dropdown-item"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                      @endif
                      <li>
                        <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item"><i class="fa fa-sign-out"></i> Logout</button>
                        </form>
                      </li>
                    </ul>
                  </li>
                </ul>
              @else
                <div class="vertical-center">
                  <a href="/login" class="text-decoration-none">
                    <button class="login-btn text">LOGIN</button>
                  </a>
                </div>
              @endauth
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

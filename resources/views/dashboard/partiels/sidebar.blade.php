<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <a href="/" class="text-decoration-none">
      <i class="fa fa-chain-broken logo-icon" style="font-size: 1.5em"></i>
      <h5 class="logo-text">JagoKebun</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">MAIN NAVIGATION</li>
    <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
      <a href="/dashboard">
        <div class="d-flex">
          <i class="fa fa-th-large"></i>
          <span>Dashboard</span>
        </div>
      </a>
    </li>
    <li class="{{ Request::is('dashboard/articles*') ? 'active' : '' }}">
      <a href="/dashboard/articles">
        <div class="d-flex">
          <i class="fa fa-book"></i>
          <span>Artikel</span>
        </div>
      </a>
    </li>
    <li>
      <a href="profile.html">
        <div class="d-flex">
          <i class="fa fa-comments-o"></i>
          <span>Halaman Chat</span>
        </div>
      </a>
    </li>

    @can('admin')
      <li class="sidebar-header">ADMINISTRATOR</li>
      <li class="{{ Request::is('dashboard/users*') ? 'active' : '' }}">
        <a href="/dashboard/users">
          <div class="d-flex">
            <i class="fa fa-users"></i>
            <span>Data User</span>
          </div>
        </a>
      </li>
      <li class="{{ Request::is('dashboard/services*') ? 'active' : '' }}">
        <a href=" /dashboard/services">
          <div class="d-flex">
            <i class="fa fa-sign-language" style="font-size: 1.4em"></i>
            <span>List Service</span>
          </div>
        </a>
      </li>
      <li class="{{ Request::is('dashboard/categories*') ? 'active' : '' }}">
        <a href="/dashboard/categories">
          <div class="d-flex">
            <i class="fa fa-tags"></i>
            <span>Kategori Artikel</span>
          </div>
        </a>
      </li>
      <li class="{{ Request::is('dashboard/plants*') ? 'active' : '' }}">
        <a href="/dashboard/plants">
          <div class="d-flex">
            <i class="fa fa-pagelines" style="font-size: 1.5em"></i>
            <span>Tanaman</span>
          </div>
        </a>
      </li>
    @endcan
  </ul>

</div>

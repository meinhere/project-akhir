<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <a href="/" class="text-decoration-none">
      <i class="fa fa-code logo-icon" style="font-size: 1.5em"></i>
      <h5 class="logo-text">JagoKebun</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">MAIN NAVIGATION</li>
    <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
      <a href="/dashboard">
        <div class="d-flex">
          <i class="zmdi zmdi-view-dashboard"></i>
          <span>Dashboard</span>
        </div>
      </a>
    </li>
    <li class="{{ Request::is('dashboard/articles*') ? 'active' : '' }}">
      <a href="/dashboard/articles">
        <div class="d-flex">
          <i class="zmdi zmdi-book"></i>
          <span>Artikel</span>
        </div>
      </a>
    </li>
    <li>
      <a href="profile.html">
        <div class="d-flex">
          <i class="zmdi zmdi-comment-alt-text"></i>
          <span>Halaman Chat</span>
        </div>
      </a>
    </li>

    @can('admin')
      <li class="sidebar-header">ADMINISTRATOR</li>
      <li class="{{ Request::is('dashboard/users*') ? 'active' : '' }}">
        <a href="/dashboard/users">
          <div class="d-flex">
            <i class="zmdi zmdi-accounts"></i>
            <span>Data User</span>
          </div>
        </a>
      </li>
      <li>
        <a href="profile.html">
          <div class="d-flex">
            <i class="zmdi zmdi-apps"></i>
            <span>List Service</span>
          </div>
        </a>
      </li>
      <li class="{{ Request::is('dashboard/categories*') ? 'active' : '' }}">
        <a href="/dashboard/categories">
          <div class="d-flex">
            <i class="zmdi zmdi-label"></i>
            <span>Kategori</span>
          </div>
        </a>
      </li>
    @endcan
  </ul>

</div>

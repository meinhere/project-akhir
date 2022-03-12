<div class="sidebar-container h-100 pt-5 left-0" style="width: 0; z-index: 999">
  <div class="sidebar-container__main-nav links w-75 mx-auto border-top mt-2">
    <a href="javascript:void(0)" class="close-button">×</a>
    <a class="links__item {{ Request::is('/') ? 'active' : '' }} d-block text-uppercase font-weight-bold border-bottom"
      href="/">Home</a>
    <a class="links__item {{ Request::is(['artikel*', 'kategori*']) ? 'active' : '' }} d-block text-uppercase font-weight-bold border-bottom"
      href="/artikel">Artikel</a>
    <a class="links__item {{ Request::is('tanya-petani') ? 'active' : '' }} d-block text-uppercase font-weight-bold border-bottom"
      href="/tanya-petani">Tanya
      Petani</a>
    <a class="links__item {{ Request::is('jenis-tanaman') ? 'active' : '' }} d-block font-weight-bold border-bottom"
      href="/jenis-tanaman">Jenis Tanaman</a>
    <a class="links__item {{ Request::is('riwayat') ? 'active' : '' }} d-block text-uppercase font-weight-bold border-bottom"
      href="/riwayat">Riwayat</a>
  </div>
</div>

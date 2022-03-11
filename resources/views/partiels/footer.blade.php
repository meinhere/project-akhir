<footer class="pt-5 justify-content-center">
  <div class="container-fluid mb-5">
    <div class="row no-gutters">
      <div class="col-12 col-md-3 footer-brand">
        <img src="{{ URL('/img/brand.png') }}" alt="Footer Brand">
      </div>
      <div class="col-6 col-md-3 footer-lebih">
        <p class="footer-head">Lebih Lanjut</p>
        <ul class="footer-list">
          @foreach ($footers as $footer)
            <li><a href="/footer/{{ $footer->slug }}"
                class="text-decoration-none text-white">{{ $footer->title }}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-6 col-md-3">
        <p class="footer-head">Hubungi Kami</p>
        <div class="footer-alamat">
          <p>SMK Negeri 1 Tanjunganom</p>
          <p>Jl. Kartini No.1, Kec. Tanjunganom Kab. Nganjuk</p>
        </div>
      </div>
      @if (!auth()->check() || auth()->user()->role == 'User')
        <div class="col-6 col-md-3 footer-daftar">
          <p class="footer-head">Daftarkan Diri Anda</p>
          <div class="mb-4">
            <span class="mb-2 d-block">Apakah anda seorang Petani?</span>
            <a href="/register" class="btn btn-success btn-sm text-center btn-daftar">
              <i class="fa fa-leaf me-1"></i>
              Daftar
            </a>
          </div>
        </div>
      @endif
    </div>
    <!---->
  </div>
  <div class="text-center py-3 copyright">
    <span><strong>RESERVED BY</strong> <i class="text-danger">&copy;</i> <cite>JagoKebun</cite>
      Community</span>
  </div>
</footer>

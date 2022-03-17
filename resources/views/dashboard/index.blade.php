@extends('layout.dashboard')

@section('content')
  <div class="card mt-3">
    <div class="card-content">
      <div class="row row-group m-0 justify-content-center">
        <div class="col-12 col-lg-6 col-xl-4 border-light">
          <div class="card-body">
            <h5 class="text-white mb-0">{{ $users->whereNotIn('role', 'Admin')->count() }} <span class="float-right"><i
                  class="fa fa-users"></i></span></h5>
            <div class="progress my-3" style="height:3px;">
              <div class="progress-bar" style="width:55%"></div>
            </div>
            <p class="mb-0 text-white small-font">Jumlah User</p>
            @can('admin')
              <ul class="mt-2 mb-0">
                <li>User : {{ $users->where('role', 'User')->count() }} Orang</li>
                <li>Petani : {{ $users->where('role', 'Petani')->count() }} Orang</li>
                <li>Admin : {{ $users->where('role', 'Admin')->count() }} Orang</li>
              </ul>
            @endcan
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4 border-light">
          <div class="card-body">
            <h5 class="text-white mb-0">4 <span class="float-right"><i class="fa fa-comment-o"></i></span></h5>
            <div class="progress my-3" style="height:3px;">
              <div class="progress-bar" style="width:55%"></div>
            </div>
            <p class="mb-0 text-white small-font">Total Chat Masuk</p>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4 border-light">
          <div class="card-body">
            <h5 class="text-white mb-0">{{ $articles->count() }}<span class="float-right"><i
                  class="fa fa-book"></i></span></h5>
            <div class="progress my-3" style="height:3px;">
              <div class="progress-bar" style="width:55%"></div>
            </div>
            <p class="mb-0 text-white small-font">Jumlah Artikel Saya</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @can('admin')
    <h5><cite>Administrator Menu</cite></h5>
    <div class="card mt-3">
      <div class="card-content">
        <div class="row row-group m-0 justify-content-center">
          <div class="col-12 col-lg-6 col-xl-4 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">{{ $services->count() }} <span class="float-right"><i
                    class="fa fa-sign-language"></i></span></h5>
              <div class="progress my-3" style="height:3px;">
                <div class="progress-bar" style="width:55%"></div>
              </div>
              <p class="mb-0 text-white small-font">Total Layanan</p>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-4 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">{{ $categories->count() }} <span class="float-right"><i
                    class="fa fa-tags"></i></span></h5>
              <div class="progress my-3" style="height:3px;">
                <div class="progress-bar" style="width:55%"></div>
              </div>
              <p class="mb-0 text-white small-font">Data Kategori Artikel</p>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-4 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">{{ $plants->count() }}<span class="float-right"><i
                    class="fa fa-pagelines"></i></span></h5>
              <div class="progress my-3" style="height:3px;">
                <div class="progress-bar" style="width:55%"></div>
              </div>
              <p class="mb-0 text-white small-font">Total Tanaman</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endcan
@endsection

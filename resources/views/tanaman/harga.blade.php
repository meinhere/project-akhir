@extends('layout.main')

@section('content')
  <div class="container page-articles">
    <div class="header d-flex justify-content-between">
      <h3>Berikut adalah harga pasaran di wilayah terdekat</h3>
    </div>
    <div class="border-bottom w-100 m-auto mt-3"></div>
    <div class="row mt-4 d-flex justify-content-center">
      <div class="col-12 col-md-8 mb-4">
        <div class="row justify-content-center">
          @foreach ($prices as $price)
            <div class="col-6 col-lg-4 mb-3">
              <div class="card">
                {{-- @if ($plant->image)
              <img src="{{ asset('storage/' . $plant->image) }}" class="card-img-top" alt="{{ $plant->title }}">
            @else --}}
                <img src="img/artikel/{{ $price->plant->image }}" class="card-img-top rounded-3"
                  alt="{{ $price->plant->name }}" height="150">
                {{-- @endif --}}
                <div class="card-body">
                  <h4 class="card-title text-center">{{ $price->plant->name }}</h4>
                  @if ($price->harga_baru > $price->harga_lama)
                    <div class="d-flex justify-content-around mt-3">
                      <div class="d-flex flex-column text-success">
                        <i class="fa fa-chevron-up"></i>
                        <i class="fa fa-chevron-up" style="font-size: 0.8em; margin-top: -3.5px; margin-left: 1.5px;"></i>
                      </div>
                      <div class="text-success">
                        <span class="fw-bold">Harga sedang naik</span>
                      </div>
                    </div>
                  @else
                    <div class="d-flex justify-content-around mt-3">
                      <div class="d-flex flex-column text-danger">
                        <i class="fa fa-chevron-down"></i>
                        <i class="fa fa-chevron-down"
                          style="font-size: 0.8em; margin-top: -3.5px; margin-left: 1.5px;"></i>
                      </div>
                      <div class="text-danger">
                        <span class="fw-bold">Harga sedang turun</span>
                      </div>
                    </div>
                  @endif
                  <div class="d-flex justify-content-between my-3">
                    <button class="btn btn-info btn-sm rounded-pill">Harga Baru</button>
                    <span>@convert($price->harga_baru)</span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <button class="btn btn-warning btn-sm rounded-pill">Harga Lama</button>
                    <span>@convert($price->harga_lama)</span>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="col-12 col-md-4">
        <h3 class="mb-3 text-center fw-bold">Harga tanaman tertinggi</h3>
        <div class="table-responsive">
          <table class="table align-middle table-striped table-hover" id="dt">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Tanaman</th>
                <th>Harga Tanaman</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($prices->sortByDesc('harga_baru') as $price)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $price->plant->name }}</td>
                  <td>Rp. @convert($price->harga_baru)</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <a href="/" class="btn btn-outline-primary btn-sm mb-4 mt-3">
      <i class="fa fa-arrow-left"></i>
      Kembali ke halaman Beranda
    </a>
  </div>
@endsection

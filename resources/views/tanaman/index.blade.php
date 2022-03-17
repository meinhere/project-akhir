@extends('layout.main')

@section('content')
  <div class="container page-articles">
    <div class="header d-flex justify-content-between">
      <h3>Berikut adalah jenis-jenis tanaman yang tersedia</h3>
    </div>
    <div class="border-bottom w-100 m-auto mt-3"></div>
    <div class="row mt-4 d-flex justify-content-center">
      @foreach ($plants as $plant)
        <div class="col-6 col-md-4 col-lg-3 mb-3">
          <div class="card">
            {{-- @if ($plant->image)
              <img src="{{ asset('storage/' . $plant->image) }}" class="card-img-top" alt="{{ $plant->title }}">
            @else --}}
            <img src="storage/{{ $plant->image }}" class="card-img-top rounded-3" alt="{{ $plant->name }}">
            {{-- @endif --}}
            <div class="card-body">
              <h6 class="card-text">Nama Tanaman : <strong>{{ $plant->name }}</strong></h6>
              <h6 class="card-text">Jenis Tanaman : <span
                  class="badge bg-success">{{ $plant->plant_category->name }}</span></h6>
              <p class="card-text" style="font-size: 0.8em"><cite>{{ $plant->detail }}</cite></p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <a href="/" class="btn btn-outline-primary btn-sm mb-4 mt-3">
      <i class="fa fa-arrow-left"></i>
      Kembali ke halaman Beranda
    </a>
  </div>
@endsection

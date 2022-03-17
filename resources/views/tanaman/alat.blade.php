@extends('layout.main')

@section('content')
  <div class="container page-articles">
    <div class="header d-flex justify-content-between">
      <h3>Berikut adalah jenis-jenis alat perkebunan yang diperlukan</h3>
    </div>
    <div class="border-bottom w-100 m-auto mt-3"></div>
    <div class="row mt-4 d-flex justify-content-center">
      @foreach ($tools as $tool)
        <div class="col-6 col-md-4 col-lg-3 mb-3">
          <div class="card">
            <img src="storage/{{ $tool->image }}" class="card-img-top rounded-3" alt="{{ $tool->name }}">
            <div class="card-body">
              <h6 class="card-text">Nama Alat : <strong>{{ $tool->name }}</strong></h6>
              <span>
                Tanaman yang membutuhkan :
                @foreach ($plants_tools as $plant_tool)
                  @if ($plant_tool->tool_id == $tool->id)
                    <button class="badge bg-success mt-2">
                      {{ $plant_tool->plant->name }}
                    </button>
                  @endif
                @endforeach
              </span>
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

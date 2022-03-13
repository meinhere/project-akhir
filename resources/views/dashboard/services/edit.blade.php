@extends('layout.dashboard')

@section('content')
  <form action="/dashboard/services/{{ $service->slug }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row mt-3">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Edit Layanan</div>
            <hr>
            <div class="form-group">
              <label for="title">Nama Layanan</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" name="name"
                placeholder="Masukkan nama layanan" value="{{ old('name', $service->name) }}" autofocus>
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="slug">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                placeholder="Masukkan slug layanan" value="{{ old('slug', $service->slug) }}" readonly>
              @error('slug')
                <div class=" invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="kategori">Jenis Layanan</label>
              <select name="jenis_service" id="kategori"
                class="form-control @error('jenis_service') is-invalid @enderror">
                <option value="1" {{ old('jenis_service', $service->jenis_service) == 1 ? 'selected' : '' }}>Layanan
                  Pertama</option>
                <option value="2" {{ old('jenis_service', $service->jenis_service) == 2 ? 'selected' : '' }}>Layanan
                  Kedua</option>
              </select>
              @error('jenis_service')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="image">Gambar</label>
              <input type="hidden" name="oldImage" value="{{ $service->gambar }}">
              @if ($service->gambar)
                <img src="{{ asset('storage/' . $service->gambar) }}" class="img-fluid img-preview d-block">
              @else
                <img class="img-fluid img-preview">
              @endif
              <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="image" name="gambar"
                style="padding-bottom: 2.2em;" onchange="previewImage()">
              @error('gambar')
                <div class=" invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="btn btn-light px-5"><i class="fa fa-send"></i> Kirim</button>
            </div>
          </div>
        </div>
      </div>
  </form>
@endsection

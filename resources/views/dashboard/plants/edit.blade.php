@extends('layout.dashboard')

@section('content')
  <form action="/dashboard/plants/{{ $plant->id }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row mt-3">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Edit Tanaman</div>
            <hr>
            <div class="form-group">
              <label for="name">Nama Tanaman</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Masukkan nama tanaman" value="{{ old('name', $plant->name) }}" autofocus>
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="kategori">Jenis Tanaman</label>
              <select name="plant_category_id" id="kategori"
                class="form-control @error('plant_category_id') is-invalid @enderror">
                @foreach ($plant_categories as $plant_category)
                  @if (old('plant_category_id', $plant->plant_category_id) == $plant_category->id)
                    <option value="{{ $plant_category->id }}" selected>{{ $plant_category->name }}</option>
                  @else
                    <option value="{{ $plant_category->id }}">{{ $plant_category->name }}</option>
                  @endif
                @endforeach
              </select>
              @error('plant_category_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="tools" class="d-block">Pilih Alat</label>
              <select name="tools[]" id="tools" multiple="multiple" class="form-control select2-form"
                style="width: 100%;">
                @foreach ($tools as $tool)
                  <option value="{{ $tool->id }}">{{ $tool->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="detail">Detail</label>
              <textarea class="form-control @error('detail') is-invalid @enderror" id="detail" name="detail"
                placeholder="Masukkan detail tanaman" rows="5">{{ old('detail', $plant->detail) }}</textarea>
              @error('detail')
                <div class=" invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="image">Gambar</label>
              <input type="hidden" name="oldImage" value="{{ $plant->image }}">
              @if ($plant->image)
                <img src="{{ asset('storage/' . $plant->image) }}" class="img-fluid img-preview d-block">
              @else
                <img class="img-fluid img-preview">
              @endif
              <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                style="padding-bottom: 2.2em;" onchange="previewImage()">
              @error('image')
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

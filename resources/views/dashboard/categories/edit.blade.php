@extends('layout.dashboard')

@section('content')
  <form action="/dashboard/categories/{{ $category->slug }}" method="post">
    @method('put')
    @csrf
    <div class="row mt-3">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Edit Artikel</div>
            <hr>
            <div class="form-group">
              <label for="title">Judul</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" name="name"
                placeholder="Masukkan judul artikel" value="{{ old('name', $category->name) }}" autofocus>
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="slug">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                placeholder="Masukkan slug artikel" value="{{ old('slug', $category->slug) }}" readonly>
              @error('slug')
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
    </div>
  </form>
@endsection

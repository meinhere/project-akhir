@extends('layout.dashboard')

@section('content')
  <form action="/dashboard/articles" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row mt-3">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Tambah Artikel</div>
            <hr>
            <div class="form-group">
              <label for="title">Judul</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                placeholder="Masukkan judul artikel" value="{{ old('title') }}" autofocus>
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="slug">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                placeholder="Masukkan slug artikel" value="{{ old('slug') }}" readonly>
              @error('slug')
                <div class=" invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <select name="category_id" id="kategori" class="form-control @error('category_id') is-invalid @enderror">
                @foreach ($categories as $category)
                  @if (old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                  @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endif
                @endforeach
              </select>
              @error('category_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="image">Gambar</label>
              <img class="img-fluid img-preview">
              <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                style="padding-bottom: 2.2em;" onchange="previewImage()">
              @error('image')
                <div class=" invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <div class="card-title">Body</div>
              @error('body')
                <p class="text-danger">{{ $message }}</p>
              @enderror
              <hr>
              <input id="body" type="hidden" name="body" value="{{ old('body') }}">
              <trix-editor input="body"></trix-editor>
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

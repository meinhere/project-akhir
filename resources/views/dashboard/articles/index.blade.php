@extends('layout.dashboard')

@section('content')
  <div class="row">
    <div class="col-12 col-md-10">
      <h3 class="mt-3 mb-3">Artikel Saya</h3>

      @if (session()->has('success'))
        <div class="alert alert-success p-3" role="alert">
          {{ session('success') }}
        </div>
      @endif

      <a href="/dashboard/articles/create" class="btn btn-primary mb-4"><i class="fa fa-plus"></i> Tambah Artikel</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-10">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Daftar artikel yang sudah dibuat</h5>
          <div class="table-responsive">
            <table class="table table-striped" id="table-article">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($articles as $article)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ Str::limit($article->title, 50, '...') }}</td>
                    <td>{{ $article->category->name }}</td>
                    <td>
                      <a href="/dashboard/articles/{{ $article->slug }}" class="badge badge-info">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="/dashboard/articles/{{ $article->slug }}/edit" class="badge badge-warning">
                        <i class="fa fa-edit"></i>
                      </a>
                      <form method="post" action="/dashboard/articles/{{ $article->slug }}" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge badge-danger border-0" onclick="return confirm('Apakah kamu yakin ?')"><i
                            class="fa fa-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

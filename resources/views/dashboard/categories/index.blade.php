@extends('layout.dashboard')

@section('content')
  <div class="row">
    <div class="col-12 col-md-10 col-lg-6">
      <h3 class="mt-3 mb-3">Daftar Kategori</h3>

      @if (session()->has('success'))
        <div class="alert alert-success p-3" role="alert">
          {{ session('success') }}
        </div>
      @endif

      <a href="/dashboard/categories/create" class="btn btn-primary mb-4"><i class="fa fa-plus"></i> Tambah Kategori</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-10 col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Daftar kategori yang ada di database</h5>
          <div class="table-responsive">
            <table class="table table-striped" id="table-article">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                      <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge badge-warning">
                        <i class="fa fa-edit"></i>
                      </a>
                      <form method="post" action="/dashboard/categories/{{ $category->slug }}" class="d-inline">
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

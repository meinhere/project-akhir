@extends('layout.dashboard')

@section('content')
  <div class="row">
    <div class="col-12">
      <h3 class="mt-3 mb-3">Daftar Layanan</h3>

      @if (session()->has('success'))
        <div class="alert alert-success p-3" role="alert">
          {{ session('success') }}
        </div>
      @endif

      <a href="/dashboard/services/create" class="btn btn-primary mb-4"><i class="fa fa-plus"></i> Tambah Layanan</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Daftar layanan pertama yang disediakan</h5>
          <div class="table-responsive">
            <table class="table table-striped" id="table-article">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Layanan</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($services->where('jenis_service', 1) as $service)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $service->name }}</td>
                    <td>
                      <img src="{{ asset('storage/' . $service->gambar) }}" alt="{{ $service->gambar }}"
                        class="rounded-circle">
                    </td>
                    <td>
                      <a href="/dashboard/services/{{ $service->slug }}/edit" class="badge badge-warning">
                        <i class="fa fa-edit"></i>
                      </a>
                      <form method="post" action="/dashboard/services/{{ $service->slug }}" class="d-inline">
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
    <div class="col-12 col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Daftar layanan kedua yang disediakan</h5>
          <div class="table-responsive">
            <table class="table table-striped" id="table-article">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Layanan</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($services->where('jenis_service', 2) as $service)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $service->name }}</td>
                    <td>
                      <img src="{{ asset('storage/' . $service->gambar) }}" alt="{{ $service->gambar }}"
                        class="rounded-circle">
                    </td>
                    <td>
                      <a href="/dashboard/services/{{ $service->slug }}/edit" class="badge badge-warning">
                        <i class="fa fa-edit"></i>
                      </a>
                      <form method="post" action="/dashboard/services/{{ $service->slug }}" class="d-inline">
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

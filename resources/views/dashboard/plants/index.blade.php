@extends('layout.dashboard')

@section('content')
  <div class="row">
    <div class="col-12">
      <h3 class="mt-3 mb-3">Daftar Tanaman</h3>

      @if (session()->has('success'))
        <div class="alert alert-success p-3" role="alert">
          {{ session('success') }}
        </div>
      @endif

      <a href="/dashboard/plants/create" class="btn btn-primary mb-4"><i class="fa fa-plus"></i> Tambah Layanan</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Daftar tanaman yang tersedia</h5>
          <div class="table-responsive">
            <table class="table table-striped" id="table-article">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Tanaman</th>
                  <th scope="col">Jenis Tanaman</th>
                  <th scope="col">Detail</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($plants as $plant)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $plant->name }}</td>
                    <td>{{ $plant->plant_category->name }}</td>
                    <td>{{ Str::limit($plant->detail, 30, '...') }}</td>
                    <td>
                      <img src="{{ asset('storage/' . $plant->image) }}" alt="{{ $plant->image }}"
                        class="rounded-circle">
                    </td>
                    <td>
                      <a href="/dashboard/plants/{{ $plant->id }}/edit" class="badge badge-warning">
                        <i class="fa fa-edit"></i>
                      </a>
                      <form method="post" action="/dashboard/plants/{{ $plant->id }}" class="d-inline">
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

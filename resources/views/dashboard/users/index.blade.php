@extends('layout.dashboard')

@section('content')
  <div class="row">
    <div class="col-12">
      <h3 class="mt-3 mb-3">Daftar Users</h3>

      @if (session()->has('success'))
        <div class="alert alert-success p-3" role="alert">
          {{ session('success') }}
        </div>
      @endif

      <a href="/dashboard/users/create" class="btn btn-primary mb-4"><i class="fa fa-plus"></i> Tambah User</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data user yang telah mendaftar</h5>
          <div class="table-responsive">
            <table class="table table-striped" id="table-article">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                      <a href="/dashboard/users/{{ $user->id }}/edit" class="badge badge-warning">
                        <i class="fa fa-edit"></i>
                      </a>
                      <form method="post" action="/dashboard/users/{{ $user->id }}" class="d-inline">
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

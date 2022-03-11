@extends('layout.dashboard')

@section('content')
  <form action="/dashboard/users" method="post">
    @csrf
    <div class="row mt-3">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Tambah User</div>
            <hr>
            <div class="form-group">
              <label for="name">Nama Lengkap</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Masukkan nama lengkap" value="{{ old('name') }}" autofocus>
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username"
                placeholder="Masukkan username" value="{{ old('username') }}">
              @error('username')
                <div class=" invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                placeholder="Masukkan email" value="{{ old('email') }}">
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                name="password" placeholder="Masukkan password" value="{{ old('password') }}">
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                <option value="User" {{ old('role') == 'User' ? 'selected' : '' }}>User</option>
                <option value="Petani" {{ old('role') == 'Petani' ? 'selected' : '' }}>Petani</option>
                <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
              </select>
              @error('role')
                <div class="invalid-feedback">
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

@extends('layout.main')

@section('content')
  <div class="form-content">
    <div class="container mb-4">
      <div class="row justify-content-center">
        <div class="col-10 col-md-6 col-lg-5 form-register">
          <h1 class="h3 mb-3 fw-normal text-center">Daftar User</h1>

          <form action="/register" method="post">
            @csrf
            <div class="form-floating">
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                placeholder="Nama Lengkap" value="{{ old('name') }}" @error('name') autofocus @enderror>
              <label for="name">Nama Lengkap</label>
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username"
                placeholder="Username" value="{{ old('username') }}" @error('username') autofocus @enderror>
              <label for="username">Username</label>
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                placeholder="name@example.com" value="{{ old('email') }}" @error('email') autofocus @enderror>
              <label for="email">Alamat Email</label>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"
                name="password" id="password" placeholder="Password" @error('password') autofocus @enderror>
              <label for="password">Password</label>
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <button class="w-100 btn btn-lg btn-success my-3" type="submit">Daftar</button>
            <small class="d-block text-center">Sudah mempunyai akun? <a href="/login"
                class="text-success"><strong>Login</strong></a></small>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

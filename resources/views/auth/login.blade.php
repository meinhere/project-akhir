@extends('layout.main')

@section('content')
  <div class="form-content">
    <div class="container mb-4">
      <div class="row justify-content-center">
        <div class="col-10 col-md-6 col-lg-5 form-register">
          @if (session()->has('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          @if (session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('failed') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <h1 class="h3 mb-3 fw-normal text-center">Login User</h1>

          <form action="/login" method="post">
            @csrf
            <div class="form-floating">
              <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                id="username" placeholder="Username" value="{{ old('username') }}"
                @error('username') autofocus @enderror required>
              <label for="username">Username</label>
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"
                name="password" id="password" placeholder="Password" @error('password') autofocus @enderror required>
              <label for="password">Password</label>
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <button class="w-100 btn btn-lg btn-success my-3" type="submit">Login</button>
            <small class="d-block text-center">Belum mendaftar? <a href="/register" class="text-success"><strong>Daftar
                  Sekarang</strong></a></small>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@extends('layout.main')

@section('content')
  @if (auth()->check())
    <div class="page-articles">
      <h4 class="text-center mt-4">Belum ada riwayat..</h4>
    </div>
  @else
    <div class="page-articles">
      <h4 class="text-center mt-4">Silahkan login terlebih dahulu untuk melihat riwayat</h4>
      <div class="d-flex justify-content-center mt-4">
        <a href="/login">
          <button class="btn btn-outline-success px-5">
            <i class="fa fa-sign-in"></i>
            LOGIN
          </button>
        </a>
      </div>
    </div>
  @endif
@endsection

@extends('layout.dashboard')

@section('content')
  <h3 class="text-center mt-5">Selamat datang di halaman Dashboard, {{ auth()->user()->name }}</h3>
@endsection

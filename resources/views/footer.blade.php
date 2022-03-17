@extends('layout.main')

@section('content')
  <div class="container page-articles mb-4">
    <div class="row justify-content-center">
      <div class="col-10 text-center">
        <h1 class="mb-4">{{ $footer->title }}</h1>
        <p>{!! $footer->body !!}</p>
      </div>
    </div>
  </div>
  <!---->
@endsection

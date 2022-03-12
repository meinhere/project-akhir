@extends('layout.main')

@section('content')
  <div class="container page-articles mb-4">
    <div class="mb-3">
      <a href="/" class="links-header">Beranda</a>&nbsp;&nbsp;>&nbsp;&nbsp;<span
        class="links-header mute">Service</span>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="/services/cara-pengobatan"
        class="links-header active">Cara Pengobatan</a>
    </div>
    <div class="border-bottom w-100 m-auto mt-3"></div>
    <div class="row mt-4 d-flex justify-content-center">
      <div class="col-12 col-md-8 mb-4">
        <figure class="mt-4">
          <h4 class="fw-bold">Cara pengobatan yang ideal untuk kebun anda</h4>
          <blockquote class="blockquote">
            <p>Tahapan - tahapan untuk paham dan mengerti dasar - dasar perkebunan</p>
          </blockquote>
          <figcaption class="blockquote-footer">
            Langkah <cite title="Source Title">Create - Read - Update - Delete</cite>
          </figcaption>
        </figure>
      </div>
      <div class="col-12 col-md-4">
        <h5 class="mb-3">Telusuri layanan lainnya</h5>
        @foreach ($services->whereNotIn('slug', ['cara-pengobatan']) as $service)
          <div class="card mb-3 card-populer w-100">
            <div class="row g-0">
              <div class="col-4">
                {{-- @if ($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded-start"
                  alt="{{ $article->title }}">
              @else --}}
                <img src="{{ asset('img/artikel/2.jpg') }}" class="img-fluid rounded-start"
                  alt="{{ $service->name }}">
                {{-- @endif --}}
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h6 class="card-title">
                    <a href="/services/{{ $service->slug }}"
                      class="text-dark text-decoration-none">{{ $service->name }}</a>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

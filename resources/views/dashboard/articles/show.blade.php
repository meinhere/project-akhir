@extends('layout.dashboard')

@section('content')
  <div class="container page-articles mb-5">
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-8 col-xl-8">
        <div class="content-article mt-5">
          <div class="content-article--header mb-3">
            <h1 class="mb-4">{{ $article->title }}</h2>

              <a href="/dashboard/articles" class="btn btn-success btn-sm">
                <i class="fa fa-arrow-left"></i> Kembali ke artikel saya
              </a>
              <a href="/dashboard/articles/{{ $article->slug }}/edit" class="btn btn-warning btn-sm">
                <i class="fa fa-edit"></i> Edit
              </a>
              <form method="post" action="/dashboard/articles/{{ $article->slug }}" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin ?')"><i
                    class="fa fa-trash"></i> Hapus</button>
              </form>
          </div>
          <div class="content-article--image">
            @if ($article->image)
              <img src="{{ asset('storage/' . $article->image) }}" class="img-thumbnail" alt="{{ $article->title }}">
            @else
              <img src="{{ URL('/img/artikel/1.jpg') }}" class="img-thumbnail" alt="{{ $article->title }}">
            @endif
          </div>
          <div class="content-article--body mt-3">
            <p>{!! $article->body !!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---->
@endsection

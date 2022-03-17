@extends('layout.main')

@section('content')
  <div class="container page-articles mb-5">
    <div class="row">
      <div class=" col-12 col-lg-8 mt-4">
        <a href="/" class="links-header">Beranda</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="/artikel"
          class="links-header">Artikel</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="/artikel/detail"
          class="links-header active">{{ $article->title }}</a>
      </div>
      <div class="col-12 col-lg-4">
        <form action="/artikel/{{ $article->slug }}" class="form-inline d-flex form-search mt-3">
          <input class="form-control me-sm-2 input-search" name="search" type="search"
            placeholder="Cari nama artikel disini" aria-label="Search" value="{{ request('search') }}">
          <button class="btn btn-outline-success btn-search" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-lg-8 col-xl-8">
        <div class="content-article mt-5">
          <div class="content-article--header">
            <h1 class="mb-4">{{ $article->title }}</h2>
              <p>Dibuat oleh : <a href="" class="text-dark text-decoration-none fw-bold">{{ $article->user->name }}</a>
                | {{ $article->created_at->diffForHumans() }}</p>
          </div>
          <div class="content-article--image">
            <img src="{{ asset('img/artikel/1.jpg') }}" class="img-thumbnail" alt="">
          </div>
          <div class="content-article--body mt-3">
            <p>{!! $article->body !!}</p>
          </div>
        </div>
        <div class="content-comment mt-5">
          <div class="card bg-secondary text-white">
            <div class="card-header fw-bold">
              Komentar
            </div>
            <div class="card-body">
              @if ($comments->count())
                <div class="comment-body">
                  @foreach ($comments as $comment)
                    <img src="{{ asset('img/default.svg') }}" alt="" width="40">
                    <span class="ms-2"><cite>{{ $comment->user->name }}</cite></span>
                    <div class="comment-text mt-2 mb-4">
                      <p class="card-text">{{ $comment->comment }}</p>
                      <p class="card-text" style="margin-top: -15px; font-size: 0.8em;">
                        -- {{ $comment->created_at->diffForHumans() }} -- </p>
                    </div>
                  @endforeach
                </div>
              @else
                <p class="card-text text-center">Belum ada komentar, jadilah yang pertama membuatnya</p>
              @endif
              @if (auth()->check())
                <div class="comment-input">
                  <form action="/artikel/comment" method="post">
                    @csrf
                    <div class="input-group mb-3">
                      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                      <input type="hidden" name="article_id" value="{{ $article->id }}">
                      <input type="hidden" name="slug" value="{{ $article->slug }}">
                      <input type="text" class="form-control @error('comment') is-invalid @enderror"
                        placeholder="Masukkan komentar anda" aria-describedby="button-addon2" name="comment">
                      @error('comment')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      <button class="btn btn-primary" type="submit" id="button-addon2">
                        <i class="fa fa-send"></i>
                        Kirim
                      </button>
                    </div>
                  </form>
                </div>
              @else
                <p class="text-center mt-5">Silahkan login terlebih dahulu untuk dapat berkomentar</p>
                <div class="d-flex justify-content-center">
                  <a href="/login">
                    <button class="btn btn-success">
                      <i class="fa fa-sign-in"></i>
                      LOGIN
                    </button>
                  </a>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-4 col-xl-4">
        @if ($articles->count())
          <div class="detail-category mt-5">
            <h6>Kategori</h6>
            <button class="btn btn-outline-success detail-category-btn">
              <a href="/kategori/{{ $article->category->slug }}">{{ $article->category->name }}</a>
            </button>
          </div>
          <div class="detail-category-list mt-5">
            <h6>Daftar Kategori Lainnya</h6>
            @foreach ($categories as $category)
              <button class="btn btn-outline-success detail-category-btn">
                <a href="/kategori/{{ $category->slug }}">{{ $category->name }}</a>
              </button>
            @endforeach
          </div>
          <div class="detail-category-list mt-5">
            <h6>Artikel Terkait</h6>
            @foreach ($articles->whereNotIn('id', $article->id)->take(4) as $article)
              <div class="card mb-3 card-populer w-100">
                <div class="row g-0">
                  <div class="col-4">
                    <img src="{{ asset('img/artikel/2.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-8">
                    <div class="card-body card-subjudul ms-0">
                      <h6 class="card-title"><a href="/artikel/{{ $article->slug }}"
                          class="text-dark text-decoration-none">{{ Str::limit($article->title, 40, '...') }}</a>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        @else
          <p class="text-center mt-5 mb-4">Hasil pencarian tidak dapat ditemukan.</p>
        @endif
      </div>
    </div>
  </div>
  <!---->
@endsection

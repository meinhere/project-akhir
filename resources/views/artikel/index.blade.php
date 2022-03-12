@extends('layout.main')

@section('content')
  <div class="container page-articles mb-5">
    <div class="mb-4">
      <a href="/" class="links-header">Beranda</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="/artikel"
        class="links-header active">Artikel</a>
    </div>
    <form action="/artikel" class="form-inline d-flex form-search">
      <input class="form-control me-sm-2 input-search" type="search"
        placeholder="Cari berdasarkan nama artikel atau isi artikel" aria-label="Search" name="search"
        value="{{ request('search') }}">
      <button class="btn btn-outline-success btn-search" type="submit">
        <i class="fa fa-search"></i>
        <span>Cari</span>
      </button>
    </form>
    @if ($articles->count())
      <div class="articles-header mt-5">
        <h2>Artikel Terbaru</h2>
        <div class="row mt-3">
          <div class="col-12 col-lg-7">
            <div class="card bg-dark text-white">
              @if ($newArticle[0]->image)
                <img src="{{ asset('storage/' . $newArticle[0]->image) }}" class="img-thumbnail"
                  alt="{{ $newArticle[0]->title }}">
              @else
                <img src="img/artikel/1.jpg" class="card-img" alt="{{ $newArticle[0]->title }}">
              @endif
              <div class="card-img-overlay">
                <h2 class="card-title"><a href="/artikel/{{ $newArticle[0]->slug }}"
                    class="text-white text-decoration-none text-uppercase">
                    {{ $newArticle[0]->title }}</a></h2>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-5">
            <div class="row article-populer">
              @foreach ($articles->take(5) as $article)
                <div class="card mb-3 card-populer w-100">
                  <div class="row g-0">
                    <div class="col-4">
                      @if ($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded-start"
                          alt="{{ $article->title }}">
                      @else
                        <img src="img/artikel/2.jpg" class="img-fluid rounded-start" alt="{{ $article->title }}">
                      @endif
                    </div>
                    <div class="col-8">
                      <div class="card-body card-subjudul">
                        <h6 class="card-title"><a href="/artikel/{{ $article->slug }}"
                            class="text-dark text-decoration-none">{{ Str::limit($article->title, 65, '...') }}</a>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="articles-body mt-5">
        @if ($articles->count() >= 6)
          <div class="row">
            <div class="col-8">
              <h2>100+ Artikel Lainnya</h2>
            </div>
            <div class="col-4 d-flex justify-content-end">
              {{ $articles->links() }}
            </div>
          </div>
        @endif
        <div class="row mt-4 d-flex justify-content-center">
          @foreach ($articles->slice(6) as $article)
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="card">
                @if ($article->image)
                  <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top"
                    alt="{{ $article->title }}">
                @else
                  <img src="img/artikel/3.jpg" class="card-img-top" alt="{{ $article->title }}">
                @endif
                <div class="card-body">
                  <button class=" btn-sm mb-3 btn-kategori">
                    <div class="dot"></div>
                    <a href="/kategori/{{ $article->category->slug }}"
                      class="text-decoration-none text-success">{{ $article->category->name }}</a>
                  </button>
                  <h6 class="card-title"><a href="/artikel/{{ $article->slug }}"
                      class="text-dark text-decoration-none fw-bold">{{ $article->title }}</a></h6>
                  <p class="card-text" style="font-size: 0.8em">{{ $article->excerpt }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @else
      <p class="text-center fs-4 mt-5 mb-4">Hasil pencarian tidak dapat ditemukan.</p>
    @endif
  </div>
  <!---->
@endsection

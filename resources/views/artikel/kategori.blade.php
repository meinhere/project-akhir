@extends('layout.main')

@section('content')
  <div class="container page-articles mb-5">
    <div class="row">
      <div class=" col-12 col-lg-8 mt-4">
        <a href="/" class="links-header">Beranda</a>&nbsp;&nbsp;>&nbsp;&nbsp;<span
          class="links-header mute">Kategori</span>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="/artikel/detail"
          class="links-header active">{{ $category }}</a>
      </div>
      <div class="col-12 col-lg-4">
        <form class="form-inline d-flex form-search mt-3">
          <input class="form-control me-sm-2 input-search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success btn-search" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-12 col-lg-8 col-xl-8">
        <div class="content-article">
          <div class="row">
            <h4 class="mb-3">Artikel terkait dengan <strong>{{ $category }}</strong></h4>
            @foreach ($articles as $article)
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="card">
                  <img src="{{ URL('/img/artikel/3.jpg') }}" class="card-img-top" alt="...">
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
      </div>
      <div class="col-md-12 col-lg-4 col-xl-4">
        <div class="detail-category-list">
          <h6>Cari Kategori Lainnya</h6>
          @foreach ($categories as $category)
            <button class="btn btn-outline-success detail-category-btn">
              <a href="/kategori/{{ $category->slug }}">{{ $category->name }}</a>
            </button>
          @endforeach
        </div>
        <div class="detail-category-list mt-5">
          <h6>Artikel Terkait</h6>
          @foreach ($articles->take(3) as $article)
            <div class="card mb-3 card-populer w-100">
              <div class="row g-0">
                <div class="col-4">
                  <img src="{{ URL('/img/artikel/2.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-8">
                  <div class="card-body card-subjudul ms-0">
                    <h6 class="card-title"><a href="/artikel/{{ $article->slug }}"
                        class="text-dark text-decoration-none">{{ $article->title }}</a>
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
  <!---->
@endsection

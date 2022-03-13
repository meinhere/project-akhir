@extends('layout.main')

@section('content')
  <div class="container-fluid col-12 flex-1 px-0">
    <home>
      <!-- Jumbotron -->
      <div class="banner insurance">
        <div class="banner-layout">
          <span class="banner-title">Solusi Perkebunan Terpercaya</span>
          <span class="banner-description">Konsultasi pakarnya, temukan jenis tanaman menarik, nantikan update
            informasi mengenai perkebunan, semua ada di JagoKebun!</span>
        </div>
        <div class="service service-with-insurance-entry-point">
          @foreach ($services->where('jenis_service', '1') as $service)
            <a href="/{{ $service->slug }}" class="text-decoration-none">
              <div class="service--item" tabindex="0">
                <div class="service--item__icon">
                  <img src="{{ asset('storage/' . $service->gambar) }}" alt="{{ $service->name }}"
                    class="rounded-circle">
                </div>
                <div class="service--item__details">
                  <span class="service--item__details--text">{{ $service->name }}</span>
                </div>
              </div>
            </a>
          @endforeach
          <!---->
        </div>
        <!---->
      </div>
      <!-- Akhir Jumbotron -->

      <!-- Category -->
      <div class="category">
        <category-spesialised-care class="category--spesialised">
          <div class="category-container">
            <span class="category-container--title"> Layanan Terkait </span>
            <div class="category-container--content">
              @foreach ($services->where('jenis_service', '2') as $service)
                <a href="/services/{{ $service->slug }}" class="text-decoration-none">
                  <div class="category-container--content--item" style="order: 0">
                    <div class="category-container--content--item__icon">
                      <img src="{{ asset('storage/' . $service->gambar) }}" alt="{{ $service->name }}"
                        class="rounded-circle">
                    </div>
                    <div class="category-container--content--item__details">
                      <span class="category-container--content--item__details--text">{{ $service->name }}</span>
                    </div>
                  </div>
                </a>
              @endforeach
              <!---->
            </div>
          </div>
        </category-spesialised-care>
      </div>
      <!-- Akhir Category -->

      <!-- Artikel -->
      <home-article-list>
        <div class="article pt-3">
          <div class="article-header">
            <span class="article-header_title">Baca Artikel</span>
            <div class="article-header_btn">
              <button class="article-header_btn-style"><a href="/artikel">Lihat Semua</a></button>
            </div>
          </div>
          <div class="article-body">
            <div class="article-body_title">
              <div class="article-body_title-btn selected">Terbaru</div>
            </div>
            <div class="article-body_title">
              <div class="article-body_title-btn">Populer</div>
            </div>
            <!---->
          </div>
          <div class="article-content">
            <section class="article-content_detail">
              @foreach ($articles->take(7) as $article)
                <div class="article-content_detail-layout">
                  <a href="/artikel/{{ $article->slug }}">
                    <article-list-item>
                      <!---->
                      <section class="article-card">
                        <figure tabindex="0">
                          <img src="/img/artikel/1.jpg" />
                        </figure>
                        <span class="body-container" tabindex="0">
                          <div>
                            <header><a href="/artikel/{{ $article->slug }}"
                                class="fs-5 text-decoration-none">{{ $article->title }}</a></header>
                          </div>
                        </span>
                        <div class="tag-container ellipsis">
                          <span class="tag-container_name">
                            <div class="dot"></div>
                            <a href="/kategori/{{ $article->category->slug }}"> {{ $article->category->name }} </a>
                            <!---->
                          </span>
                          <!---->
                        </div>
                        <!---->
                      </section>
                      <!---->
                    </article-list-item>
                  </a>
                </div>
              @endforeach
              <!---->
              <!---->
            </section>
            <!---->
            <!---->
          </div>
        </div>
      </home-article-list>
      <!-- Akhir Artikel -->
    </home>
    <!---->
  </div>
  <!---->
  <script src="/js/app.js"></script>
@endsection

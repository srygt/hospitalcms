@extends('web.layout.master')
@section('parentPageTitle', '')
@section('title') {{ $kategori[0]->kategoriadi }} @endsection
    @section('content')
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title pt-30 pb-1">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb mb-10">
                <li class="breadcrumb-item"><a href="{{route('web',app()->getLocale())}}" title="@lang('home.anasayfa')">@lang('home.anasayfa')</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $kategori[0]->kategoriadi }}</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>  

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pt-3 pb-40">
      <div class="container">
        <div class="row" id="contentPageBox">
          @if(!$kategori->isEmpty())
          @foreach($kategori as $k)
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="/{{ app()->getLocale() }}/{{ $k->hlink }}/{{ $k->ilink }}" title="{{ $k->baslik }}">
                  <img src="{{ asset('uploads/icerikler/'.$k->resim.'') }}" alt="{{ $k->baslik }}" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="/{{ app()->getLocale() }}/{{ $k->hlink }}" title="{{ $k->kategoriadi}}">{{ $k->kategoriadi }}</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta-cat" style="background:#c20000;">
                  <a href="/{{ app()->getLocale() }}/doktor/{{ $k->dlink }}" title="{{ $k->doktorunvani}}">{{ $k->doktorunvani }} {{ $k->doktoradi }}</a>
                </div>
                <div class="post__meta d-flex">
                  <span class="post__meta-date">{{ $k->eklemetarihi }}</span>
                  <h4 class="post__title"><a href="/{{ app()->getLocale() }}/tibbi-birimler/{{ $k->tlink }}" title="{{ $k->birimadi }}"><strong>{{ $k->birimadi }}</strong></a></h4>
                </div>
                <h4 class="post__title"><a href="/{{ app()->getLocale() }}/{{ $k->hlink }}/{{ $k->ilink }}" title="{{ $k->baslik }}">{{ $k->baslik }}</a></h4>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          @endforeach
          @else
          @lang('home.uyari')
          @endif          
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 text-center">
            <nav class="pagination-area pt-40">
              <ul class="pagination justify-content-center">
                <li>{{$kategori->links()}}</li>
              </ul>
            </nav><!-- .pagination-area -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->    
    @endsection      
@extends('web.layout.master')
@section('parentPageTitle', '')
@section('title') {{ $icerik[0]->baslik }} @endsection
    @section('content')

      <!-- ======================
        Blog Single
      ========================= -->
      <section class="blog blog-single pt-0 pb-80">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-2"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 pt-30">
            <nav>
              <ol class="breadcrumb mb-20">
                <li class="breadcrumb-item"><a href="{{route('web',app()->getLocale())}}" title="@lang('home.anasayfa')">@lang('home.anasayfa')</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $icerik[0]->baslik }}</li>
              </ol>
            </nav>            
            <h4 class="contact-panel__title">{{ $icerik[0]->baslik }} </h4>
              <div class="post-item mb-0">
                <div class="post__img">
                    <img src="{{ asset('uploads/icerikler/'.$icerik[0]->resim.'') }}" alt="{{ $icerik[0]->baslik }}" loading="lazy">
                </div><!-- /.post-img -->
                <div class="post__body pb-0">
                  <div class="post__meta-cat">
                    <a href="/{{ app()->getLocale() }}/{{ $icerik[0]->hlink }}" title="{{ $icerik[0]->kategoriadi}}">{{ $icerik[0]->kategoriadi }}</a>
                  </div><!-- /.blog-meta-cat -->
                  <div class="post__meta-cat" style="background:#c20000;">
                    <a href="/{{ app()->getLocale() }}/doktor/{{ $icerik[0]->dlink }}" title="{{ $icerik[0]->doktorunvani}}">{{ $icerik[0]->doktorunvani }} {{ $icerik[0]->doktoradi }}</a>
                  </div>
                  <div class="post__meta-cat" style="background:#404f9f;">
                    <a href="/{{ app()->getLocale() }}/tibbi-birimler/{{ $icerik[0]->tlink }}" title="{{ $icerik[0]->birimadi }}"><strong>{{ $icerik[0]->birimadi }}</strong></a>
                  </div>                                    
                  <div class="post__meta-cat" style="background:#d4d4d4;">
                    <span class="post__meta-date"><i class="fa fa-calendar"></i> {{ date("d-m-Y", strtotime($icerik[0]->eklemetarihi)) }}</span>
                  </div><!-- /.blog-meta -->
                  <div class="post__desc">
                    <p>{!! $icerik[0]->aciklama !!}</p>
                  </div><!-- /.blog-desc -->
                </div>
              </div><!-- /.post-item -->
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.blog Single -->    
    @endsection      
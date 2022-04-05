@extends('web.layout.master')
@section('parentPageTitle', '')
@section('title') {{ $ayarlar[0]->siteadi }} @endsection
<style>
  @media screen and (max-width: 480px) {    
    .colRespw{
        display: block;
    }
    .wcolResp{
      display: none;
    }
  }
  @media screen and (min-width: 480px) {    
    .colRespw{
        display: none;
    }
  }  
  </style>
  @section('content')
      <!-- ============================
          Slider
      ============================== -->
      <section class="slider">
        <div class="slick-carousel m-slides-0"
          data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}' style="">
          @foreach($slider as $s)            
          <div class="slide-item align-v-h">
            <div class="bg-img"><img src="{{asset('uploads/slider/'.$s->resim.'')}}" alt="{{ $s->baslik }}"></div>
            <div class="container">
              <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                  <div class="wcolResp slide__content">
                    <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                      <!-- feature item #1 -->
                      <li class="feature-item">
                        <a href="#" title="@lang('home.onlinerandevu')">                        
                          <div class="feature__icon row">
                            <div class="col-md-12"><i class="fa fa-calendar" aria-hidden="true"></i>
                              <h4 class="feature__title" style="font-weight:400;">@lang('home.onlinerandevu') </h4>
                            </div>
                          </div>
                        </a>
                      </li><!-- /.feature-item-->
                      <!-- feature item #2 -->
                      <li class="feature-item">
                        <a href="#"  data-toggle="modal" data-target="#tetkikSonuc" title="@lang('home.esonuc')">                        
                          <div class="feature__icon row">
                            <div class="col-md-12"><i class="fa fa-heartbeat" aria-hidden="true"></i>
                              <h4 class="feature__title" style="font-weight:400;">@lang('home.esonuc') </h4>
                            </div>                          
                          </div>
                        </a>                        
                      </li><!-- /.feature-item-->
                      <!-- feature item #3 -->
                      <li class="feature-item">
                        <a href="#" title="@lang('home.egecmisolsun')">                        
                          <div class="feature__icon row">
                            <div class="col-md-12"><i class="fa fa-file-image" aria-hidden="true"></i>
                              <h4 class="feature__title" style="font-weight:400;">@lang('home.egecmisolsun') </h4>
                            </div>                           
                          </div>
                        </a>                        
                      </li><!-- /.feature-item-->
                      <!-- feature item #4 -->
                      <li class="feature-item">
                        <a href="#" title="@lang('home.sor')">                        
                          <div class="feature__icon row">
                            <div class="col-md-12"><i class="fa fa-user-md" aria-hidden="true"></i>
                              <h4 class="feature__title" style="font-weight:400;">@lang('home.sor') </h4>
                            </div>                           
                          </div>
                        </a>                        
                      </li><!-- /.feature-item-->
                    </ul><!-- /.features-list -->
                  </div><!-- /.slide-content -->
                </div><!-- /.col-xl-7 -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                  <div class="slide__content">
                    <h6 class="slide__title color-white" style="font-size:55px;">{{ $s->baslik }}</h6>
                    <a href="{{ $s->slink }}" lang="tr" title="{{ $s->baslik }}" class="btn__secondary buttonMore pl-15 pr-15 pt-10 pb-10">
                      <span>@lang('home.detaylibilgi')</span> <i class="icon-arrow-right"></i>
                    </a>
                  </div>
                </div>                
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
          @endforeach
        </div><!-- /.carousel -->
      </section><!-- /.slider -->
      <!-- ======================
        Blog Grid
      ========================= -->
      <section class="blog-grid pt-20 mt-0 pb-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 colRespw">
                <div class="row list-unstyled mb-30 d-flex flex-wrap">
                  <!-- feature item #1 -->
                  <div class="feature-item col-6" style="border-radius: 0px;margin:10px 0px;">
                    <a href="#" title="@lang('home.onlinerandevu')">
                      <div class="feature__icon row" style="text-align:center;padding-top:15px;">
                        <div class="col-md-12"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                        <div class="col-md-12">
                          <h4 class="feature__title">@lang('home.onlinerandevu') </h4>
                        </div>
                      </div>
                    </a>
                  </div><!-- /.feature-item-->
                  <!-- feature item #2 -->
                  <div class="feature-item col-6" style="border-radius: 0px;margin:10px 0px;">
                    <a href="#"  data-toggle="modal" data-target="#tetkikSonuc" title="@lang('home.esonuc')"> 
                      <div class="feature__icon row" style="text-align:center;padding-top:15px;">
                        <div class="col-md-12"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
                        <div class="col-md-12">
                          <h4 class="feature__title">@lang('home.esonuc') </h4>
                        </div>   
                      </div>
                    </a>                                           
                  </div><!-- /.feature-item-->
                  <!-- feature item #3 -->
                  <div class="feature-item col-6" style="border-radius: 0px;margin:10px 0px;">
                    <a href="#" title="@lang('home.egecmisolsun')">
                      <div class="feature__icon row" style="text-align:center;padding-top:15px;">
                        <div class="col-md-12"><i class="fa fa-file-image" aria-hidden="true"></i></div>
                        <div class="col-md-12">
                          <h4 class="feature__title">@lang('home.egecmisolsun') </h4>
                        </div>                           
                      </div>
                    </a>
                  </div><!-- /.feature-item-->
                  <!-- feature item #4 -->
                  <div class="feature-item col-6" style="border-radius: 0px;margin:10px 0px;">
                    <a href="#" title="@lang('home.sor')">
                      <div class="feature__icon row" style="text-align:center;padding-top:15px;">
                        <div class="col-md-12"><i class="fa fa-user-md" aria-hidden="true"></i></div>
                        <div class="col-md-12">
                          <h4 class="feature__title">@lang('home.sor') </h4>
                        </div>                           
                      </div>
                    </a>
                  </div><!-- /.feature-item-->
                </div><!-- /.features-list -->
            </div><!-- /.col-xl-7 -->            
            <div class="col-lg-12" style="padding:0px;">
              <nav class="nav nav-tabs align-items-center">
                <a class="nav__link text-uppercase" data-toggle="tab" href="#duyurular">@lang('home.duyurular')</a>
                <a class="nav__link active align-items-center text-uppercase" data-toggle="tab" href="#saglikkosesi">@lang('home.saglikkosesi')</a>
              </nav>
              <div class="tab-content mb-50" id="nav-tabContent">
                <div class="tab-pane fade" id="duyurular">
                  <div class="row mt-30">
                    <!-- Duyurular Alanı Başlangıç -->
                  @foreach($duyurular as $k)
                  <!-- Post Item #1 -->
                  <div class="col-sm-12 col-md-6 col-lg-4 posBorder">
                    <div class="post-item">
                      <div class="post__img">
                        <a href="/{{ $k->hlink }}/{{ $k->ilink }}" title="{{ $k->baslik }}">
                          <img src="{{ asset('uploads/icerikler/'.$k->resim.'') }}" alt="{{ $k->baslik }}" loading="lazy">
                        </a>
                      </div><!-- /.post__img -->
                      <div class="post__bodys">
                        <div class="post__meta-cat">
                          <a href="/{{ $k->hlink }}" title="{{ $k->kategoriadi}}">{{ $k->kategoriadi }}</a>
                        </div><!-- /.blog-meta-cat -->
                        <h4 class="post__title"><a href="/{{ $k->hlink }}/{{ $k->ilink }}" title="{{ $k->baslik }}">{{ $k->baslik }}</a></h4>
        
                        <p class="post__desc">{!! Str::limit($k->aciklama,250) !!}
                        </p>
                        <a href="/{{ $k->hlink }}/{{ $k->ilink }}" title="{{ $k->baslik }}" class="btn btn__secondary btn__link btn__rounded">
                          <span>@lang('home.devami')</span>
                          <i class="icon-arrow-right"></i>
                        </a>
                      </div><!-- /.post__body -->
                    </div><!-- /.post-item -->
                  </div><!-- /.col-lg-4 -->
                  @endforeach
                </div>
                  <!-- Duyurular Alanı Bitiş -->
                </div><!-- /.desc-tab -->
                <div class="tab-pane fade show active" id="saglikkosesi">
                  <div class="row mt-30 slick-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                  <!-- Sağlık Köşesi Alanı Başlangıç -->
                  @foreach($saglikkosesi as $k)
                  <!-- Post Item #1 -->
                  <div class="col-sm-12 col-md-6 col-lg-3 pl-10 pr-10">
                    <div class="post-item posBorder">
                      <div class="post__img">
                        <a href="/{{ $k->hlink }}/{{ $k->ilink }}" title="{{ $k->baslik }}">
                          <img src="{{ asset('uploads/icerikler/'.$k->resim.'') }}" alt="{{ $k->baslik }}" loading="lazy">
                        </a>
                      </div><!-- /.post__img -->
                      <div class="post__bodys">
                        <div class="post__meta-cat">
                          <a href="/{{ $k->hlink }}" title="{{ $k->kategoriadi}}">{{ $k->kategoriadi }}</a>
                        </div><!-- /.blog-meta-cat -->
                        <h4 class="post__title"><a href="/{{ $k->hlink }}/{{ $k->ilink }}" title="{{ $k->baslik }}">{{ $k->baslik }}</a></h4>
                      </div><!-- /.post__body -->
                    </div><!-- /.post-item -->
                  </div><!-- /.col-lg-4 -->
                  @endforeach
                  <!-- Sağlık köşesi Alanı Bitiş -->
                </div>
                </div><!-- /.reviews-tab -->   
              </div>           
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.blog Grid -->

      @if(!$doktorlar->isEmpty())
      <!-- ======================
        Team
      ========================= -->
      <section class="team-layout2 pt-10" style="border-top:3px solid #ddd;overflow: hidden;position: relative;top: 0;border-top-left-radius: 20%;border-top-right-radius: 20%;padding-bottom: 60px;margin-bottom: -60px;background-color: #f1f4f8;background-size: cover, cover;">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-40">
                <h3 class="heading__title">@lang('home.doktorlar')</h3>
                <p class="heading__desc">@lang('home.doktorlarnot')
                </p>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                @foreach($doktorlar as $d)
                <!-- Member #1 -->
                <div class="member">
                  <div class="member__img">
                    <img src="{{ asset('uploads/doktorlar/'.$d->resim.'') }}" alt="{{ $d->doktoradi }}" class="doktorresim">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="/doktor/{{ $d->dlink }}" title="{{ $d->doktoradi }}">{{ $d->doktorunvani }} {{ $d->doktoradi }}</a> 
                      <br><span class="color-dark fz-14">{{ $d->alanadi }}</span></h5>
                    <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                      <a href="/doktor/{{ $d->dlink }}" title="{{ $d->doktoradi }}" class="btn__secondary" style="padding:10px 5px;">
                        <span>@lang('home.profil')</span>
                      </a>
                      <ul class="social-icons list-unstyled mb-0">
                        <li><a href="https://randevu.bowerhospital.com" style="width:150px;padding:0px 10px;background:#004388;">@lang('home.randevual')</a></li>
                      </ul><!-- /.social-icons -->
                    </div>
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
                @endforeach
              </div><!-- /.carousel -->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Team -->
      @endif

    <!-- ========================
     Banner Layout 1
    =========================== -->
    <section class="banner-layout1 py-0 mt-40">
      <div class="bg-img"><img src="{{  asset('assets/images/backgrounds/8.jpg') }}" alt="backgrounds"></div>
      <div class="top-banner" style="background:#f4f4f4;">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <p class="font-weight-300 mb-0">
              </p>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.top-banner -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 pl-15" style="padding:50px 0px;">
            <div class="banner-text">
              <ul class="list-items list-items-layout2 list-items-light list-horizontal list-unstyled mb-50">
                <li>Online Randevu</li>
                <li>Doktora Sor</li>
                <li>e-Sonuçlar</li>
                <li>International Patients</li>
                <li>Görüş ve Önerileriniz</li>
                <li>Anlaşmalı Kurumlar</li>
                <li>Sponsorluklar</li>
                <li>İnsan Kaynakları</li>
                <li>Hasta Hakları</li>
                <li>Hekim Hakları</li>
              </ul>
              <div class="d-flex flex-wrap">
                <a href="https://randevu.bowerhospital.com" title="Bower Hospital e-Randevu" class="btn btn__white btn__rounded mr-30">
                  <span>Randevu Al</span> <i class="icon-arrow-right"></i>
                </a>
                <a href="/tr/iletisim" title="Bower Hospital iletişim" class="btn btn__white btn__outlined btn__rounded">
                  İletişim
                </a>
              </div>
            </div><!-- /.banner-text -->
            <div class="fancybox-layout3 pb-60 pl-15">
              <!-- fancybox item #1 -->
              <div class="fancybox-item d-flex">
                <div class="fancybox__icon">
                  <i class="icon-stethoscope"></i>
                </div><!-- /.fancybox__icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title pt-3 mb-0">Doğru Teşhis</h4>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #2 -->
              <div class="fancybox-item d-flex">
                <div class="fancybox__icon">
                  <i class="icon-microscope"></i>
                </div><!-- /.fancybox__icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title pt-3 mb-0">Doğru Tedavi</h4>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #3 -->
              <div class="fancybox-item d-flex">
                <div class="fancybox__icon">
                  <i class="icon-health-report"></i>
                </div><!-- /.fancybox__icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title pt-3 mb-0">Hızlı Sonuç</h4>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.fancybox-layout3 -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6 banner-img">
            <div class="bg-img">
              <img src="{{  asset('assets/images/backgrounds/bower_hospital.jpg') }}" alt="backgrounds">
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner Layout 1 -->
    <!-- ======================
     Work Process 
    ========================= -->
    <section style="background:#004388;border-top:6px solid #ddd;" class="work-process work-process-carousel pt-10 pb-0">
      <div class="cta">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <img src="{{  asset('assets/images/icons/alert.png') }}" alt="Bower Hospital">
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-7 col-lg-7">
              <h4 class="cta__title">Bizimle çalışmak istermisiniz ?</h4>
              <p class="cta__desc">Hastanemizde çalışmak için aşağıdaki linke tıklayarak başvuru formunu doldurmanız yeterli olacaktır. Başvurunuzun tarafımıza eksiksiz iletilmesi durumunda size en kısa sürede dönüş sağlanacaktır.
              </p>
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-3 col-lg-3">
              <a href="/tr/ik" title="Bower Hospital İnsan Kaynakları Başvuru Formu" class="btn btn__secondary btn__secondary-style2 btn__rounded mr-30">
                <span>Hemen Başvur</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.col-lg-3 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.cta -->
    </section><!-- /.Work Process -->
<!--
    <section class="services-layout1 services-carousel">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>

            </div>
          </div>
        </div>
      </div>
    </section>
        -->
  @endsection

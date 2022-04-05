@extends('web.layout.master')
@section('parentPageTitle', 'Doktor')
@section('title') {{$doktorlar[0]->doktorunvani}} {{$doktorlar[0]->doktoradi}} @endsection
  @section('content')
<!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout4">
      <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/doctor_banner_2.jpg') }}" alt="{{ $doktorlar[0]->doktorunvani }} {{ $doktorlar[0]->doktoradi }}"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex flex-wrap justify-content-end align-items-center">
            <div class="testimonials__rating mr-30">
              <div class="testimonials__rating-inner d-flex align-items-center">
                <div>
                  <h5 class="overall__rate">{{ $doktorlar[0]->doktorunvani }}</h5>
                  <h4>{{ $doktorlar[0]->doktoradi }}</h4>
                  <h6>{{ $doktorlar[0]->alanadi }}</h6>
                </div>
              </div><!-- /.testimonials__rating-inner -->
            </div><!-- /.testimonials__rating -->            
            <a href="{{ $ayarlar[0]->erandevu }}" title="@lang('home.randevual')" class="btn btn__white btn__rounded">@lang('home.randevual')</a>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="pt-60 pb-80">
      <div class="container">
        <div class="row" id="contentPageBox">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-right">
              <div class="widget widget-member shifted-top">
                <div class="member mb-0">
                  <div class="member__img">
                    <img src="{{ asset('uploads/doktorlar/'.$doktorlar[0]->resim.'') }}" alt="{{ $doktorlar[0]->doktoradi }}">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name">{{ $doktorlar[0]->doktorunvani }} {{ $doktorlar[0]->doktoradi }}</h5>
                    <p class="member__job">{{ $doktorlar[0]->alanadi }}</p>
                    <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                      <ul class="social-icons list-unstyled mb-0">
                        <li><a href="https://www.facebook.com/{{ $doktorlar[0]->facebook }}" class="facebook pt-0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.twitter.com/{{ $doktorlar[0]->twitter }}" class="twitter pt-0"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/{{ $doktorlar[0]->instagram }}" class="instagram pt-0"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/{{ $doktorlar[0]->linkedin }}" class="linkedin pt-0"><i class="fab fa-linkedin"></i></a></li>
                      </ul><!-- /.social-icons -->
                    </div>
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
              </div><!-- /.widget-member -->
              <div class="widget widget-help bg-overlay bg-overlay-secondary-gradient">
                <div class="bg-img"><img src="{{ asset('assets/images/banners/5.jpg')}}" alt="background"></div>
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-call2"></i>
                  </div>
                  <h4 class="widget__title">@lang('home.acilservis')</h4>
                    <a href="tel:{{ $ayarlar[0]->telefon }}" title="{{ $ayarlar[0]->telefon }}" class="phone__number">
                      <i class="icon-phone"></i> <span>{{ $ayarlar[0]->telefon }}</span>
                    </a>
                    <p class="color-white">@lang('home.acilservisnotu')
                    </p>
                    <a href="{{ route('home',app()->getLocale()) }}" class="btn btn__secondary btn__link btn__block">
                      <span>@lang('home.bizeulasin')</span> <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
              <div class="widget widget-reports">
                <a href="#" class="btn btn__primary btn__block">
                  <i class="icon-pdf-file"></i>
                  <span>@lang('home.katalog')</span>
                </a>
              </div>
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="text-block mb-50">
              <h5 class="text-block__title">@lang('home.ozgecmis')</h5>
              <p class="text-block__desc mb-20 font-weight-bold color-secondary">{!! $doktorlar[0]->ozgecmis !!}</p>
            </div><!-- /.text-block -->
            <ul class="details-list list-unstyled mb-60">
              <li>
                <h5 class="details__title">@lang('home.uzmanlik')</h5>
                <div class="details__content">
                  <p class="mb-0">{!! $doktorlar[0]->alanadi !!} </p>
                </div>
              </li>
              <li>
                <h5 class="details__title">@lang('home.egitim')</h5>
                <div class="details__content">
                  <ul class="list-items list-items-layout2 list-unstyled mb-0">
                    @foreach($egitim as $e)
                      <li><strong>{{ $e->universite }}</strong> / {{ $e->egitimyili }} / {{ $e->egitimadi }} / {{ $e->sehir }}</li>
                    @endforeach
                  </ul>
                </div>
              </li>
              <li>
                <h4 class="details__title">@lang('home.kurslar')</h4>
                <div class="details__content">
                  <ul class="list-items list-items-layout2 list-unstyled mb-0">
                    @foreach($kurslar as $e)
                      <li>{{ $e->kursadi }}</li>
                    @endforeach
                  </ul>
                </div>
              </li>           
            </ul>
            <div class="text-block mb-50">
              <h5 class="details__title">@lang('home.derece')</h5>
            </div><!-- /.text-block -->
            <div class="fancybox-layout2">
              <div class="row">
                @foreach($oduller as $e)
                <div class="col-sm-6">
                  <!-- fancybox item #1 -->
                  <div class="fancybox-item d-flex">
                    <div class="fancybox__icon">
                      <i class="icon-diploma"></i>
                    </div><!-- /.fancybox__icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">{{ $e->oduladi }}</h4>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-sm-6 -->                  
                @endforeach
              </div><!-- /.row -->
            </div><!-- /.fancybox-layout2 -->
            <div class="text-block mb-40">
              <h5 class="details__title">@lang('home.yaptigigorevler')</h5>
            </div><!-- /.text-block -->
            <div class="timeline-wrapper mb-60">
              @foreach($gorevler as $e)
              <!-- Timeline Item #1 -->
              <div class="timeline-item d-flex">
                <span class="timeline__year">{{ $e->gorevyili }}</span>
                <div class="timeline__body">
                  <h4 class="timeline__title">{{ $e->gorevyeri }}</h4>
                  <p class="timeline__desc mb-0">{{ $e->aciklama }}
                  </p>
                </div><!-- /.timeline__body -->
              </div><!-- /.timeline-item -->
              @endforeach
            </div><!-- /.timeline-wrapper -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

  @endsection      
@extends('web.layout.master')
@section('parentPageTitle', '')
@section('title') {{ $politikalar[0]->politikaadi }} @endsection
    @section('content')
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout2 bg-overlay text-center pb-0">
      <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/doctor_banner_2.jpg') }}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
            <div class="pagetitle__icon">
              <i class="icon-microscope"></i>
            </div>
            <p class="pagetitle__desc mb-30">
            </p>
            <a href="#content" class="scroll-down"><i class="fas fa-long-arrow-alt-down"></i></a>
          </div><!-- /.col-xl-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section id="content" class=" pb-80">
      <div class="container">
        <div class="row" id="contentPageBox">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="text-block mb-50">
              <p class="text-block__desc mb-20">{!! $politikalar[0]->aciklama !!}</p>
            </div><!-- /.text-block -->
            <!-- ======================
                 Team
             ========================= -->
            <section class="team-layout2 pt-0 pb-30">
              <div class="heading mb-40">
                <h3 class="heading__title">@lang('home.doktorlar')</h3>
                <p class="heading__desc">@lang('home.doktorlarnot')
                </p>
              </div><!-- /.heading -->
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                @foreach($doktorlar as $d)
                <!-- Member #1 -->
                <div class="member">
                  <div class="member__img">
                    <img src="{{ asset('uploads/doktorlar/'.$d->resim.'') }}" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="{{ app()->getLocale() }}/doktor/{{ $d->dlink }}" title="{{ $d->doktoradi }}">{{ $d->doktorunvani }} {{ $d->doktoradi }}</a></h5>
                    <p class="member__job">{{ $d->alanadi }}</p>
                  </div><!-- /.member-info -->
                </div><!-- /.member -->                  
                @endforeach
              </div><!-- /.carousel -->
            </section><!-- /.Team -->
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-left sticky-top">
              <div class="widget widget-services">
                <h5 class="widget__title"@lang('home.kategoriler')></h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    @foreach($politikalarlist as $pk)
                        <li><a href="{{ app()->getLocale() }}/{{ $pk->plink }}" title="{{ $pk->politikaadi }}"><span>{{ $pk->politikaadi }}</span><i class="icon-arrow-right"></i></a></li>
                    @endforeach
                  </ul>
                </div><!-- /.widget-content -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>


    @endsection      
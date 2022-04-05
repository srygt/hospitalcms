@extends('web.layout.master')
@section('parentPageTitle', 'Doktor Listesi')
@section('title', 'Doktorlarımız')
    @section('content')

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title pt-30 pb-1">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('web',app()->getLocale())}}" title="@lang('home.anasayfa')">@lang('home.anasayfa')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('home.doktorlar')</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>  
    <!-- ========================
        Team layout 3
    ========================== -->
    <section class="team-layout2 pt-20 pb-40">
      <div class="container">
        <div class="row" id="contentPageBox">         
          @if(!$doktorlar->isEmpty())
            @foreach($doktorlar as $d)   
            <!-- Member #1 -->
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="member">
                <div class="member__img">
                  <img src="{{ asset('uploads/doktorlar/'.$d->resim.'') }}" alt="{{ $d->doktoradi }}">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="/{{ app()->getLocale() }}/doktor/{{ $d->dlink }}" title="{{ $d->doktoradi }}">{{ $d->doktorunvani }} {{ $d->doktoradi }}</a></h5>
                  <p class="member__job">{{ $d->alanadi }}</p>
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="/{{ app()->getLocale() }}/doktor/{{ $d->dlink }}" title="{{ $d->doktoradi }}" class="btn__secondary" style="padding:10px 5px;">
                      <span>@lang('home.profil')</span>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="https://randevu.bowerhospital.com" style="width:120px;padding:0px 10px;background:#004388;">@lang('home.randevual')</a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
            </div><!-- /.col-lg-4 --> 
            @endforeach
          @else
          @lang('home.uyari')
          @endif            
        </div> <!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Team layout 3  -->

    @endsection      
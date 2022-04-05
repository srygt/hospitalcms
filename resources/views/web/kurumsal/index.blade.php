@extends('web.layout.master')
@section('parentPageTitle', 'Hakkımızda')
@section('title') {!! $hakkimizda[0]->baslik !!} @endsection
  @section('content')
  <section class="page-title pt-30 pb-1">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="{{route('web',app()->getLocale())}}" title="@lang('home.anasayfa')">@lang('home.anasayfa')</a></li>
              <li class="breadcrumb-item active" aria-current="page">{!! $hakkimizda[0]->baslik !!}</li>
            </ol>
          </nav>
        </div><!-- /.col-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>  
    <section id="content" class="pt-3 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div id="no-padding">
              <div class="mb-50">
                <div class="row" id="contentPageBox">
                <div class="col-sm-12 col-md-12 col-lg-9">
                  <div class="post__desc">
                    <p>{!! $hakkimizda[0]->aciklama !!}</p>
                  </div><!-- /.blog-desc -->
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                  <div class="widget widget-categories">
                    <h5 class="widget__title">@lang('home.menu')</h5>
                    <div class="widget-content">
                      <ul class="list-unstyled mb-0">
                        @foreach($hakkimizdalist as $h)
                        <li><a href="/{{ app()->getLocale() }}/kurumsal/{{ $h->hlink }}" title="{{ $h->baslik }}">{{ $h->baslik }}</a></li>                          
                        @endforeach
                      </ul>
                    </div><!-- /.widget-content -->
                  </div>                  
                </div><!-- /.col-lg-2 -->         
              </div><!-- /.text-block -->
            </div>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>    
  @endsection      
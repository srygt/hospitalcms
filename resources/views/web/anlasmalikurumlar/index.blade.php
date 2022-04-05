@extends('web.layout.master')
@section('parentPageTitle', 'Anlaşmalı Kurumlar')
@section('title', 'Anlaşmalı Kurumlar')
  @section('content')
  <section class="page-title pt-30 pb-1">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="{{route('web',app()->getLocale())}}" title="@lang('home.anasayfa')">@lang('home.anasayfa')</a></li>
              <li class="breadcrumb-item active" aria-current="page">@lang('home.anlasmalikurum')</li>
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
                    <div id="accordion" class="mb-70">
                      @if(!$anlasmalikurumlark->isEmpty())
                        @foreach($anlasmalikurumlark as $h)                        
                          <div class="accordion-item">
                            <div class="accordion__header" data-toggle="collapse" data-target="#kat{{ $h->id }}">
                              <a class="accordion__title" href="#">{{ $h->kategoriadi }}</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="kat{{ $h->id }}" class="collapse" data-parent="#accordion">
                              <div class="accordion__body">
                                <ul class="list-items list-items-layout2 list-unstyled pl-30 mb-0">
                                @foreach($anlasmalikurumlar as $a)
                                  @if($h->id==$a->katid)
                                    <li><p>{{ $a->kurumadi }}</p></li>
                                  @endif
                                @endforeach
                              </ul>
                              </div><!-- /.accordion-item-body -->
                            </div>
                          </div><!-- /.accordion-item -->
                        @endforeach
                      @else
                        @lang('home.uyari')
                      @endif
                    </div><!-- /#accordion -->                    
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                  <div class="widget widget-categories">
                    <h5 class="widget__title">@lang('home.menu')</h5>
                    <div class="widget-content">
                      <ul class="list-unstyled mb-0">
                        <li><a href="/{{ app()->getLocale() }}/duyurular" title="@lang('home.duyurular')">@lang('home.duyurular')</a></li>
                        <li><a href="/{{ app()->getLocale() }}/kurumsal/hakkimizda" title="@lang('home.hakkimizda')">@lang('home.hakkimizda')</a></li>
                        <li><a href="/{{ app()->getLocale() }}/kurumsal/vizyon-misyon" title="@lang('home.misyon')">@lang('home.misyon')</a></li>
                        <li><a href="/{{ app()->getLocale() }}/sponsorluklar" title="@lang('home.sponsor')">@lang('home.sponsor')</a></li>
                        <li><a href="/{{ app()->getLocale() }}/anlasmalikurumlar" title="@lang('home.anlasmalikurum')">@lang('home.anlasmalikurum')</a></li>
                        <li><a href="/{{ app()->getLocale() }}/politika/kvkk-metni" title="@lang('home.kvkk')">@lang('home.kvkk')</a></li>
                        <li><a href="/{{ app()->getLocale() }}/iletisim" title="@lang('home.iletisim')">@lang('home.iletisim')</a></li>    
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
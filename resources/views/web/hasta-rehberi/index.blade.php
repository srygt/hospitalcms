@extends('web.layout.master')
@section('parentPageTitle', 'Hasta Rehberi')
@section('title', 'Hasta Rehberi')
  @section('content')
  <section class="page-title pt-30 pb-1">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="{{route('web',app()->getLocale())}}" title="@lang('home.anasayfa')">@lang('home.anasayfa')</a></li>
              <li class="breadcrumb-item active" aria-current="page">@lang('home.hastarehberi')</li>
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
                  @if(!$hastarehberi->isEmpty())
                    @foreach($hastarehberi as $h)
                      <div class="col-md-4 mt-30 hastaRehberi">
                        <a href="/{{ app()->getLocale() }}/{{ $h->rlink }}" title="{{ $h->baslik }}" class="pl-30 pr-30 pt-30 pb-30">
                            <span>{{ $h->baslik }}</span>
                        </a>
                      </div>
                    @endforeach
                  @else
                  @lang('home.uyari')
                  @endif
                </div>
              </div><!-- /.text-block -->
            </div>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>    
  @endsection      
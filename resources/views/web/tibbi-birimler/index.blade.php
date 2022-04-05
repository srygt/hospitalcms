@extends('web.layout.master')
@section('parentPageTitle', 'Tibbi Birimler')
@section('title', 'Tibbi Birimler')
  @section('content')
  <section class="page-title pt-30 pb-1">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="{{route('web', app()->getLocale())}}" title="@lang('home.anasayfa')">@lang('home.anasayfa')</a></li>
              <li class="breadcrumb-item active" aria-current="page">@lang('home.tibbibirimler')</li>
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
            <div id="contentPageBox no-padding">
              <div class="mb-50">
                <div class="row" id="contentPageBox">
					@foreach($tibbibirim as $v)
					  <div class="col-sm-6 col-md-6 col-lg-3">
						<div class="feature-item">
						  <div class="feature__content">
							<div class="feature__icon">
							  <img src="{{ asset('uploads/tibbibirimler/'.$v->resim.'') }}" alt="{{ $v->birimadi }}">
							</div>
							<h4 class="feature__title">{{ $v->birimadi}}</h4>
						  </div><!-- /.feature__content -->
						  <a title="{{$v['birimadi']}}" href="/{{ app()->getLocale() }}/tibbi-birimler/{{$v['tlink']}}" class="btn__link">
							<i class="icon-arrow-right icon-outlined"></i>
						  </a>
						</div><!-- /.feature-item -->
					  </div><!-- /.col-lg-3 -->
 					@endforeach
                </div>
              </div><!-- /.text-block -->
            </div>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>    
  @endsection      
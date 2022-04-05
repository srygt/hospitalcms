<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" ng-app="bowerhospital">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/favicon/favicon.png') }}" type="image/x-icon"> <!-- Favicon-->
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="description" content="@yield('meta_description', config('app.name')), {{ $ayarlar[0]->description }}">
    <meta name="author" content="Matgis Yazilim www.matgis.com.tr support@matgis.com.tr">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://www.bowerhospital.com/" />
    <meta name="google-site-verification" content="{{ $ayarlar[0]->verification }}">
    <link rel="alternate" href="https://www.bowerhospital.com/en" hreflang="en" />
    <link rel="alternate" href="https://www.bowerhospital.com/ar" hreflang="ar" />
    <link rel="alternate" href="https://www.bowerhospital.com/ku" hreflang="ku" />
    <link rel="alternate" href="https://www.bowerhospital.com/za" hreflang="za" />
    <link rel="alternate" href="https://www.bowerhospital.com/tr" hreflang="tr" />
    <link rel="alternate" href="https://www.bowerhospital.com" hreflang="x-default" />
    <meta property="og:type" content="og:website" />
    <meta property="og:site_name" content="{{ $ayarlar[0]->siteadi }}" />
    <meta property="og:title" content="{{ $ayarlar[0]->siteadi }}" />
    <meta property="og:description" content="{{ $ayarlar[0]->siteadi }}, {{ $ayarlar[0]->description }}" />
    <meta property="og:url" content="https://www.bowerhospital.com/" />
    <meta property="og:image" content="https://www.bowerhospital.com/assets/images/logo/logo-dark.png" />
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="250" />
    <meta property="og:image:secure" content="https://www.bowerhospital.com/assets/images/logo/logo-dark.png" />
    <meta property="og:image:secure_url" content="https://www.bowerhospital.com/assets/images/logo/logo-dark.png" />
    <meta property="article:author" content="{{ $ayarlar[0]->siteadi }}" />
    <meta property="fb:app_id" content="facebookid" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@{{ $ayarlar[0]->twitter }}">
    <meta name="twitter:title" content="{{ $ayarlar[0]->siteadi }}">
    <meta name="twitter:description" content="{{ $ayarlar[0]->siteadi }}, {{ $ayarlar[0]->description }}">
    <meta name="twitter:creator" content="https://www.bowerhospital.com">
    <meta name="twitter:image" content="https://www.bowerhospital.com/assets/images/logo/logo-dark.png">    
    @yield('meta')
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    @includeIf('web.layout.partials.css')
</head>
<body>

    <div class="page-wrapper compact-sidebar" id="pageWrapper">
      <!-- Page Header Start-->
      @includeIf('web.layout.partials.header')
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        @include('web.layout.partials.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <!-- Container-fluid starts-->
            @yield('content')
            <!-- Container-fluid Ends-->
          </div>
    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer mt-0" style="border-top:6px solid #ddd;overflow: hidden;position: relative;background-color: #0096d5;background-size: cover, cover;">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-3">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">@lang('home.hastarehberi')</h6>
                <nav>
                  <ul class="list-unstyled">
                    @foreach($politikalarlist as $p)
                      <li>
                        <a href="/{{ app()->getLocale() }}/sozlesmeler/{{ $p->plink }}" title="{{ $p->politikaadi }}">{{ $p->politikaadi }}</a>
                      </li>                      
                    @endforeach
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-4 col-md-4 col-lg-3">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">@lang('home.kurumsal')</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="/{{ app()->getLocale() }}/duyurular" title="@lang('home.duyurular')">@lang('home.duyurular')</a></li>
                    <li><a href="/{{ app()->getLocale() }}/kurumsal/hakkimizda" title="@lang('home.hakkimizda')">@lang('home.hakkimizda')</a></li>
                    <li><a href="/{{ app()->getLocale() }}/kurumsal/vizyon-misyon" title="@lang('home.misyon')">@lang('home.misyon')</a></li>
                    <li><a href="/{{ app()->getLocale() }}/sponsorluklar" title="@lang('home.sponsor')">@lang('home.sponsor')</a></li>
                    <li><a href="/{{ app()->getLocale() }}/anlasmalikurumlar" title="@lang('home.anlasmalikurum')">@lang('home.anlasmalikurum')</a></li>
                    <li><a href="/{{ app()->getLocale() }}/sozlesmeler/kvkk-politikasi" title="@lang('home.kvkk')">@lang('home.kvkk')</a></li>
                    <li><a href="/{{ app()->getLocale() }}/iletisim" title="@lang('home.iletisim')">@lang('home.iletisim')</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->            
            <div class="col-sm-4 col-md-4 col-lg-2">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">@lang('home.onlineislem')</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="{{ $ayarlar[0]->erandevu }}" title="@lang('home.erandevu')">@lang('home.erandevu')</a></li>
                    <li><a href="{{ $ayarlar[0]->etetkiksonuc }}" title="@lang('home.esonuc')">@lang('home.esonuc')</a></li>
                    <li><a href="{{ $ayarlar[0]->etetkikgoruntu }}" title="@lang('home.tetkikgoruntu')">@lang('home.tetkikgoruntu')</a></li>
                    <li><a href="{{ $ayarlar[0]->drtetkiksonuc }}" title="@lang('home.drtetkik')">@lang('home.drtetkik')</a></li>
                    <li><a href="/tr/ik" title="@lang('home.isbasvuru')">@lang('home.isbasvuru')</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="footer-widget-contact">
                <h2 class="footer-widget__title color-heading">@lang('home.cagrimerkezi')</h2>
                <ul class="contact-list list-unstyled">
                  <li>
                    <a href="tel:{{ $ayarlar[0]->telefon }}" title="{{ $ayarlar[0]->telefon }}" class="phone__number">
                      <i class="icon-phone"></i> <span>{{ $ayarlar[0]->telefon }}</span>
                    </a>
                  </li>
                  <li>
                    <a href="tel:{{ $ayarlar[0]->whatsapp }}" title="{{ $ayarlar[0]->whatsapp }}" class="phone__number">
                      <i class="fab fa-whatsapp"></i> <span>{{ $ayarlar[0]->whatsapp }}</span>
                    </a>
                  </li>
                  
                  <li class="color-body">{{ $ayarlar[0]->adres }}</li>
                </ul>
                <div class="d-flex align-items-center">
                  <a href="{{ route('web.iletisim.index',app()->getLocale()) }}" class="btn__link mr-30">
                    <i class="icon-arrow-right"></i> <span>@lang('home.sosyalhesaplar')</span>
                  </a>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="https://www.facebook.com/{{ $ayarlar[0]->facebook }}" class="pt-10"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/{{ $ayarlar[0]->instagram }}" class="pt-10"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.twitter.com/{{ $ayarlar[0]->twitter}}" class="pt-10"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.youtube.com/{{ $ayarlar[0]->youtube}}" class="pt-10"><i class="fab fa-youtube"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <p style="text-align:center;"><img src="{{asset('assets/images/logo/logo-light.png')}}" class="logo-light" width="220" alt="{{ $ayarlar[0]->siteadi }}"><br>
              <span class="fz-14" style="color:#fff;text-align:center;">&copy; <?=date("Y")?> @lang('home.copyrigth')</span></p>
              <p style="text-align: center;padding-top:15px;color:#fff;font-size:12px;">Software : <a class="fz-14 color-primary pull-right" href="https://www.matgis.com.tr" title="Matgis Yazılım"><img src="https://www.matgis.com.tr/upload/images/logo.png" width="90" alt="Matgis Yazılım"></a></p>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
    
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i>
      <div class="fixed-edge-buttons">
      <ul>
        <li><a class="phone" href="tel:{{ $ayarlar[0]->telefon }}">{{ $ayarlar[0]->telefon }}</a></li>
        <div class="clear"></div>
      </ul>
    </div>  
    </button>
  </div><!-- /.wrapper -->

  
<!-- Modal -->
<div id="tetkikSonuc" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xs">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
		  <div class="row">
			  <div class="col-md-6"><a href="https://enabiz.gov.tr/" style="width:100%;" class="btn btn-success" title="e-Nabız">e-Nabız</a></div>
			  <div class="col-md-6"><a href="https://tetkik.bowerhospital.com" style="width:100%;" class="btn btn-primary" title="e-Tetkik">e-Tetkik</a></div>
		  </div>
      </div>
    </div>
  </div>
</div>  
      <!-- latest jquery-->
      @includeIf('web.layout.partials.js')
</body>
</html>

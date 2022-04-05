<nav class="navbar navbar-expand-lg sticky-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('web',app()->getLocale())}}" title="@lang('home.anasayfa')">
        <img src="{{asset('assets/images/logo/logo-light.png')}}" class="logo-light" width="330" alt="{{ $ayarlar[0]->siteadi }}">
        <img src="{{asset('assets/images/logo/logo-dark.png')}}" class="logo-dark" width="330" alt="{{ $ayarlar[0]->siteadi }}">
      </a>
      <button class="navbar-toggler" type="button">
        <span class="menu-lines"><span></span></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavigation">
     
        <ul class="navbar-nav ml-auto">
          <li class="mobileMenu">
            <a href="{{route('web',app()->getLocale())}}" title="@lang('home.anasayfa')">
              <img src="{{asset('assets/images/logo/logo-dark.png')}}" class="pl-30 pb-30" width="200" alt="{{ $ayarlar[0]->siteadi }}">
            </a>               
          </li>
          @foreach($sitemenu as $s)
          <li class="nav__item has-dropdown">
            <a class="dropdown-toggle nav__item-link"
            href="/{{ app()->getLocale() }}/{{ $s->mlink }}"
             @if (app()->getLocale() == $s->dilid) @endif lang="tr">{{ strtoupper($s->baslik) }}</a>            
          </li><!-- /.nav-item -->
          @endforeach
          <li class="nav__item">
            <a lang="tr" href="{{ route('web.iletisim.index', app()->getLocale()) }}" class="nav__item-link">@lang('home.iletisim')</a>
          </li><!-- /.nav-item -->
          <li class="mobileMenu">
            <a href="#" title="International Patients" style="color:#d20a10;padding-left:15px;"><i class="fa fa-globe"></i> International Patients</a>            
          </li>
        </ul><!-- /.navbar-nav -->
        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
      <div class="d-none d-xl-flex align-items-center position-relative ml-30">
        <a href="#" title="International Patients" style="color:#d20a10;"><i class="fa fa-globe"></i> International Patients</a>
        <div class="selectpicker btn__rounded pl-20 pr-10 pt-0 mr-20 pb-0 ml-2 mt-0" data-width="fit" id="google_translate_element"></div>
          <script type="text/javascript">
              function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'tr', 
                  includedLanguages: 'ar,ku,en,tr',
                  layout:     google.translate.TranslateElement.InlineLayout.SIMPLE,
                  autoDisplay: false,}, 'google_translate_element');}
          </script>
          <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>               
        </div>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navabr -->
</header><!-- /.Header -->

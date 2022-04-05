@extends('web.layout.master')
@section('parentPageTitle', 'İletişim Alanı')
@section('title') @lang('home.iletisim') @endsection
    @section('content')
  <!-- ========================= 
            Google Map
    =========================  -->
    <section class="google-map py-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2553.261133993644!2d40.234463797181654!3d37.917070777067494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4075203c1c1a10c3%3A0x5bff122c47f65061!2s%C3%96zel%20Bower%20Hospital!5e0!3m2!1str!2str!4v1643115196135!5m2!1str!2str" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section><!-- /.GoogleMap -->
  
      <!-- ==========================
          contact layout 1
      =========================== -->
      <section class="contact-layout1 pt-0 mt--100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="contact-panel d-flex flex-wrap">
                <form class="contact-panel__form" method="post" action="{{ route('web.iletisim.send') }}" id="contactForm">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="contact-panel__title">@lang('home.iletisimformu') </h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <i class="icon-user form-group-icon"></i>
                        <input type="text" class="form-control" placeholder="@lang('home.adi')" id="contact-name" name="name"
                          required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <i class="icon-email form-group-icon"></i>
                        <input type="email" class="form-control" placeholder="@lang('home.email')" id="contact-email"
                          name="email" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <i class="icon-phone form-group-icon"></i>
                        <input type="text" class="form-control" placeholder="@lang('home.telefon')" id="contact-Phone"
                          name="phone" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <i class="icon-news form-group-icon"></i>
                        <select class="form-control" name="subject" id="contact-Subject" required>
                          <option value="">@lang('home.konu')</option>
                          <option value="Fiyat Sor">@lang('home.fiyatsor')</option>
                          <option value="Şikayet">@lang('home.sikayet')</option>
                          <option value="Talep ve Öneri">@lang('home.talep')</option>
                          <option value="Teknik Sorun">@lang('home.teknik')</option>
                          <option value="Teşekkür">@lang('home.tesekkur')</option>
                        </select>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-12">
                      <div class="form-group">
                        <i class="icon-alert form-group-icon"></i>
                        <textarea class="form-control" placeholder="@lang('home.mesaj')" id="contact-message"
                          name="message"></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-1"><input type="checkbox" class="form-control" name="contact-Checkbox" placeholder=""></div>
                        <div class="col-md-11">@lang('home.sozlesme')</div>                      
                      </div>
                      <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                        <span>@lang('home.gonder')</span> <i class="icon-arrow-right"></i>
                      </button>
                      <div class="contact-result"></div>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                </form>
                <div
                  class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-default-gradient">
                    <h4 class="contact-panel__title color-dark">@lang('home.iletisimbilgi')</h4>
                  <div>
                    <ul class="contact__list list-unstyled">
                      <li style="float:left;">
                        <a href="tel:{{ $ayarlar[0]->telefon }}" title="{{ $ayarlar[0]->telefon }}"><button class="btn btn-info" style="justify-content: left;"><i class="fa fa-phone"></i> {{ $ayarlar[0]->telefon }}</button></a>
                      </li>
                      <li style="float:left;margin-left:5px;">
                        <a href="tel:{{ $ayarlar[0]->fax }}" title="{{ $ayarlar[0]->fax }}"><button class="btn btn-info" style="justify-content: left;"><i class="fa fa-fax"></i> {{ $ayarlar[0]->fax }}</button></a>
                      </li>
                      <li style="float:left;">
                        <a href="tel:{{ $ayarlar[0]->gsm }}" title="{{ $ayarlar[0]->gsm }}"><button class="btn btn-info" style="justify-content: left;"><i class="fa fa-mobile"></i> {{ $ayarlar[0]->gsm }}</button></a>
                      </li>     
                      <li style="float:left;margin-left:5px;">
                        <a href="https://api.whatsapp.com/send?text={{ $ayarlar[0]->whatsapp }}" title="{{ $ayarlar[0]->gsm }}"><button class="btn btn-success" style="justify-content: left;"><i class="fab fa-whatsapp"></i> {{ $ayarlar[0]->gsm }}</button></a>
                      </li> 
                      <li>
                        <a href="{{ $ayarlar[0]->web }}" title="{{ $ayarlar[0]->web }}"><button class="btn btn-default" style="justify-content: left;"><i class="fa fa-globe"></i> {{ $ayarlar[0]->web }}</button></a>
                      </li>  						
                      <li>
                        <a href="mailto:{{ $ayarlar[0]->email }}" title="{{ $ayarlar[0]->email }}"><button class="btn btn-default" style="justify-content: left;"><i class="fa fa-envelope"></i> {{ $ayarlar[0]->email }}</button></a>
                      </li>                                                                                      
                      <li class="color-dark">
                        <i class="icon-location"></i> {{ $ayarlar[0]->adres }}
                      </li>
                    </ul>
                    <div class="d-flex">
                      <a href="{{ route('web.iletisim.index') }}" class="btn__link">
                        <i class="icon-arrow-right"></i> <span>@lang('home.sosyalhesaplar')</span>
                      </a>
                      <ul class="social-icons list-unstyled mb-0 ml-40">
                        <li><a href="https://www.facebook.com/{{ $ayarlar[0]->facebook }}" title="{{ $ayarlar[0]->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/{{ $ayarlar[0]->instagram }}" title="{{ $ayarlar[0]->instagram }}"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.twitter.com/{{ $ayarlar[0]->twitter}}" title="{{ $ayarlar[0]->twitter }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/{{ $ayarlar[0]->youtube}}" title="{{ $ayarlar[0]->youtube }}"><i class="fab fa-youtube"></i></a></li>
                      </ul><!-- /.social-icons -->
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 1 -->
    @endsection      
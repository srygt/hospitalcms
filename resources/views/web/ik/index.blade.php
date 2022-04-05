@extends('web.layout.master')
@section('parentPageTitle', '')
@section('title') @lang('home.ik') @endsection
    @section('content')
      <!-- ========================
        page title 
      =========================== -->
      <section class="page-title pt-30 pb-1">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb mb-20">
                  <li class="breadcrumb-item"><a href="{{route('web',app()->getLocale())}}" title="@lang('home.anasayfa')">@lang('home.anasayfa')</a></li>
                  <li class="breadcrumb-item active" aria-current="page">@lang('home.ik')</li>
                </ol>
              </nav>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section>  
      <!-- ======================
        Blog Single
      ========================= -->
      <section class="blog blog-single pt-0 pb-80">
     
        <div class="container">
          <div class="row"  id="contentPageBox">              
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="h-100 h-custom">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                      @if ($errors->any() || session()->has('message'))
                        <div class="col-sm-12" id="messages">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message')}}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                      @endif     
                      <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                          <div class="row g-0">
                            <div class="col-lg-12">
                              <div class="p-3">
                                  <form  class="contact-panel__form" id="contactIkForm" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <h5 class="fw-normal mb-5" style="color: #0096d5;"><i class="fa fa-bookmark"></i> @lang('home.kisisel')</h5>
                                  <hr>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon">*</i>
                                        <select class="form-control" name="basvurutipi" id="basvurutipi" required>
                                            <option value="İş Başvurusu">İş Başvurusu</option>
                                            <option value="Üniversite Öğrenci Stajı">Üniversite Öğrenci Stajı</option>
                                            <option value="Lise Öğrenci Stajı">Lise Öğrenci Stajı</option>
                                        </select>
                                      </div>              
                                    </div>                                    
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon">*</i>
                                        <select class="form-control" name="bolumid" id="bolumid" required>
                                          <option value="">Bölüm Seç</option>
                                          @foreach($bolumler as $b)
                                            <option value="{{ $b->id }}">{{ $b->bolumadi }}</option>
                                          @endforeach
                                      </select>
                                      </div>              
                                    </div>                                    
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon">*</i>
                                        <input type="text" class="form-control" placeholder="@lang('home.ikadi')" id="contact-name"
                                          name="adi" required>
                                      </div>              
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon">*</i>
                                        <input type="text" class="form-control" placeholder="@lang('home.iksoyadi')" id="contact-surname"
                                          name="soyadi" required>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon">*</i>
                                        <input type="text" class="form-control" placeholder="@lang('home.email')" id="contact-email"
                                          name="email" required>
                                      </div>              
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon">*</i>
                                        <input type="text" class="form-control" placeholder="@lang('home.telefon')" id="contact-Phone"
                                          name="telefon" required>
                                      </div>
                                    </div>
                                  </div>     
                                  <div class="mb-4">
                                    <div class="form-group">
                                        <i class="form-group-icon">*</i>
                                      <input type="text" class="form-control" placeholder="@lang('home.adres')" id="contact-addresse"
                                        name="adres" required>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon">*</i>
                                        <input type="text" class="form-control" placeholder="@lang('home.postakodu')" id="contact-postcode"
                                          name="postakodu">
                                      </div>                                                  
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon">*</i>
                                        <input type="text" class="form-control" placeholder="@lang('home.sehir')" id="contact-city"
                                          name="sehir" required>
                                      </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="row pl-0 pr-0">
                                        <div class="col-md-3 form-group">
                                        <i class="form-group-icon">*</i>
                                          <select class="form-control" name="gun" id="day" required>
                                            <option value="">Gün Seç</option>
                                            @for($i = 1; $i <= 31; $i++)
                                              <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                          </select>
                                        </div> 
                                        <div class="col-md-6 form-group">
                                        <i class="form-group-icon">*</i>
                                          <select class="form-control" name="ay" id="month" required>
                                            <option value="">Ay Seç</option>
                                            <option value="Ocak">Ocak</option>
                                            <option value="Şubat">Şubat</option>
                                            <option value="Mart">Mart</option>
                                            <option value="Nisan">Nisan</option>
                                            <option value="Mayıs">Mayıs</option>
                                            <option value="Haziran">Haziran</option>
                                            <option value="Temmuz">Temmuz</option>
                                            <option value="Ağustos">Ağustos</option>
                                            <option value="Eylül">Eylül</option>
                                            <option value="Ekim">Ekim</option>
                                            <option value="Kasım">Kasım</option>
                                            <option value="Aralık">Aralık</option>
                                          </select>
                                        </div> 
                                        <div class="col-md-3 form-group">
                                        <i class="form-group-icon">*</i>
                                          <input type="text" class="form-control" placeholder="@lang('home.yil')" id="contact-year"
                                            name="yil" required>
                                        </div>                                                                             
                                      </div>
                                    </div>           
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <i class="form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="@lang('home.dyeri')" id="contact-birthplace"
                                          name="dogumyeri">
                                      </div>   
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="@lang('home.ehliyet')" id="contact-drivercard"
                                          name="ehliyet">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon">*</i>
                                        <select class="form-control" name="cinsiyet" id="gender" required>
                                          <option value="">Cinsiyet Seç</option>
                                          <option value="Erkek">Erkek</option>
                                          <option value="Kadın">Kadın</option>
                                        </select>
                                      </div>
                                    </div>  
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="@lang('home.askerlik')" id="contact-military"
                                          name="askerlik">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon"></i>
                                          <select class="form-control" name="medenidurumu" id="marriedstatus">
                                            <option value="">@lang('home.medenidurum')</option>
                                            <option value="Evli">Evli</option>
                                            <option value="Bekar">Bekar</option>
                                            <option value="Diğer">Diğer</option>
                                          </select>                                          
                                      </div>
                                    </div>  
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="@lang('home.linkedin')" id="contact-linkedin"
                                          name="linkedin">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="@lang('home.website')" id="contact-website"
                                          name="website">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon"></i>
                                        <textarea class="form-control" placeholder="@lang('home.profil')" name="profili" rows="3"></textarea>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon"></i>
                                        <textarea class="form-control" placeholder="@lang('home.basarilar')" name="basarilari" rows="3"></textarea>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon"></i>
                                        <textarea class="form-control" placeholder="@lang('home.yayinlar')" name="yayinlar" rows="3"></textarea>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <i class="form-group-icon"></i>
                                        <textarea class="form-control" placeholder="@lang('home.ozelbolum')" name="ozelbolum" rows="3"></textarea>
                                      </div>
                                    </div>                                                                                                                                     
                                    <div class="form-check d-flex justify-content-start mb-4 pb-3 ml-30">
                                      <input class="form-check-input" type="checkbox" value="1" name="kvkk" checked/>
                                      <label class="form-check-label" for="form2Example3">
                                        Başvuru yapmadan önce lütfen <a href="#!"><u>Başvuru Sözleşmesini</u></a> okuyunuz.
                                        Kişisel Verilerin İşlenmesi Onay Formu onaylıyorum   <hr>                                   
                                      <button type="submit" class="btn btn-success ml-0" data-mdb-ripple-color="dark">@lang('home.kayitolustur')</button>
                                      </label>
                                    </div>
                                  </div>  
                                </form>  
                                <div class="contact-result"></div>                                                                     
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>              
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.blog Single -->    
    @endsection      
    @section('page-script')
      <script>
        var contactIkForm = $("#contactIkForm"),
        contactResult = $('.contact-result');
        contactIkForm.validate({
          debug: false,
          submitHandler: function (contactIkForm) {
              $(contactResult, contactIkForm).html('Lütfen Bekleyiniz...');
              $.ajax({
                  type: "POST",
                  url: {{ route('web.ik.kaydet') }},
                  data: $(contactIkForm).serialize(),
                  timeout: 20000,
                  success: function (msg) {
                      $(contactResult, contactIkForm).html('<div class="alert alert-success" role="alert"><strong>Kayıt İşlemi Başarılı.Lütfen bekleyin.</strong></div>').delay(3000).fadeOut(2000);
                  },
                  error: $('.thanks').show()
              });
              return false;
          }
        });
      </script>
    @stop

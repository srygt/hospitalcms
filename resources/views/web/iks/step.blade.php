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
              <!-- Eğitim -->
              <button data-toggle="collapse" class="btn btn-default mb-30" style="width:100%;justify-content:left;background:#404f9f;color:#fff;" data-target="#egitimnitelik"><i class="fa fa-graduation-cap"></i> <strong>Eğitim ve Nitelikler</strong></button>
              <div id="egitimnitelik" class="collapse" style="border:1px solid #ddd;padding:25px 20px 10px 20px;">
                <div class="row">
                  <div class="col-sm-12">
                      <form  class="contact-panel__form" id="contactIkEgitimForm" method="post" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <div class="form-group">
                            <label for="contact-aciklama">Ödül ve Dereceler</label>
                            <input type="text" class="form-control" placeholder="Ödül ve Dereceler" id="contact-derece" name="derece">
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <div class="form-group">
                            <label for="contact-aciklama">Şehir</label>
                            <input type="text" class="form-control" placeholder="Şehir" id="contact-sehir"
                              name="sehir">
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <div class="form-group">
                            <label for="contact-aciklama">Okulu</label>
                            <input type="text" class="form-control" placeholder="Okulu" id="contact-okul"
                              name="okul">
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="form-group">
                            <label for="contact-aciklama">Başlangıç Ayı</label>
                            <select class="form-control" name="baslangicayi" id="contact-baslangicayi">
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
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="form-group">
                            <label for="contact-aciklama">Başlangıç Yılı</label>
                            <select class="form-control" name="baslangicyili" id="contact-baslangicyili">
                              <option value="">Yıl Seç</option>
                              @for($i = 1960; $i < 2035; $i++)
                                <option value="{{ $i }}" @if(date('Y')==$i) selected="selected" @endif>{{ $i }}</option>
                              @endfor
                            </select>
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="form-group">
                            <label for="contact-aciklama">Bitiş Ayı</label>
                            <select class="form-control" name="bitisayi" id="contact-bitisayi">
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
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="form-group">
                            <label for="contact-aciklama">Bitiş Yılı</label>
                            <select class="form-control" name="bitisyili" id="contact-bitisyili">
                              <option value="">Yıl Seç</option>
                              @for($i = 1960; $i < 2035; $i++)
                                <option value="{{ $i }}" @if(date('Y')==$i) selected="selected" @endif>{{ $i }}</option>
                              @endfor
                            </select>
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <div class="form-group">
                            <label for="contact-aciklama">Açıklama</label>
                            <textarea id="contact-aciklama" class="form-control" name="tanim" rows="5" placeholder="Açıklama"></textarea>
                          </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <input type="hidden" class="form-control" value="{{ $ik[0]->id }}" id="contact-ikid" name="ikid">
                          <button type="submit" class="btn btn__secondary">
                            <span>Kayıt Oluştur <i class="icon-arrow-right"></i>
                          </button>
                          <div class="contact-result"></div>
                        </div><!-- /.col-lg-12 -->
                      </div><!-- /.row -->
                    </form>
                  </div>
                  <div class="col-md-12">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Ödül ve Dereceler</th>
                          <th>Şehir</th>
                          <th>Okulu</th>
                          <th>Başlangıç Tarihi</th>
                          <th>Bitiş Tarihi</th>
                          <th>Açıklama</th>
                          <th>İşlem</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($egitimnitelik as $en)
                          <tr>
                            <td>{{ $en->id }}</td>
                            <td>{{ $en->derece }}</td>
                            <td>{{ $en->sehir }}</td>
                            <td>{{ $en->okul }}</td>
                            <td>{{ $en->baslangicayi }} / {{ $en->baslangicyili }}</td>
                            <td>{{ $en->bitisayi }} / {{ $en->bitisyili }}</td>
                            <td>{{ $en->tanim }}</td>
                            <td>{{ $en->id }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>     
              <!-- /.Eğitim -->
              <!-- İş Alanları --> 
              <button data-toggle="collapse" class="btn btn-default" style="width:100%;justify-content:left;" data-target="#ilgialanlari"><i class="fa fa-cube"></i> <strong>İlgi Alanları</strong></button>
              <div id="ilgialanlari" class="collapse">
                İlgi Alanları
              </div>           
              <!-- /.İş Alanları -->
              <!-- Referanslar --> 
              <button data-toggle="collapse" class="btn btn-default" style="width:100%;justify-content:left;" data-target="#referanslar"><i class="fa fa-braille"></i> <strong>Referanslar</strong></button>
              <div id="referanslar" class="collapse">
                Referanslar
              </div>           
              <!-- /.Referanslar -->
              <!-- Beceriler --> 
              <button data-toggle="collapse" class="btn btn-default" style="width:100%;justify-content:left;" data-target="#beceriler"><i class="fa fa-cubes"></i> <strong>Beceriler</strong></button>
              <div id="beceriler" class="collapse">
                Beceriler
              </div>           
              <!-- /.Beceriler -->
              <!-- İş deneyimi --> 
              <button data-toggle="collapse" class="btn btn-default" style="width:100%;justify-content:left;" data-target="#isdeneyimi"><i class="fa fa-book"></i> <strong>İş deneyimi</strong></button>
              <div id="isdeneyimi" class="collapse">
                İş deneyimi
              </div>           
              <!-- /.İş deneyimi -->
              <!-- Diller --> 
              <button data-toggle="collapse" class="btn btn-default" style="width:100%;justify-content:left;" data-target="#diller"><i class="fa fa-flag"></i> <strong>Diller</strong></button>
              <div id="diller" class="collapse">
                Diller
              </div>           
              <!-- /.İDiller -->
              <!-- Kurslar --> 
              <button data-toggle="collapse" class="btn btn-default" style="width:100%;justify-content:left;" data-target="#kurslar"><i class="fa fa-id-badge"></i> <strong>Kurslar</strong></button>
              <div id="kurslar" class="collapse">
                Kurslar
              </div>           
              <!-- /.Kurslar -->
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.blog Single -->    
    @endsection 
    @section('page-script')
      <script>
        var contactIkEgitimForm = $("#contactIkEgitimForm"),
        contactResult = $('.contact-result');
        alert("text");
        contactIkEgitimForm.validate({
          debug: false,
          submitHandler: function (contactIkEgitimForm) {
              $(contactResult, contactIkEgitimForm).html('Lütfen Bekleyiniz...');
              $.ajax({
                  type: "POST",
                  url: {{ route('web.ik.egitimkaydet') }},
                  data: $(contactIkEgitimForm).serialize(),
                  timeout: 20000,
                  success: function (msg) {
                      $(contactResult, contactIkEgitimForm).html('<div class="alert alert-success" role="alert"><strong>Kayıt İşlemi Başarılı.Lütfen bekleyin.</strong></div>').delay(3000).fadeOut(2000);
                  },
                  error: $('.thanks').show()
              });
              return false;
          }
        });
      </script>
    @stop         
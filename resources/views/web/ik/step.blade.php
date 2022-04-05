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
                <li class="breadcrumb-item"><a href="{{route('web')}}" title="@lang('home.anasayfa')">@lang('home.anasayfa')</a></li>
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
              <h5>İnsan Kaynakları İş Başvuru Formu</h5>
              <h6>Bower ailesine katılmak için formları eksiksiz doldurunuz.</h6>
              <p><strong>Sayın:</strong> {{ $ik[0]->adi }} {{ $ik[0]->soyadi }}</p>
              <p>Başvurunuzun değerlendirmeye alınması için lütfen aşağıdaki formları eksiksiz doldurarak işleminizi tamamlayınız.Unutmayınız ki eksik veya hatalı başvurular dikkate alınmayacaktır.</p>

              <!-- Eğitim -->
              <button data-toggle="collapse" class="btn btn-default mb-30" style="width:100%;justify-content:left;background:#004388;color:#fff;" data-target="#egitimnitelik"><i class="fa fa-graduation-cap"></i> <strong>Eğitim ve Nitelikler</strong></button>
              <div id="egitimnitelik" class="collapse" style="border:1px solid #ddd;padding:25px 20px 10px 20px;">
                <div class="row">
                  <div class="col-sm-12">
                      <form  class="contact-panel__form" action="{{ route('web.ek.ik.epost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <div class="form-group">
                            <label for="contact-aciklama">Ödül ve Dereceler </label>
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
                            <td><a href="{{ route('web.sil.ik.destroy', $en->id) }}"><i class="fa fa-trash"></i></a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>     
              <!-- /.Eğitim -->
              <!-- İş Alanları --> 
              <button data-toggle="collapse" class="btn btn-default mb-30" style="width:100%;justify-content:left;background:#004388;color:#fff;" data-target="#ilgialanlari"><i class="fa fa-cube"></i> <strong>İlgi Alanları</strong></button>
              <div id="ilgialanlari" class="collapse">
                <div class="row">
                  <div class="col-sm-12">
                      <form  class="contact-panel__form" action="{{ route('web.ilgialani.ik.epost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <div class="form-group">
                            <label for="contact-ilgialani">İlgi Alanı</label>
                            <input type="text" class="form-control" placeholder="İlgi Alanı" id="contact-ilgialani" name="ilgialani" required>
                          </div>
                        </div><!-- /.col-lg-6 -->
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
                          <th>İlgi Alanı</th>
                          <th>İşlem</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($ilgialanlari as $en)
                          <tr>
                            <td>{{ $en->id }}</td>
                            <td>{{ $en->ilgialani }}</td>
                            <td><a href="{{ route('web.sil.ik.destroy', $en->id) }}"><i class="fa fa-trash"></i></a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>           
              <!-- /.İş Alanları -->
              <!-- Referanslar --> 
              <button data-toggle="collapse" class="btn btn-default mb-30" style="width:100%;justify-content:left;background:#004388;color:#fff;" data-target="#referanslar"><i class="fa fa-braille"></i> <strong>Referanslar</strong></button>
              <div id="referanslar" class="collapse">
                <div class="row">
                  <div class="col-sm-12">
                      <form  class="contact-panel__form" action="{{ route('web.referans.ik.epost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                              <label for="contact-sirket">Şirket</label>
                              <input type="text" class="form-control" placeholder="Şirket" id="contact-sirket" name="sirket">
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                              <label for="contact-kisi">Kişiı</label>
                              <input type="text" class="form-control" placeholder="Kişiı" id="contact-kisi" name="kisi">
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                              <label for="contact-telefon">Telefon</label>
                              <input type="text" class="form-control" placeholder="Telefon" id="contact-telefon" name="telefon" required>
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                              <label for="contact-email">Email</label>
                              <input type="text" class="form-control" placeholder="Email" id="contact-email" name="email" required>
                            </div>
                          </div><!-- /.col-lg-6 -->
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
                          <th>Şirket</th>
                          <th>Kişi</th>
                          <th>Telefon</th>
                          <th>Email</th>
                          <th>İşlem</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($referanslar as $en)
                          <tr>
                            <td>{{ $en->id }}</td>
                            <td>{{ $en->sirket }}</td>
                            <td>{{ $en->kisi }}</td>
                            <td>{{ $en->telefon }}</td>
                            <td>{{ $en->email }}</td>
                            <td><a href="{{ route('web.sil.ik.destroy', $en->id) }}"><i class="fa fa-trash"></i></a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>                
              </div>           
              <!-- /.Referanslar -->
              <!-- Beceriler --> 
              <button data-toggle="collapse" class="btn btn-default mb-30" style="width:100%;justify-content:left;background:#004388;color:#fff;" data-target="#beceriler"><i class="fa fa-cubes"></i> <strong>Beceriler</strong></button>
              <div id="beceriler" class="collapse">
                <div class="row">
                  <div class="col-sm-12">
                      <form  class="contact-panel__form" action="{{ route('web.beceri.ik.epost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                              <label for="contact-beceri">Beceri</label>
                              <input type="text" class="form-control" placeholder="Beceri" id="contact-beceri" name="beceri">
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                              <label for="contact-seviye">Seviye</label>
                              <input type="text" class="form-control" placeholder="Seviye" id="contact-seviye" name="seviye">
                            </div>
                          </div><!-- /.col-lg-6 -->
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
                          <th>Beceri</th>
                          <th>Seviye</th>
                          <th>İşlem</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($beceriler as $en)
                          <tr>
                            <td>{{ $en->id }}</td>
                            <td>{{ $en->beceri }}</td>
                            <td>{{ $en->seviye }}</td>
                            <td><a href="{{ route('web.sil.ik.destroy', $en->id) }}"><i class="fa fa-trash"></i></a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>                        
              </div>           
              <!-- /.Beceriler -->
              <!-- İş deneyimi --> 
              <button data-toggle="collapse" class="btn btn-default mb-30" style="width:100%;justify-content:left;background:#004388;color:#fff;" data-target="#isdeneyimi"><i class="fa fa-book"></i> <strong>İş deneyimi</strong></button>
              <div id="isdeneyimi" class="collapse">
                <div class="row">
                  <div class="col-sm-12">
                      <form  class="contact-panel__form" action="{{ route('web.isdeneyimi.ik.epost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <div class="form-group">
                            <label for="contact-isunvani">İş Ünvanı </label>
                            <input type="text" class="form-control" placeholder="İş Ünvanı" id="contact-isunvani" required name="isunvani">
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
                            <label for="contact-isveren">İşveren</label>
                            <input type="text" class="form-control" placeholder="İşveren" id="contact-isveren"
                              name="isveren">
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
                          <th>İş Ünvanı</th>
                          <th>Şehir</th>
                          <th>İşveren</th>
                          <th>Başlangıç Tarihi</th>
                          <th>Bitiş Tarihi</th>
                          <th>Açıklama</th>
                          <th>İşlem</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($isdeneyimi as $en)
                          <tr>
                            <td>{{ $en->id }}</td>
                            <td>{{ $en->isunvani }}</td>
                            <td>{{ $en->sehir }}</td>
                            <td>{{ $en->isveren }}</td>
                            <td>{{ $en->baslangicayi }} / {{ $en->baslangicyili }}</td>
                            <td>{{ $en->bitisayi }} / {{ $en->bitisyili }}</td>
                            <td>{{ $en->tanim }}</td>
                            <td><a href="{{ route('web.sil.ik.destroy', $en->id) }}"><i class="fa fa-trash"></i></a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>           
              <!-- /.İş deneyimi -->
              <!-- Diller --> 
              <button data-toggle="collapse" class="btn btn-default mb-30" style="width:100%;justify-content:left;background:#004388;color:#fff;" data-target="#diller"><i class="fa fa-flag"></i> <strong>Diller</strong></button>
              <div id="diller" class="collapse">
                <div class="row">
                  <div class="col-sm-12">
                      <form  class="contact-panel__form" action="{{ route('web.dilleri.ik.epost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                              <label for="contact-dil">Dil</label>
                              <input type="text" class="form-control" placeholder="Dil" id="contact-dil" required name="dil">
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                              <label for="contact-seviye">Seviye</label>
                              <input type="text" class="form-control" placeholder="Seviye" id="contact-seviye" name="seviye">
                            </div>
                          </div><!-- /.col-lg-6 -->
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
                          <th>Dil</th>
                          <th>Seviye</th>
                          <th>İşlem</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dilleri as $en)
                          <tr>
                            <td>{{ $en->id }}</td>
                            <td>{{ $en->dil }}</td>
                            <td>{{ $en->seviye }}</td>
                            <td>{{ $en->id }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>                   
              </div>           
              <!-- /.İDiller -->
              <!-- Kurslar --> 
              <button data-toggle="collapse" class="btn btn-default mb-30" style="width:100%;justify-content:left;background:#004388;color:#fff;" data-target="#kurslar"><i class="fa fa-id-badge"></i> <strong>Kurslar</strong></button>
              <div id="kurslar" class="collapse">
                <div class="row">
                  <div class="col-sm-12">
                      <form  class="contact-panel__form" action="{{ route('web.kurslar.ik.epost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                          <div class="form-group">
                            <label for="contact-kurs">Kurs </label>
                            <input type="text" class="form-control" placeholder="Kurs" id="contact-kurs" required name="kurs">
                          </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-6 col-md-6 col-lg-6">
                          <div class="form-group">
                            <label for="contact-kurum">Kurum</label>
                            <input type="text" class="form-control" placeholder="Kurum" id="contact-kurum"
                              name="kurum">
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
                          <th>Kurs</th>
                          <th>Kurum</th>
                          <th>Başlangıç Tarihi</th>
                          <th>Bitiş Tarihi</th>
                          <th>Açıklama</th>
                          <th>İşlem</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($kurslar as $en)
                          <tr>
                            <td>{{ $en->id }}</td>
                            <td>{{ $en->kurs }}</td>
                            <td>{{ $en->kurum }}</td>
                            <td>{{ $en->baslangicayi }} / {{ $en->baslangicyili }}</td>
                            <td>{{ $en->bitisayi }} / {{ $en->bitisyili }}</td>
                            <td>{{ $en->tanim }}</td>
                            <td><a href="{{ route('web.sil.ik.destroy', $en->id) }}"><i class="fa fa-trash"></i></a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>                
              </div>           
              <!-- /.Kurslar -->
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.blog Single -->  
      @endsection
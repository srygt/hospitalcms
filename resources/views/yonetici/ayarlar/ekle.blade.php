@extends('yonetici.layout.master')
@section('parentPageTitle', 'Ayarlar')
@if(isset($ayarlar->id))
    @section('title', 'Ayarlar Güncelle')
@else
    @section('title', 'Ayarlar Ekle')
@endif

@push('css')
@endpush

@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-sm-6 p-md-0">
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Anasayfa</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ayarlar Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Ayarlar Kayıt Formu</h4>
                    <a href="{{route('yonetici.ayarlar.liste')}}" class="btn btn-info pull-right p-10 m-1"><i class="fa fa-list"></i> Ayarlar</a>
                </div>
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
                <div class="card-body">
                    <div class="form-validation">
                        <form  class="form-valide"
                        action="{{ isset($ayarlar->id)
                                    ? route('yonetici.ayarlar.guncelle.get', ['id' => $ayarlar->id])
                                    : route('yonetici.ayarlar.store.post') }}"
                        method="post" enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="row">                         
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="siteadi">Site Adı<span class="text-danger">*</span></label>
                                    <input class="form-control" id="siteadi" name="siteadi" value="{{ old('siteadi', $ayarlar->siteadi ?? '') }}" type="text" placeholder="Site Adını Yazınız">
                                </div>
                            </div>
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="keywords">Anahtar Kelimeler</label>
                                    <input class="form-control" id="keywords" name="keywords" value="{{ old('keywords', $ayarlar->keywords ?? '') }}" type="text" placeholder="Aralarına , Koyarak Anahtar Kelime Yazınız">
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="description">Description</label>
                                    <input class="form-control" id="description" name="description" value="{{ old('description', $ayarlar->description ?? '') }}" type="text" placeholder="Description Yazınız">
                                </div>
                            </div>  
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="adres">Adres 1</label>
                                    <input class="form-control" id="adres" name="adres" value="{{ old('adres', $ayarlar->adres ?? '') }}" type="text" placeholder="Adres Yazınız">
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="adres2">Adres 2</label>
                                    <input class="form-control" id="adres2" name="adres2" value="{{ old('adres2', $ayarlar->adres2 ?? '') }}" type="text" placeholder="Adres 2">
                                </div>
                            </div>                                                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="adres3">Adres 3</label>
                                    <input class="form-control" id="adres3" name="adres3" value="{{ old('adres3', $ayarlar->adres3 ?? '') }}" type="text" placeholder="Adres 3">
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="apikey">Google Api Key</label>
                                    <input class="form-control" id="apikey" name="apikey" value="{{ old('apikey', $ayarlar->apikey ?? '') }}" type="text" placeholder="Google Api Key">
                                </div>
                            </div>                                                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="verification">Google Verification</label>
                                    <input class="form-control" id="verification" name="verification" value="{{ old('verification', $ayarlar->verification ?? '') }}" type="text" placeholder="Google Verification">
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="web">Web</label>
                                    <input class="form-control" id="web" name="web" value="{{ old('web', $ayarlar->web ?? '') }}" type="text" placeholder="Web Sitesini Yazınız">
                                </div>
                            </div>                                                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="telefon">Telefon Numarası</label>
                                    <input class="form-control" id="telefon" name="telefon" value="{{ old('telefon', $ayarlar->telefon ?? '') }}" type="text" placeholder="Telefon Numarası">
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="fax">Fax</label>
                                    <input class="form-control" id="fax" name="fax" value="{{ old('fax', $ayarlar->fax ?? '') }}" type="text" placeholder="Fax Numarası">
                                </div>
                            </div>                                                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="gsm">Gsm No</label>
                                    <input class="form-control" id="gsm" name="gsm" value="{{ old('gsm', $ayarlar->gsm ?? '') }}" type="text" placeholder="Gsm Numarası">
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="whatsapp">Whatsapp Hattı</label>
                                    <input class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $ayarlar->whatsapp ?? '') }}" type="text" placeholder="Whatsapp Hattı">
                                </div>
                            </div>                                                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="email">Email Adresi</label>
                                    <input class="form-control" id="email" name="email" value="{{ old('email', $ayarlar->email ?? '') }}" type="text" placeholder="Email Adresiniz">
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="facebook">Facebook</label>
                                    <input class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $ayarlar->facebook ?? '') }}" type="text" placeholder="Facebook">
                                </div>
                            </div>                                                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="twitter">Twitter</label>
                                    <input class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $ayarlar->twitter ?? '') }}" type="text" placeholder="Twitter">
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="instagram">Instagram</label>
                                    <input class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $ayarlar->instagram ?? '') }}" type="text" placeholder="Instagram">
                                </div>
                            </div>                                                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="youtube">Youtube Kanalı</label>
                                    <input class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $ayarlar->youtube ?? '') }}" type="text" placeholder="Youtube Kanalı">
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="erandevu">E-Randevu Linki</label>
                                    <input class="form-control" id="erandevu" name="erandevu" value="{{ old('erandevu', $ayarlar->erandevu ?? '') }}" type="text" placeholder="E-Randevu Linkini Yazın">
                                </div>
                            </div>                                                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="etetkiksonuc">E-Tetkik Sonucu</label>
                                    <input class="form-control" id="etetkiksonuc" name="etetkiksonuc" value="{{ old('etetkiksonuc', $ayarlar->etetkiksonuc ?? '') }}" type="text" placeholder="E-Tetkik Sonucu Linkini Yazın">
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="etetkikgoruntu">E-Tetkik Görüntü</label>
                                    <input class="form-control" id="etetkikgoruntu" name="etetkikgoruntu" value="{{ old('etetkikgoruntu', $ayarlar->etetkikgoruntu ?? '') }}" type="text" placeholder="E-Tetkik Görüntü Linkini Yazın">
                                </div>
                            </div>                                                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="drtetkiksonuc">Dr Tetkik Sonucu</label>
                                    <input class="form-control" id="drtetkiksonuc" name="drtetkiksonuc" value="{{ old('drtetkiksonuc', $ayarlar->drtetkiksonuc ?? '') }}" type="text" placeholder="Dr Tetkik Sonuç Linkini Yazın">
                                </div>
                            </div>                                                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="doktorbul">Doktor Bul</label>
                                    <input class="form-control" id="doktorbul" name="doktorbul" value="{{ old('doktorbul', $ayarlar->doktorbul ?? '') }}" type="text" placeholder="Doktor Bul Linkini Yazın">
                                </div>
                            </div>                                                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-6 col-form-label" for="isbasvuru">İş Başvuru (İnsan Kaynakları)</label>
                                    <select class="form-control" required name="isbasvuru" id="isbasvuru">
                                        <option
                                            value="1"
                                            @if(old('isbasvuru', $ayarlar->isbasvuru) === 1)
                                                selected
                                            @endif
                                        >Aktif</option>
                                        <option
                                            value="0"
                                            @if(old('isbasvuru', $ayarlar->isbasvuru) === 0)
                                                selected
                                            @endif
                                        >Pasif</option>                                            
                                    </select>   
                                </div>
                            </div>                                                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="aktif">Yayın Durumu<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="aktif" id="aktif">
                                            <option
                                                value="1"
                                                @if(old('aktif', $ayarlar->aktif) === 1)
                                                    selected
                                                @endif
                                            >Aktif</option>
                                            <option
                                                value="0"
                                                @if(old('aktif', $ayarlar->aktif) === 0)
                                                    selected
                                                @endif
                                            >Pasif</option>                                            
                                    </select>                                    
                                </div>
                            </div>                                                                                                                                                                                                                             
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="resim">Logo<span class="text-danger">*</span></label>
                                    <input class="form-control" id="resim" name="resim" value="{{ old('resim', $ayarlar->resim ?? '') }}" type="file" placeholder="Resim Seçiniz">
                                    @if($ayarlar->resim!="")<img src="{{ asset('uploads/ayarlar/'.$ayarlar->resim.'') }}" width="100px;" height="100px" alt="resim">@endif
                                </div>
                            </div>                                                                                                                                                                                                  
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-lg-right m-t-20">
                                <button type="submit" class="btn btn-primary">Gönder</button>
                            </div>
                        </div>
                    </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-script')

<link rel="stylesheet" href="{{ asset('yonetici/vendor/select2/css/select2.min.css') }}">
<link href="{{ asset('yonetici/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
<!-- Material color picker -->
<link href="{{ asset('yonetici/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet"> 
<script src="{{ asset('yonetici/assets/js/form-validation-custom.js') }}"></script>
<script src="{{ asset('yonetici/vendor/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('yonetici/js/plugins-init/select2-init.js') }}"></script>

<!-- Daterangepicker -->
<script src="{{ asset('yonetici/vendor/moment/moment.min.js') }}"></script>
<!-- Material color picker -->
<script src="{{ asset('yonetici/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script; src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('yonetici/js/urlify.js') }}"></script>
<script>
  
    CKEDITOR.replace('aciklama', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });    
/* Encode string to slug */
function convertToSlug( str ) {
    $('#hlink').val(URLify(str));
    //return str;
  }           
</script>
@stop	



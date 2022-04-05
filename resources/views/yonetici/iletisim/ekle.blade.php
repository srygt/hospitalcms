@extends('yonetici.layout.master')
@section('parentPageTitle', 'İletişim')
@if(isset($iletisim->id))
    @section('title', 'İletişim Bilgisi Güncelle')
@else
    @section('title', 'İletişim Bilgisi Ekle')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">İletişim Bilgisi Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> İletişim Kayıt Formu</h4>
                    <a href="{{route('yonetici.iletisim.liste')}}" class="btn btn-info pull-right p-10 m-1"><i class="fa fa-list"></i> İletişim Listesi</a>
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
                        action="{{ isset($iletisim->id)
                                    ? route('yonetici.iletisim.guncelle.get', ['id' => $iletisim->id])
                                    : route('yonetici.iletisim.store.post') }}"
                        method="post" enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="row">
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="hastaneid">Hastane Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="hastaneid" id="hastaneid">
                                        @foreach($hastane as $d)
                                            <option
                                                value="{{ $d->id }}"
                                                @if(old('hastaneid', $iletisim->hastaneid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->adi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="dilid">Dil Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="dilid" id="dilid">
                                        <option value="">Dil Seçin...</option>
                                        @foreach($dil as $d)
                                            <option
                                                value="{{ $d->sembol }}"
                                                @if(old('dilid', $iletisim->dilid) === $d->sembol)
                                                    selected
                                                @endif
                                            >{{ $d->diladi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="baslik">Adres<span class="text-danger">*</span></label>
                                    <input class="form-control" id="adres" name="adres" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" value="{{ old('adres', $iletisim->adres ?? '') }}" type="text" placeholder="Adres Yazınız">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="harita">Harita</label>
                                    <input class="form-control" id="harita" name="harita" value="{{ old('harita', $iletisim->harita ?? '') }}" type="text" placeholder="Harita Kodu Yazınız">
                                </div>
                            </div>    
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="telefon">Telefon</label>
                                    <input class="form-control" id="telefon" name="telefon" value="{{ old('telefon', $iletisim->telefon ?? '') }}" type="text" placeholder="Telefon Numarası Yazınız">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="gsm">Gsm No</label>
                                    <input class="form-control" id="gsm" name="gsm" value="{{ old('gsm', $iletisim->gsm ?? '') }}" type="text" placeholder="Gsm Numarası Yazınız">
                                </div>
                            </div>    
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="whatsapp">Whatsapp Hattı</label>
                                    <input class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $iletisim->whatsapp ?? '') }}" type="text" placeholder="Whatsapp Numarası Yazınız">
                                </div>
                            </div>           
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="email">Email Adresi</label>
                                    <input class="form-control" id="email" name="email" value="{{ old('email', $iletisim->email ?? '') }}" type="text" placeholder="Email Adresi Yazınız">
                                </div>
                            </div>                                                     
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="durumu">Durum<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="durumu" id="durumu">
                                            <option
                                                value="1"
                                                @if(old('durumu', $iletisim->durumu) === 1)
                                                    selected
                                                @endif
                                            >Aktif</option>
                                            <option
                                                value="0"
                                                @if(old('durumu', $iletisim->durumu) === 0)
                                                    selected
                                                @endif
                                            >Pasif</option>                                            
                                    </select>                                    
                                </div>
                            </div>                                                                                                                                                                                                                             
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-lg-12 col-form-label" for="aciklama">Açıklama</label>
                                    <textarea class="aciklama form-control" id="aciklama" name="aciklama" placeholder="Açıklama Alanı">{{ old('aciklama', $iletisim->aciklama ?? '') }}</textarea>
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



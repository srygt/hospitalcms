@extends('yonetici.layout.master')
@section('parentPageTitle', 'Doktorlar')
@if(isset($doktorlar->id))
    @section('title', 'Doktor Güncelle')
@else
    @section('title', 'Doktor Ekle')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Doktor Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Doktor Kayıt Formu</h4>
                    <a href="{{route('yonetici.doktor.doktorlar.liste')}}" class="btn btn-info pull-right p-10 m-1"><i class="fa fa-list"></i> Doktor Listesi</a>
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
                        action="{{ isset($doktorlar->id)
                                    ? route('yonetici.doktor.doktorlar.guncelle.get', ['id' => $doktorlar->id])
                                    : route('yonetici.doktor.doktorlar.store.post') }}"
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
                                                @if(old('hastaneid', $doktorlar->hastaneid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->adi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="uzmanlikid">Uzmanlık Alanı Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="uzmanlikid" id="uzmanlikid">
                                        <option value="">Alan Seçin...</option>
                                        @foreach($uzmanlik as $d)
                                            <option
                                                value="{{ $d->id }}"
                                                @if(old('uzmanlikid', $doktorlar->uzmanlikid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->alanadi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="doktorunvani">Ünvanı<span class="text-danger">*</span></label>
                                    <input class="form-control" id="doktorunvani" name="doktorunvani" value="{{ old('doktorunvani', $doktorlar->doktorunvani ?? '') }}" type="text" placeholder="Doktor Ünvanını Yazınız">
                                </div>
                            </div>                         
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="doktoradi">Adı Soyadı<span class="text-danger">*</span></label>
                                    <input class="form-control" id="doktoradi" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" name="doktoradi" value="{{ old('doktoradi', $doktorlar->doktoradi ?? '') }}" type="text" placeholder="Doktor Soyadını Yazınız">
                                    <input class="form-control" id="dlink" name="dlink" value="{{ old('dlink', $doktorlar->dlink ?? '') }}" type="hidden" placeholder="Doktor Linki">
                                </div>
                            </div>
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="dogumyeri">Doğum Yeri</label>
                                    <input class="form-control" id="dogumyeri" name="dogumyeri" value="{{ old('dogumyeri', $doktorlar->dogumyeri ?? '') }}" type="text" placeholder="Doğum Yerini Yazınız">
                                </div>
                            </div>   
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="dogumtarihi">Doğum Tarihi</label>
                                    <input class="form-control" id="dogumtarihi" name="dogumtarihi" value="{{ old('dogumtarihi', $doktorlar->dogumtarihi ?? '') }}" type="text" placeholder="Doğum Tarihini Yazınız">
                                </div>
                            </div>   
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="cinsiyeti">Cinsiyeti<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="cinsiyeti" id="cinsiyeti">
                                            <option
                                                value="Erkek"
                                                @if(old('cinsiyeti', $doktorlar->cinsiyeti) === 'Erkek')
                                                    selected
                                                @endif
                                            >Erkek</option>
                                            <option
                                                value="Kadin"
                                                @if(old('cinsiyeti', $doktorlar->cinsiyeti) === 'Kadin')
                                                    selected
                                                @endif
                                            >Kadın</option>                                            
                                    </select>                                    
                                </div>
                            </div>  
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-form-label" for="email">Email Adresi</label>
                                    <input class="form-control" id="email" name="email" value="{{ old('email', $doktorlar->email ?? '') }}" type="text" placeholder="Email Adresi Yazınız">
                                </div>
                            </div>  
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-form-label" for="telno">Telefon Numarası</label>
                                    <input class="form-control" id="telno" name="telno" value="{{ old('telno', $doktorlar->telno ?? '') }}" type="text" placeholder="Telefon Numarasını Yazınız">
                                </div>
                            </div>   
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-form-label" for="website">Web Sitesi</label>
                                    <input class="form-control" id="website" name="website" value="{{ old('website', $doktorlar->website ?? '') }}" type="text" placeholder="Web Sitesini Yazınız">
                                </div>
                            </div>                                                                                                                                                                                                       
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-lg-12 col-form-label" for="ozgecmis">Özgeçmiş</label>
                                    <textarea class="ozgecmis form-control" id="ozgecmis" name="ozgecmis" placeholder="Açıklama Alanı">{{ old('ozgecmis', $doktorlar->ozgecmis ?? '') }}</textarea>
                                </div>
                            </div> 
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-form-label" for="facebook">Facebook</label>
                                    <input class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $doktorlar->facebook ?? '') }}" type="text" placeholder="Facebook Adresini Yazınız">
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-form-label" for="instagram">Instagram</label>
                                    <input class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $doktorlar->instagram ?? '') }}" type="text" placeholder="İnstagram Adresini Yazınız">
                                </div>
                            </div>  
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-form-label" for="twitter">Twitter</label>
                                    <input class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $doktorlar->twitter ?? '') }}" type="text" placeholder="Twitter Adresini Yazınız">
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-form-label" for="linkedin">Linkedin</label>
                                    <input class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin', $doktorlar->linkedin ?? '') }}" type="text" placeholder="Linkedin Adresini Yazınız">
                                </div>
                            </div>   
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-form-label" for="resim">Resim</label>
                                    <input class="form-control" id="resim" name="resim" value="{{ old('resim', $doktorlar->resim ?? '') }}" type="file" placeholder="Resim Seçiniz">
                                    <img src="{{ asset('uploads/doktorlar/'.$doktorlar->resim.'') }}" width="100px;" height="100px" alt="resim">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="durumu">Durum<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="durumu" id="durumu">
                                            <option
                                                value="1"
                                                @if(old('durumu', $doktorlar->durumu) === 1)
                                                    selected
                                                @endif
                                            >Aktif</option>
                                            <option
                                                value="0"
                                                @if(old('durumu', $doktorlar->durumu) === 0)
                                                    selected
                                                @endif
                                            >Pasif</option>                                            
                                    </select>                                    
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
  
    CKEDITOR.replace('ozgecmis', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    // MAterial Date picker
    $('#dogumtarihi').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false,
        //format: 'DD-MM-YYYY',
        lang: 'tr'
    });    
/* Encode string to slug */
function convertToSlug( str ) {
    $('#dlink').val(URLify(str));
    //return str;
  }          
</script>
@stop	



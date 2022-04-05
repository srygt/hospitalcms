
@extends('yonetici.layout.master')
@section('parentPageTitle', 'Foto Galeri')
@if(isset($fotogaleri->id))
    @section('title', 'Foto Galeri Güncelle')
@else
    @section('title', 'Foto Galeri Ekle')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Foto Galeri Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Foto Galeri Kayıt Formu</h4>
                    <a href="{{route('yonetici.fotogaleri.liste')}}" class="btn btn-info pull-right p-10 m-1"><i class="fa fa-list"></i> Foto Galeri Listesi</a>
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
                        action="{{ isset($fotogaleri->id)
                                    ? route('yonetici.fotogaleri.guncelle.get', ['id' => $fotogaleri->id])
                                    : route('yonetici.fotogaleri.store.post') }}"
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
                                                @if(old('hastaneid', $fotogaleri->hastaneid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->adi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="dilid">Dil Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="dilid" id="dilid">
                                        <option value="">Dil Seçin...</option>
                                        @foreach($dil as $d)
                                            <option
                                                value="{{ $d->sembol }}"
                                                @if(old('dilid', $fotogaleri->dilid) === $d->sembol)
                                                    selected
                                                @endif
                                            >{{ $d->diladi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                     
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="galeriadi">Başlık<span class="text-danger">*</span></label>
                                    <input class="form-control" id="galeriadi" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" name="galeriadi" value="{{ old('galeriadi', $fotogaleri->galeriadi ?? '') }}" type="text" placeholder="Foto Galeri Başlığı Yazınız">
                                    <input class="form-control" id="glink" name="glink" value="{{ old('glink', $fotogaleri->glink ?? '') }}" type="hidden" placeholder="Foto Galeri Linki">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-form-label" for="resim">Resim</label>
                                    <input class="form-control" id="resim" name="resim" value="{{ old('resim', $fotogaleri->resim ?? '') }}" type="file" placeholder="Resim Seçiniz">
                                    @if($fotogaleri->resim!="")<img src="{{ asset('uploads/fotogaleri/'.$fotogaleri->resim.'') }}" width="100px;" height="100px" alt="resim">@endif
                                </div>
                            </div>  
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="resimyolu">Diğer Resimler</label>
                                    <input class="form-control" id="resimyolu" name="resimyolu[]" type="file" multiple>
                                </div>
                            </div>   
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="durumu">Durum<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="durumu" id="durumu">
                                            <option
                                                value="1"
                                                @if(old('durumu', $fotogaleri->durumu) === 1)
                                                    selected
                                                @endif
                                            >Aktif</option>
                                            <option
                                                value="0"
                                                @if(old('durumu', $fotogaleri->durumu) === 0)
                                                    selected
                                                @endif
                                            >Pasif</option>                                            
                                    </select>                                    
                                </div>
                            </div>                                                                                                                                                                                                                                 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-lg-12 col-form-label" for="aciklama">Foto Galeri Detayı</label>
                                    <textarea class="aciklama form-control" id="aciklama" name="aciklama" placeholder="Açıklama Alanı">{{ old('aciklama', $fotogaleri->aciklama ?? '') }}</textarea>
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
    $('#glink').val(URLify(str));
    //return str;
  }          
</script>
@stop	



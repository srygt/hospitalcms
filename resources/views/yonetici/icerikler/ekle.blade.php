
@extends('yonetici.layout.master')
@section('parentPageTitle', 'icerikler')
@if(isset($icerikler->id))
    @section('title', 'İçerik Güncelle')
@else
    @section('title', 'İçerik Ekle')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">İçerik Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> İçerik Kayıt Formu</h4>
                    <a href="{{route('yonetici.icerikler.liste')}}" class="btn btn-info pull-right p-10 m-1"><i class="fa fa-list"></i> İçerik Listesi</a>
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
                        action="{{ isset($icerikler->id)
                                    ? route('yonetici.icerikler.guncelle.get', ['id' => $icerikler->id])
                                    : route('yonetici.icerikler.store.post') }}"
                        method="post" enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="kategoriid">Kategori Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="kategoriid" id="kategoriid">
                                        @foreach($kategori as $d)
                                            <option
                                                value="{{ $d->id }}"
                                                @if(old('kategoriid', $icerikler->kategoriid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->kategoriadi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                                 
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="hastaneid">Hastane Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="hastaneid" id="hastaneid">
                                        @foreach($hastane as $d)
                                            <option
                                                value="{{ $d->id }}"
                                                @if(old('hastaneid', $icerikler->hastaneid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->adi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="birimid">Tıbbi Birim Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="birimid" id="birimid">
                                        <option value="">Tbbi Alan Seçin...</option>
                                        @foreach($birim as $d)
                                            <option
                                                value="{{ $d->id }}"
                                                @if(old('birimid', $icerikler->birimid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->birimadi }}</option>
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
                                                @if(old('dilid', $icerikler->dilid) === $d->sembol)
                                                    selected
                                                @endif
                                            >{{ $d->diladi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="doktorid">Doktor Seç</label>
                                    <select class="form-control" name="doktorid" id="doktorid">
                                        <option value="">Doktor Seçin...</option>
                                        @foreach($doktor as $d)
                                            <option
                                                value="{{ $d->id }}"
                                                @if(old('doktorid', $icerikler->doktorid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->doktorunvani }} {{ $d->doktoradi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                      
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="baslik">Başlık<span class="text-danger">*</span></label>
                                    <input class="form-control" id="baslik" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" name="baslik" value="{{ old('baslik', $icerikler->baslik ?? '') }}" type="text" placeholder="İçerik Başlığı Yazınız">
                                    <input class="form-control" id="ilink" name="ilink" value="{{ old('ilink', $icerikler->ilink ?? '') }}" type="hidden" placeholder="İçerik Linki">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="video">Video</label>
                                    <input class="form-control" id="video" name="video" value="{{ old('video', $icerikler->video ?? '') }}" type="text" placeholder="İçerik Video Linkini Yazınız">
                                </div>
                            </div>   
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="eklemetarihi">Ekleme Tarihi</label>
                                    <input class="form-control" id="eklemetarihi" name="eklemetarihi" value="{{ old('eklemetarihi', $icerikler->eklemetarihi ?? '') }}" type="text" placeholder="Ekleme Tarihini Yazınız">
                                </div>
                            </div>   
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="durumu">Durum<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="durumu" id="durumu">
                                            <option
                                                value="1"
                                                @if(old('durumu', $icerikler->durumu) === 1)
                                                    selected
                                                @endif
                                            >Aktif</option>
                                            <option
                                                value="0"
                                                @if(old('durumu', $icerikler->durumu) === 0)
                                                    selected
                                                @endif
                                            >Pasif</option>                                            
                                    </select>                                    
                                </div>
                            </div>                                                                                                                                                                                                                                 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-lg-12 col-form-label" for="aciklama">İçerik Detayı</label>
                                    <textarea class="aciklama form-control" id="aciklama" name="aciklama" placeholder="Açıklama Alanı">{{ old('aciklama', $icerikler->aciklama ?? '') }}</textarea>
                                </div>
                            </div> 
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-form-label" for="description">Description</label>
                                    <input class="form-control" id="description" name="description" value="{{ old('description', $icerikler->description ?? '') }}" type="text" placeholder="Description Yazınız">
                                </div>
                            </div>  
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-form-label" for="resim">Resim</label>
                                    <input class="form-control" id="resim" name="resim" value="{{ old('resim', $icerikler->resim ?? '') }}" type="file" placeholder="Resim Seçiniz">
                                    @if($icerikler->resim!="")<img src="{{ asset('uploads/icerikler/'.$icerikler->resim.'') }}" width="100px;" height="100px" alt="resim">@endif
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
    // MAterial Date picker
    $('#eklemetarihi').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false,
        //format: 'DD-MM-YYYY',
        lang: 'tr'
    });    
/* Encode string to slug */
function convertToSlug( str ) {
    $('#ilink').val(URLify(str));
    //return str;
  }          
</script>
@stop	



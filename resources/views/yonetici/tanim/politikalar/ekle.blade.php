@extends('yonetici.layout.master')
@section('parentPageTitle', 'Politikalar')
@if(isset($politikalar->id))
    @section('title', 'Politika Güncelle')
@else
    @section('title', 'Politika Ekle')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Politika Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Politika Kayıt Formu</h4>
                    <a href="{{route('yonetici.tanim.politikalar.liste')}}" class="btn btn-info pull-right p-10 m-1"><i class="fa fa-list"></i> Politikalar Listesi</a>
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
                        action="{{ isset($politikalar->id)
                                    ? route('yonetici.tanim.politikalar.guncelle.get', ['id' => $politikalar->id])
                                    : route('yonetici.tanim.politikalar.store.post') }}"
                        method="post"
                    >
                        @csrf
                        <div class="row">
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="dilid">Dil Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="dilid" id="single-select">
                                        <option value="">Dil Seçin...</option>
                                        @foreach($dil as $d)
                                            <option
                                                value="{{ $d->sembol }}"
                                                @if(old('dilid', $politikalar->dilid) === $d->sembol)
                                                    selected
                                                @endif
                                            >{{ $d->diladi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="hastaneid">Hastane Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="hastaneid" id="single-select">
                                        @foreach($hastane as $d)
                                            <option
                                                value="{{ $d->id }}"
                                                @if(old('hastaneid', $politikalar->hastaneid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->adi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                            
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="kategoriid">Kategori Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="kategoriid" id="single-select">
                                        <option value="">Seçin...</option>
                                        @foreach($kat as $d)
                                            <option
                                                value="{{ $d->id }}"
                                                @if(old('kategoriid', $politikalar->kategoriid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->kategoriadi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="politikaadi">Politika Adı<span class="text-danger">*</span></label>
                                    <input class="form-control" id="politikaadi" name="politikaadi" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" value="{{ old('politikaadi', $politikalar->politikaadi ?? '') }}" type="text" placeholder="Politika Adını Yazınız">
                                    <input class="form-control" id="plink" name="plink" value="{{ old('plink', $politikalar->plink ?? '') }}" type="hidden" placeholder="Politika Url Yazınız">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="durumu">Durum</label>
                                    <select class="form-control" required name="durumu" id="single-select">
                                            <option
                                                value="1"
                                                @if(old('durumu', $politikalar->durumu) === 1)
                                                    selected
                                                @endif
                                            >Aktif</option>
                                            <option
                                                value="0"
                                                @if(old('durumu', $politikalar->durumu) === 0)
                                                    selected
                                                @endif
                                            >Pasif</option>                                            
                                    </select>      
                                </div>
                            </div>   
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-lg-12 col-form-label" for="aciklama">Açıklama</label>
                                    <textarea class="aciklama form-control" id="aciklama" name="aciklama" placeholder="Açıklama Alanı">{{ old('aciklama', $icerikler->aciklama ?? '') }}</textarea>
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
    $('#plink').val(URLify(str));
    //return str;
  }          
</script>
@stop	
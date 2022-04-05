@extends('yonetici.layout.master')
@section('parentPageTitle', 'Tıbbi Birimler')
@if(isset($tibbibirimler->id))
    @section('title', 'Tıbbi Birim Güncelle')
@else
    @section('title', 'Tıbbi Birim Ekle')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tıbbi Birim Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Tıbbi Birim Kayıt Formu</h4>
                    <a href="{{route('yonetici.tanim.tibbibirimler.liste')}}" class="btn btn-info pull-right p-10 m-1"><i class="fa fa-list"></i> Tıbbi Birim Listesi</a>
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
                        action="{{ isset($tibbibirimler->id)
                                    ? route('yonetici.tanim.tibbibirimler.guncelle.get', ['id' => $tibbibirimler->id])
                                    : route('yonetici.tanim.tibbibirimler.store.post') }}"
                        method="post" enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="row">
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="dilid">Dil Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="dilid" id="single-select">
                                        <option value="">Seçin...</option>
                                        @foreach($dil as $d)
                                            <option
                                                value="{{ $d->sembol }}"
                                                @if(old('dilid', $tibbibirimler->dilid) === $d->sembol)
                                                    selected
                                                @endif
                                            >{{ $d->diladi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="birimadi">Birim Adı<span class="text-danger">*</span></label>
                                    <input class="form-control" id="birimadi" name="birimadi" onload="convertToSlug(this.value)" 
                                    onkeyup="convertToSlug(this.value)" value="{{ old('birimadi', $tibbibirimler->birimadi ?? '') }}" type="text" placeholder="Birim Adını Yazınız">
                                    <input class="form-control" id="tlink" name="tlink" value="{{ old('tlink', $tibbibirimler->tlink ?? '') }}" type="hidden" placeholder="Link Alanı">
                                </div>
                            </div>                         
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-lg-12 col-form-label" for="aciklama">Açıklama</label>
                                    <textarea class="aciklama form-control" id="aciklama" name="aciklama" placeholder="Açıklama Alanı">{{ old('aciklama', $tibbibirimler->aciklama ?? '') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="resim">Resim</label>
                                    <input class="form-control" id="resim" name="resim" value="{{ old('resim', $tibbibirimler->resim ?? '') }}" type="file" placeholder="Resim Seçiniz">
                                    @if($tibbibirimler->resim!="")<img src="{{ asset('uploads/tibbibirimler/'.$tibbibirimler->resim.'') }}" width="100px;" height="100px" alt="resim">@endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="durumu">Durum</label>
                                    <select class="form-control" required name="durumu" id="single-select">
                                            <option
                                                value="1"
                                                @if(old('durumu', $tibbibirimler->durumu) === 1)
                                                    selected
                                                @endif
                                            >Aktif</option>
                                            <option
                                                value="0"
                                                @if(old('durumu', $tibbibirimler->durumu) === 0)
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
<script src="{{ asset('yonetici/assets/js/form-validation-custom.js') }}"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script; src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('yonetici/js/urlify.js') }}"></script>
<script>
    CKEDITOR.replace('aciklama', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    //location.reload();

/* Encode string to slug */
function convertToSlug( str ) {
    $('#tlink').val(URLify(str));
    //return str;
  }    
</script>
@stop	



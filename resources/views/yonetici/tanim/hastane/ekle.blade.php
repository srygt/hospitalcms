@extends('yonetici.layout.master')
@section('parentPageTitle', 'Hastaneler')
@if(isset($hastane->id))
    @section('title', 'Hastane Güncelle')
@else
    @section('title', 'Hastane Ekle')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Hastane Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Hastane Kayıt Formu</h4>
                    <a href="{{route('yonetici.tanim.hastane.liste')}}" class="btn btn-info pull-right p-10 m-1"><i class="fa fa-list"></i> Hastane Listesi</a>
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
                        action="{{ isset($hastane->id)
                                    ? route('yonetici.tanim.hastane.guncelle.get', ['id' => $hastane->id])
                                    : route('yonetici.tanim.hastane.store.post') }}"
                        method="post" enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="adi">Hastane Adı<span class="text-danger">*</span></label>
                                    <input class="form-control" id="adi" name="adi" value="{{ old('adi', $hastane->adi ?? '') }}" type="text" placeholder="Hastane Adını Yazınız">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="logo">Logo</label>
                                    <input class="form-control" id="logo" name="logo" value="{{ old('logo', $hastane->logo ?? '') }}" type="file" placeholder="Logo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="web">Web</label>
                                    <input class="form-control" id="web" name="web" value="{{ old('web', $hastane->web ?? '') }}" type="text" placeholder="Web Sitesi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="email">Email</label>
                                    <input class="form-control" id="email" name="email" value="{{ old('email', $hastane->email ?? '') }}" type="email" placeholder="Email Adresi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="sehir">Şehir</label>
                                    <input class="form-control" id="sehir" name="sehir" value="{{ old('sehir', $hastane->sehir ?? '') }}" type="text" placeholder="Şehir">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row summernote">
                                    <label class="col-lg-4 col-form-label" for="adres">Adres</label>
                                    <textarea class="form-control" id="adres" name="adres" placeholder="Adres Yazınız">{{ old('adres', $hastane->adres ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row summernote">
                                    <label class="col-lg-4 col-form-label" for="aciklama">Açıklama</label>
                                    <textarea class="form-control" id="aciklama" name="aciklama" placeholder="Açıklama Yazınız">{{ old('aciklama', $hastane->aciklama ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="durumu">Durum</label>
                                <select class="form-control" required name="durumu" id="single-select">
                                        <option
                                            value="1"
                                            @if(old('durumu', $hastane->durumu) === 1)
                                                selected
                                            @endif
                                        >Aktif</option>
                                        <option
                                            value="0"
                                            @if(old('durumu', $hastane->durumu) === 0)
                                                selected
                                            @endif
                                        >Pasif</option>                                            
                                </select>      
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
	
	@push('scripts')
    <link href="{{ asset('yonetici/vendor/summernote/summernote.css') }}" rel="stylesheet">
	<script src="{{ asset('yonetici/js/form-validation-custom.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('yonetici/vendor/summernote/js/summernote.min.js') }}"></script>
    <!-- Summernote init -->
    <script src="{{ asset('yonetici/js/plugins-init/summernote-init.js') }}"></script>


	@endpush

@endsection
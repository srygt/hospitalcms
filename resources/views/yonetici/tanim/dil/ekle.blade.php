@extends('yonetici.layout.master')
@section('parentPageTitle', 'Diller')
@if(isset($dil->id))
    @section('title', 'Dil Güncelle')
@else
    @section('title', 'Dil Tipi Ekle')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dil Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Dil Kayıt Formu</h4>
                    <a href="{{route('yonetici.tanim.dil.liste')}}" class="btn btn-info pull-right p-10 m-1"><i class="fa fa-list"></i> Dil Listesi</a>
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
                        action="{{ isset($dil->id)
                                    ? route('yonetici.tanim.dil.guncelle.get', ['id' => $dil->id])
                                    : route('yonetici.tanim.dil.store.post') }}"
                        method="post"
                    >
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="diladi">Dil Adı<span class="text-danger">*</span></label>
                                    <input class="form-control" id="diladi" name="diladi" value="{{ old('diladi', $dil->diladi ?? '') }}" type="text" placeholder="Dil Adını Yazınız">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="sembol">Dil Sembolü<span class="text-danger">*</span></label>
                                    <input class="form-control" id="sembol" name="sembol" value="{{ old('sembol', $dil->sembol ?? '') }}" type="text" placeholder="Dil Sembolünü Yazınız Örnek: (en)">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="durumu">Durum</label>
                                <select class="form-control" required name="durumu" id="single-select">
                                        <option
                                            value="1"
                                            @if(old('durumu', $dil->durumu) === 1)
                                                selected
                                            @endif
                                        >Aktif</option>
                                        <option
                                            value="0"
                                            @if(old('durumu', $dil->durumu) === 0)
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
	
	@push('scripts')
	<script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
	@endpush

@endsection
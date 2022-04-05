@extends('yonetici.layout.master')
@section('parentPageTitle', 'İlgi Alanları')
@if(isset($meslekiuyelik->id))
    @section('title', 'Mesleki Üyelik Güncelle')
@else
    @section('title', 'Mesleki Üyelik Ekle')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Mesleki Üyelik Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Mesleki Üyelik Kayıt Formu</h4>
                    <a href="{{route('yonetici.doktor.meslekiuyelik.liste')}}" class="btn btn-info pull-right btn-rounded p-10 m-1"><i class="fa fa-list"></i> Mesleki Üyelik Listesi</a>
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
                        action="{{ isset($meslekiuyelik->id)
                                    ? route('yonetici.doktor.meslekiuyelik.guncelle.get', ['id' => $meslekiuyelik->id])
                                    : route('yonetici.doktor.meslekiuyelik.store.post') }}"
                        method="post"
                    >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="doktorid">Doktor Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="doktorid" id="hastaneid">
                                        <option value="">Doktor Seç...</option>
                                        @foreach($doktorlar as $d)
                                            <option
                                                value="{{ $d->id }}"
                                                @if(old('doktorid', $meslekiuyelik->doktorid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->doktorunvani }} {{ $d->doktoradi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                               
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="dilid">Dil Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="dilid" id="single-select">
                                        <option value="">Seçin...</option>
                                        @foreach($dil as $d)
                                            <option
                                                value="{{ $d->sembol }}"
                                                @if(old('dilid', $meslekiuyelik->dilid) === $d->sembol)
                                                    selected
                                                @endif
                                            >{{ $d->diladi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                                                     
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="diladi">Mesleki Üyelik Adı<span class="text-danger">*</span></label>
                                    <input class="form-control" id="uyelikadi" name="uyelikadi" value="{{ old('uyelikadi', $meslekiuyelik->uyelikadi ?? '') }}" type="text" placeholder="Mesleki Üyelik Adını Yazınız">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="durumu">Durum</label>
                                    <select class="form-control" required name="durumu" id="single-select">
                                            <option
                                                value="1"
                                                @if(old('durumu', $meslekiuyelik->durumu) === 1)
                                                    selected
                                                @endif
                                            >Aktif</option>
                                            <option
                                                value="0"
                                                @if(old('durumu', $meslekiuyelik->durumu) === 0)
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
    <!-- Jquery Validation -->
    <script src="{{ asset('yonetici/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('yonetici/vendor/select2/css/select2.min.css') }}">
    <link href="{{ asset('yonetici/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{ asset('yonetici/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet"> 
    <script src="{{ asset('yonetici/assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('yonetici/vendor/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('yonetici/js/plugins-init/select2-init.js') }}"></script>
    
@stop
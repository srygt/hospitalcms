@extends('yonetici.layout.master')
@section('parentPageTitle', 'Kullanıcı')
@if(isset($kullanici->id))
    @section('title', 'Kullanıcı Bilgisi Güncelle')
@else
    @section('title', 'Kullanıcı Bilgisi Ekle')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Kullanıcı Bilgisi Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Kullanıcı Kayıt Formu</h4>
                    <a href="{{route('yonetici.kullanici.liste')}}" class="btn btn-info pull-right p-10 m-1"><i class="fa fa-list"></i> Kullanıcı Listesi</a>
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
                        action="{{ isset($kullanici->id)
                                    ? route('yonetici.kullanici.guncelle.get', ['id' => $kullanici->id])
                                    : route('yonetici.kullanici.store.post') }}"
                        method="post" enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="roles">Rol Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="roles" id="roles">
                                        @foreach($roles as $d)
                                            <option
                                                value="{{ $d->name }}"
                                                @if(old('roles', $kullanici->roles) === $d->name)
                                                    selected
                                                @endif
                                            >{{ $d->name }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                                  
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="name">Adı <span class="text-danger">*</span></label>
                                    <input class="form-control" id="name" name="name" required value="{{ old('name', $kullanici->name ?? '') }}" type="text" placeholder="Adını Yazınız">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="lastname">Soyadı <span class="text-danger">*</span></label>
                                    <input class="form-control" id="lastname" name="lastname" required value="{{ old('lastname', $kullanici->lastname ?? '') }}" type="text" placeholder="Soyadını Yazınız">
                                </div>
                            </div>    
                            <div class="col-md-6 pr-5">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="username">Kullanıcı Adı <span class="text-danger">*</span></label>
                                    <input class="form-control" id="username" name="username" required value="{{ old('username', $kullanici->username ?? '') }}" type="text" placeholder="Kullanıcı Adını Yazınız">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="password">Şifre  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="password" name="password" type="text" placeholder="Şifre Yazınız">
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



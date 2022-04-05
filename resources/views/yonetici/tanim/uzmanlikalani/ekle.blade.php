@extends('yonetici.layout.master')
@section('parentPageTitle', 'Uzmanlık Alanları')
@if(isset($uzmanlikalani->id))
    @section('title', 'Uzmanlık Alanı Güncelle')
@else
    @section('title', 'Uzmanlık Alanı Ekle')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Uzmanlık Alanı Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Uzmanlık Alanı Kayıt Formu</h4>
                    <a href="{{route('yonetici.tanim.uzmanlikalani.liste')}}" class="btn btn-info pull-right p-10 m-1"><i class="fa fa-list"></i> Uzmanlık Alanı Listesi</a>
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
                        action="{{ isset($uzmanlikalani->id)
                                    ? route('yonetici.tanim.uzmanlikalani.guncelle.get', ['id' => $uzmanlikalani->id])
                                    : route('yonetici.tanim.uzmanlikalani.store.post') }}"
                        method="post"
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
                                                @if(old('dilid', $uzmanlikalani->dilid) === $d->sembol)
                                                    selected
                                                @endif
                                            >{{ $d->diladi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="ustid">Üst Alan Seç<span class="text-danger">*</span></label>
                                    <select class="form-control" required name="ustid" id="single-select">
                                        <option value="">Seçin...</option>
                                        @foreach($ustuzmanlik as $d)
                                            <option
                                                value="{{ $d->id }}"
                                                @if(old('ustid', $uzmanlikalani->ustid) === $d->id)
                                                    selected
                                                @endif
                                            >{{ $d->alanadi }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>                                                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="diladi">Alan Adı<span class="text-danger">*</span></label>
                                    <input class="form-control" id="alanadi" name="alanadi" value="{{ old('alanadi', $uzmanlikalani->alanadi ?? '') }}" type="text" placeholder="Alan Adını Yazınız">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="durumu">Durum</label>
                                    <select class="form-control" required name="durumu" id="single-select">
                                            <option
                                                value="1"
                                                @if(old('durumu', $uzmanlikalani->durumu) === 1)
                                                    selected
                                                @endif
                                            >Aktif</option>
                                            <option
                                                value="0"
                                                @if(old('durumu', $uzmanlikalani->durumu) === 0)
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
    <!-- Form validate init -->
    <script>
        jQuery(".form-valide").validate({
            rules: {
                "alanadi": {
                    required: !0
                }
            },
            messages: {
                "alanadi": "Lütfen uzmanlık alanını boş bırakmayınız."
            },

            ignore: [],
            errorClass: "invalid-feedback animated fadeInUp",
            errorElement: "div",
            errorPlacement: function(e, a) {
                jQuery(a).parents(".form-group > div").append(e)
            },
            highlight: function(e) {
                jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
            },
            success: function(e) {
                jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
            },
        });


        jQuery(".form-valide-with-icon").validate({
            rules: {
                "val-username": {
                    required: !0,
                    minlength: 3
                },
                "val-password": {
                    required: !0,
                    minlength: 5
                }
            },
            messages: {
                "val-username": {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 3 characters"
                },
                "val-password": {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                }
            },

            ignore: [],
            errorClass: "invalid-feedback animated fadeInUp",
            errorElement: "div",
            errorPlacement: function(e, a) {
                jQuery(a).parents(".form-group > div").append(e)
            },
            highlight: function(e) {
                jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
            },
            success: function(e) {
                jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-valid")
            }
        });    
    </script>    
@stop
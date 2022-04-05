@extends('web.layout.master')
@section('parentPageTitle','503')
@section('title','503')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">503</h1>
        <p class="lead">@lang('error.503Konu')</p>
        <p>@lang('error.503Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
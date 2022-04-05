@extends('web.layout.master')
@section('parentPageTitle','502')
@section('title','502')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">502</h1>
        <p class="lead">@lang('error.502Konu')</p>
        <p>@lang('error.502Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
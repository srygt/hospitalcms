@extends('web.layout.master')
@section('parentPageTitle','501')
@section('title','501')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">501</h1>
        <p class="lead">@lang('error.501Konu')</p>
        <p>@lang('error.501Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
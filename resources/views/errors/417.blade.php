@extends('web.layout.master')
@section('parentPageTitle','417')
@section('title','417')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">417</h1>
        <p class="lead">@lang('error.417Konu')</p>
        <p>@lang('error.417Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
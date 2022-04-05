@extends('web.layout.master')
@section('parentPageTitle','404')
@section('title','404')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">404</h1>
        <p class="lead">@lang('error.404Konu')</p>
        <p>@lang('error.404Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
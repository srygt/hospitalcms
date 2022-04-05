@extends('web.layout.master')
@section('parentPageTitle','500')
@section('title','500')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">500</h1>
        <p class="lead">@lang('error.500Konu')</p>
        <p>@lang('error.500Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
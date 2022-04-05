@extends('web.layout.master')
@section('parentPageTitle','408')
@section('title','408')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">408</h1>
        <p class="lead">@lang('error.408Konu')</p>
        <p>@lang('error.408Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
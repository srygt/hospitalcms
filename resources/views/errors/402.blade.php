@extends('web.layout.master')
@section('parentPageTitle','402')
@section('title','402')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">402</h1>
        <p class="lead">@lang('error.402Konu')</p>
        <p>@lang('error.402Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
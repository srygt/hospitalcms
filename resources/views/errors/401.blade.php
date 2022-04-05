@extends('web.layout.master')
@section('parentPageTitle','401')
@section('title','401')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">401</h1>
        <p class="lead">@lang('error.401Konu')</p>
        <p>@lang('error.401Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
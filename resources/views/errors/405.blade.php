@extends('web.layout.master')
@section('parentPageTitle','405')
@section('title','405')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">405</h1>
        <p class="lead">@lang('error.405Konu')</p>
        <p>@lang('error.405Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
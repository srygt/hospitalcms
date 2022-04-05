@extends('web.layout.master')
@section('parentPageTitle','504')
@section('title','504')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">504</h1>
        <p class="lead">@lang('error.504Konu')</p>
        <p>@lang('error.504Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
@extends('web.layout.master')
@section('parentPageTitle','407')
@section('title','407')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">407</h1>
        <p class="lead">@lang('error.407Konu')</p>
        <p>@lang('error.407Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
@extends('web.layout.master')
@section('parentPageTitle','411')
@section('title','411')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">411</h1>
        <p class="lead">@lang('error.411Konu')</p>
        <p>@lang('error.411Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
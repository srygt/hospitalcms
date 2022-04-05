@extends('web.layout.master')
@section('parentPageTitle','412')
@section('title','412')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">412</h1>
        <p class="lead">@lang('error.412Konu')</p>
        <p>@lang('error.412Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
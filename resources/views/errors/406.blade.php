@extends('web.layout.master')
@section('parentPageTitle','406')
@section('title','406')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">406</h1>
        <p class="lead">@lang('error.406Konu')</p>
        <p>@lang('error.406Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
@extends('web.layout.master')
@section('parentPageTitle','409')
@section('title','409')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">409</h1>
        <p class="lead">@lang('error.409Konu')</p>
        <p>@lang('error.409Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
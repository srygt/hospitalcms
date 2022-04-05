@extends('web.layout.master')
@section('parentPageTitle','416')
@section('title','416')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">416</h1>
        <p class="lead">@lang('error.416Konu')</p>
        <p>@lang('error.416Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
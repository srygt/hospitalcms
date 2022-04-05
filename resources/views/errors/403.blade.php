@extends('web.layout.master')
@section('parentPageTitle','403')
@section('title','403')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">403</h1>
        <p class="lead">@lang('error.403Konu')</p>
        <p>@lang('error.403Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
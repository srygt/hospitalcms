@extends('web.layout.master')
@section('parentPageTitle','507')
@section('title','507')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">507</h1>
        <p class="lead">@lang('error.507Konu')</p>
        <p>@lang('error.507Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
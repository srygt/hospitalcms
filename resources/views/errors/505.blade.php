@extends('web.layout.master')
@section('parentPageTitle','505')
@section('title','505')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">505</h1>
        <p class="lead">@lang('error.505Konu')</p>
        <p>@lang('error.505Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
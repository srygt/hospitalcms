@extends('web.layout.master')
@section('parentPageTitle','424')
@section('title','424')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">424</h1>
        <p class="lead">@lang('error.424Konu')</p>
        <p>@lang('error.424Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
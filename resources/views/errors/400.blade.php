@extends('web.layout.master')
@section('parentPageTitle','400')
@section('title','400')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">400</h1>
        <p class="lead">@lang('error.400Konu')</p>
        <p>@lang('error.400Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
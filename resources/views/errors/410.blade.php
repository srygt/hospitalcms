@extends('web.layout.master')
@section('parentPageTitle','410')
@section('title','410')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">410</h1>
        <p class="lead">@lang('error.410Konu')</p>
        <p>@lang('error.410Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
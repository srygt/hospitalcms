@extends('web.layout.master')
@section('parentPageTitle','423')
@section('title','423')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">423</h1>
        <p class="lead">@lang('error.423Konu')</p>
        <p>@lang('error.423Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
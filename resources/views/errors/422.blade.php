@extends('web.layout.master')
@section('parentPageTitle','422')
@section('title','422')
    @section('content')

<div class="container">
    <div class="col-12">
        <h1 class="heading">422</h1>
        <p class="lead">@lang('error.422Konu')</p>
        <p>@lang('error.422Not') <a href="{{ url('/') }}">@lang('error.anasayfa')</a> @lang('error.geridon')
        </p>
    </div>
</div>

@endsection      
@extends('frontend.layouts.master')
@section('after-style')
@endsection
@section('content')
    <div class="container text-center">
        <h3>{{ trans('jobmanager.apply.status.success.title') }}</h3>
        <div class="text-justify">{{ trans('jobmanager.apply.status.success.message') }}</div>
    </div>
@endsection
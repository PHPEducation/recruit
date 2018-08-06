@extends('frontend.layouts.master')
@section('after-style')
@endsection
@section('content')
    <div class="container text-center">
        <h3>{{ trans('jobmanager.apply.status.fail.title') }}</h3>
        <div>{{ trans('jobmanager.apply.status.fail.message') }}</div>
    </div>
@endsection
@extends('frontend.layouts.master')
@section('after-style')

@endsection
@section('content')
    <div class="container">
        {!! $page->content or '' !!}
    </div>
@endsection

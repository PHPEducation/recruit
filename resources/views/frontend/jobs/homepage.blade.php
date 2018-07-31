@extends('frontend.layouts.master')
@section('after-style')
    <link rel="stylesheet" href="{{ asset('css/choose-template.css') }}">

@endsection
@section('content')

<div class="heading">
    <div class="container">
        <h1 class="suggest-title text-center">{{ $page->heading }}</h1>
        <p class="text-center">{{ $page->sub_heading }}</p>
    </div>
</div>

<div id="template-container">
    <div class="container">
        <div id="template-list">
            <div class="row">
                @foreach($page['jobs'] as $job)
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 template_cv">
                    <div class="cv-img">
                        <a href="{{ $job->getJobLink() }}">
                            <img src="{{ $job->thumbnail }}" class="img-responsive">
                        </a>
                        <div class="cv-overlay">
                            <a href="{{ $job->getJobLink() }}">
                                <span>Dùng mẫu này</span>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p class="cv-title">{!! $job->name !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

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
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 template_cv">
                        <div class="cv-img">
                            <a href="{{ route('frontend.cv.create.get') }}">
                                <img src="{{ asset('images/new_cv.jpg') }}" class="img-responsive">
                            </a>
                            <div class="cv-overlay">
                                <a href="{{ route('frontend.cv.create.get') }}">
                                    <span>{{ trans('cv.create_new') }}</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @foreach($page->cvs as $cv)
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 template_cv">
                            <div class="cv-img">
                                <a href="{{ route('frontend.cv.edit.get', ['id' => $cv->id]) }}">
                                    <img src="{{ asset('images/created_cv.png') }}" class="img-responsive">
                                </a>
                                <div class="cv-overlay">
                                    <a href="{{ route('frontend.cv.edit.get', ['id' => $cv->id]) }}">
                                        <span>{{ trans('cv.edit_button') }}</span>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('frontend.layouts.master')
@section('after-style')
    <link rel="stylesheet" href="{{ asset('css/choose-template.css') }}">

@endsection
@section('content')
    <div class="container">
        <div class="header text-center">
            <h3>{{ $job->name }}</h3>
        </div>
        <div class="row">
            <div id="template-container">
                <div class="container">
                    <div id="template-list">
                        <div class="row">
                            @foreach($cvs as $cv)
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 template_cv">
                                    <div class="cv-img">
                                        <a href="{{ route('frontend.cv.edit.get', ['id' => $cv->id]) }}">
                                            <img src="{{ $cv->thumbnail or 'https://www.topcv.vn/images/cv/screenshots/thumbs/vi/mau-cv-classic_1.png' }}" class="img-responsive">
                                        </a>
                                        <div class="cv-overlay">
                                            <a href="{{ route('frontend.cv.apply.get', ['job_id' => $job->id, 'cv_id' => $cv->id]) }}">
                                                <span>{{ trans('cv.apply_button') }}</span>
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
        </div>
    </div>
@endsection
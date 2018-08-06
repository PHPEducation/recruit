@extends('frontend.layouts.master')
@section('after-style')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}"/>
@endsection
@section('content')
    <div>
        <main>
            <div class="grid-container spacing">
                <div class="grid-x grid-margin-x outer-bottom-sm">
                    <div class="cell text-justify">
                        <div class="outer-bottom-sm">
                            <h1>{{ $page->name }}</h1>
                        </div>
                        <img src="{{ $page->thumbnail }}" class="img-responsive image-center"/>
                        <div class="container">
                            <a href="{{ route('frontend.job.apply.get', ['job_id' => $page->id]) }}" class="btn btn-info mx-auto btn-apply">
                                {{ trans('jobmanager.frontend.apply_button') }}
                            </a>
                        </div>

                        @if($page->salary > 0)
                            <hr>
                            <div class=" form-group">
                                <b>{{ trans('jobmanager.frontend.salary') }}</b>
                                <span class="">{{ $page->salary }}</span>
                            </div>@endif
                        <hr>
                        <h3>{{ trans('jobmanager.frontend.description') }}</h3>
                        <div class="container text-justify">
                            {!! $page->description !!}
                        </div>
                        <hr>
                        <h3>{{ trans('jobmanager.frontend.purposes') }}</h3>
                        <div class="container text-justify">
                            {!! $page->purposes !!}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
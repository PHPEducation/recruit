@extends("errors.error_layout")
@section("error_title")
    {{ trans('errors.500.title') }}
@endsection
@section("error_detail")
    <div class="content">
        <div class="title">{{ trans('errors.500.code') }}</div>
        <div class="quote">{{ trans('errors.500.error_title') }}</div>
        <div class="explanation">
            <br>
            <small>
                @php
                    $default_error_message = trans('errors.500.message');
                @endphp
                {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
            </small>
        </div>
    </div>
@endsection

@extends('backpack::layout')

@section('after_styles')
@endsection

@section('header')
    <section class="content-header">
        <h1>
            {{ trans('cv.admin.apply.review') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/dashboard') }}">Admin</a></li>
            <li class="active">{{ trans('cv.admin.apply.review') }}</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="container bg-aqua-gradient text-black">
        <h3 class="">
            {!!  trans('cv.admin.apply.header', ['name' => $cv->user()->name, 'job' => $job->name]) !!}
        </h3>
        <hr>
        <div class="panel panel-default">
            <div class="panel panel-heading">
                {{ trans('cv.frontend.title.basic_information') }}
            </div>
            <div class="show" id="display_information">
                <div class="form-group form-inline">
                    <i class="fa fa-user"></i>
                    <span for="basic_information[middle_name]"> {{ $cv->basic_information->middle_name or '' }}</span>
                    <span for="basic_information[last_name]"> {{ $cv->basic_information->last_name or '' }}</span>
                </div>
                <div class="form-group">
                    <i class="fa fa-home"></i>
                    <span for="basic_information[school]">{{ $cv->basic_information->school or '' }}</span>
                    -
                    <span for="basic_information[class]">{{ $cv->basic_information->class or '' }}</span>
                </div>
                <div class="form-group">
                    <i class="fa fa-birthday-cake"></i> <span
                            for="basic_information[birthday]">{{ $cv->basic_information->birthday or '' }}</span>
                </div>
                <div class="form-group">
                    <i class="fa fa-envelope"></i> <span
                            for="basic_information[email]">{{ $cv->user()->email }}</span>
                </div>
                <div class="form-group">
                    <i class="fa fa-phone"></i> <span
                            for="basic_information[phone]">{{ $cv->basic_information->phone or '' }}</span>
                </div>
            </div>
        </div>
        {{--thông tin chung--}}
        <div id="description_panel">
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    Giới thiệu về bản thân
                </div>

                <div class="panel panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{--Hiển thị thông tin--}}
                            <div class="show form-group" id="description">
                                {!! $cv->description->content or '' !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--king nghiệm--}}
        <div id="experiences_panel">
            <div class="panel panel-warning">
                <div class="panel panel-heading">
                    Kinh nghiệm
                </div>
                <div class="panel panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{--Hiển thị thông tin--}}
                            <div class="show form-group" id="experiences">
                                {!! $cv->experiences->content or '' !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--học vấn--}}
        <div id="studies_panel">
            <div class="panel panel-danger">
                <div class="panel panel-heading">
                    Học vấn
                </div>
                <div class="panel panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{--Hiển thị thông tin--}}
                            <div class="show form-group" id="studies">
                                {!! $cv->studies->content or '' !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--activities--}}
        <div id="activities_panel">
            <div class="panel panel-success">
                <div class="panel panel-heading">
                    Kỹ năng
                </div>
                <div class="panel panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{--Hiển thị thông tin--}}
                            <div class="show form-group" id="activities">
                                {!! $cv->activities->content or '' !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('admin.apply.cv', ['id' => $apply->id, 'status' => '1']) }}">{{ trans('cv.admin.status.pass') }}</a>
            <a class="btn btn-danger" href="{{ route('admin.apply.cv', ['id' => $apply->id, 'status' => '2']) }}">{{ trans('cv.admin.status.fail') }}</a>
        </div>
    </div>


@endsection

@section('after_scripts')

@endsection

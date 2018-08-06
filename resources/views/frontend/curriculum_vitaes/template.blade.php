@extends('frontend.layouts.master')
@section('after-style')
    <style>
        .notice {
            margin-top: 30px;
        }

        .warning {
            color: darkorange;
        }

        #img_contain {
            margin-top: 10px;
            width: 100%;
            margin-left: 7px;

        }

        #imgInp {
            margin-left: 7px;
            background-color: gray;
            width: 95%;
        }

        #imgInp:before, #imgInp:after {
            content: "";
        }

        #avatar {
            width: 95%;
            display: block;
        }

        .edit_button {
            position: absolute;
            right: 15px;
            opacity: 0.5;
            z-index: 999;
        }

        .edit_button:hover {
            opacity: 1;
        }

        #display_information, #update_information {
            margin-top: 20px;
        }

        .basic_information {
            transition: height 1s;
        }

    </style>
@endsection

@section('after-script-header')
    <script>
        var save_url = '{{ route('frontend.cv.update.post', ['cv_id' => $cv->id]) }}';
        var _token = '{{ csrf_token() }}';
    </script>
@endsection
@section('content')
    <div class="container">
        {{--notice--}}
        <div class="notice">
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span class="m-r">
                 <i class="fa fa-fw fa-lg fa-info-circle text-primary"></i>
                <strong>{{ $user->name or '' }}</strong> Bổ sung thông tin hồ sơ của bạn để nhận được nhiều cơ hội phỏng vấn hơn.
            </span>
            </div>
        </div>
        {{--tips--}}

        <div class="tips">
            <div class="panel panel-info">
                <div class="panel panel-heading">
                    Mức độ hoàn chỉnh: <span class='warning'>Chưa hoàn chỉnh</span>
                </div>
                <div class="panel panel-body">
                    <h4>Bạn còn thiếu các nội dung sau</h4>
                    <hr>
                    @if(!$cv->basic_information)
                        <div class="alert alert-warning">
                            <span class="m-r">
                                <i class="fa fa-fw fa-lg fa-info-circle text-primary"></i>
                                Thông tin cơ bản
                            </span>
                        </div>
                    @endif
                    @if(!$cv->description)
                        <div class="alert alert-warning">
                            <span class="m-r">
                                <i class="fa fa-fw fa-lg fa-info-circle text-primary"></i>
                                Mô tả bản thân
                            </span>
                        </div>
                    @endif
                    @if(!$cv->skills)
                        <div class="alert alert-warning">
                            <span class="m-r">
                                <i class="fa fa-fw fa-lg fa-info-circle text-primary"></i>
                                Kĩ năng bản thân
                            </span>
                        </div>
                    @endif
                    @if(!$cv->experiences)
                        <div class="alert alert-warning">
                            <span class="m-r">
                                <i class="fa fa-fw fa-lg fa-info-circle text-primary"></i>
                                Kinh nghiệm của bản thân
                            </span>
                        </div>
                    @endif
                    @if(!$cv->studies)
                        <div class="alert alert-warning">
                            <span class="m-r">
                                <i class="fa fa-fw fa-lg fa-info-circle text-primary"></i>
                                Học vấn
                            </span>
                        </div>
                    @endif
                    @if(!$cv->activities)
                        <div class="alert alert-warning">
                            <span class="m-r">
                                <i class="fa fa-fw fa-lg fa-info-circle text-primary"></i>
                               Các hoạt động
                            </span>
                        </div>
                    @endif
                    @if(!$cv->socials)
                        <div class="alert alert-warning">
                            <span class="m-r">
                                <i class="fa fa-fw fa-lg fa-info-circle text-primary"></i>
                               Thông tin về mạng xã hội của bạn
                            </span>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{--Thông tin cơ bản--}}
        <div id="basic_information_panel">
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    Thông tin chung
                </div>
                <div class="panel panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div id='img_contain'>
                                <img id="avatar" align='middle'
                                     src="http://www.clker.com/cliparts/c/W/h/n/P/W/generic-image-file-icon-hi.png"
                                     alt="your image" title=''/>
                            </div>
                            <input type='file' id="imgInp"/>

                        </div>
                        <div class="col-md-9">
                            <div class="edit_button">
                                <button id="basic_information" class="btn btn-info" active="0">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </div>
                            {{--Hiển thị thông tin--}}
                            <div class="show" id="display_information">
                                <div class="form-group form-inline">
                                    <i class="fa fa-user"></i>
                                    <label for="basic_information[middle_name]">{{ $cv->basic_information->middle_name or '' }}</label>
                                    <label for="basic_information[last_name]"> {{ $cv->basic_information->last_name or '' }}</label>
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-home"></i>
                                    <label for="basic_information[school]">{{ $cv->basic_information->school or '' }}</label>
                                    -
                                    <label for="basic_information[class]">{{ $cv->basic_information->class or '' }}</label>
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-birthday-cake"></i> <label
                                            for="basic_information[birthday]">{{ $cv->basic_information->birthday or '' }}</label>
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-envelope"></i> <label
                                            for="basic_information[email]">{{ $user->email }}</label>
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-phone"></i> <label
                                            for="basic_information[phone]">{{ $cv->basic_information->phone or '' }}</label>
                                </div>
                            </div>
                            {{--form cập nhật thông tin--}}
                            <div class="hide" id="update_information">
                                <div class="col-md-4 form-group">
                                    <label for="basic_information[middle_name]">{{ trans('cv.middle_name') }}</label>
                                    <input type="text" id="basic_information_middle_name" class="form-control"
                                           value="{{ $cv->basic_information->middle_name or '' }}">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="basic_information[last_name]">{{ trans('cv.last_name') }}</label>
                                    <input type="text" class="form-control" id="basic_information_last_name"
                                           value="{{ $cv->basic_information->last_name or '' }}">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="basic_information[birthday]">{{ trans('cv.birthday') }}</label>
                                    <input type="date" class="form-control" id="basic_information_birthday"
                                           value="{{ $cv->basic_information->birthday or '' }}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="basic_information[school]">{{ trans('cv.school') }}</label>
                                    <input type="text" class="form-control" id="basic_information_school"
                                           value="{{ $cv->basic_information->school or '' }}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="basic_information[class]">{{ trans('cv.class') }}</label>
                                    <input type="text" class="form-control" id="basic_information_class"
                                           value="{{ $cv->basic_information->class or '' }}">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="basic_information[email]">{{ trans('cv.email') }}</label>
                                    <input type="text" class="form-control" id="basic_information_email" disabled
                                           value="{{ $user->email }}">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="basic_information[phone]">{{ trans('cv.phone') }}</label>
                                    <input type="text" class="form-control" id="basic_information_phone"
                                           value="{{ $cv->basic_information->phone or '' }}">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="pull-right btn btn-info btn-save">{{ trans('cv.save_button') }}</div>
                                    <div class="pull-right btn btn-danger">{{ trans('cv.cancel_button') }}</div>
                                </div>

                            </div>
                        </div>

                    </div>
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
                            <div class="edit_button">
                                <button id="description_button" class="btn btn-info" active="0">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </div>
                            {{--Hiển thị thông tin--}}
                            <div class="show form-group" id="description">
                        <textarea name="description" id="description_editor" cols="30" rows="10"
                                  class="form-control">{!! $cv->description->content or '' !!}</textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="pull-right btn btn-info btn-save hide">{{ trans('cv.save_button') }}</div>
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
                            <div class="edit_button">
                                <button id="experiences_button" class="btn btn-info" active="0">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </div>
                            {{--Hiển thị thông tin--}}
                            <div class="show form-group" id="experiences">
                                <textarea name="experiences" id="experiences_editor" cols="30" rows="10"
                                          class="form-control">{!! $cv->experiences->content or '' !!}</textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="pull-right btn btn-info btn-save hide">{{ trans('cv.save_button') }}</div>
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
                            <div class="edit_button">
                                <button id="studies_button" class="btn btn-info" active="0">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </div>
                            {{--Hiển thị thông tin--}}
                            <div class="show form-group" id="studies">
                                <textarea name="studies" id="studies_editor" cols="30" rows="10"
                                          class="form-control">{{ $cv->studies->content or '' }}</textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="pull-right btn btn-info btn-save hide">{{ trans('cv.save_button') }}</div>
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
                            <div class="edit_button">
                                <button id="studies_button" class="btn btn-info" active="0">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </div>
                            {{--Hiển thị thông tin--}}
                            <div class="show form-group" id="studies">
                                <textarea name="studies" id="studies_editor" cols="30" rows="10"
                                          class="form-control">{{ $cv->studies->content or '' }}</textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="pull-right btn btn-info btn-save hide">{{ trans('cv.save_button') }}</div>
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
                            <div class="edit_button">
                                <button id="activities_button" class="btn btn-info" active="0">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </div>
                            {{--Hiển thị thông tin--}}
                            <div class="show form-group" id="activities">
                                <textarea name="description" id="activities_editor" cols="30" rows="10"
                                          class="form-control">{!! $cv->activities->content or '' !!}</textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="pull-right btn btn-info btn-save hide">{{ trans('cv.save_button') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('after-script-footer')
    <script src="{{ asset('vendor/backpack/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/backpack/ckeditor/adapters/jquery.js') }}"></script>


    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#avatar').attr('src', e.target.result);
                    $('#avatar').hide();
                    $('#avatar').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function () {
            readURL(this);
        });
    </script>

    <script>
        function saveWithAjax(data){
            $.ajax(
                {
                    url: save_url,
                    type: "POST",
                    dataType: 'json',
                    data: {
                        '_token': _token,
                        'data': data
                    }, success: function (res) {

                    }, error: function () {

                    }
                }
            );
        };

        $('#basic_information').click(function () {
            var status = $(this).attr('active');
            var display = $('#display_information');
            var update = $('#update_information');
            if (status == 0) {
                $(this).attr('active', 1);
                $(this).addClass('hide');
                display.removeClass('show');
                display.addClass('hide');
                update.removeClass('hide');
                update.addClass('show');
            } else {
                $(this).attr('active', 0);
                $(this).removeClass('hide');
                update.removeClass('show');
                update.addClass('hide');
                display.removeClass('hide');
                display.addClass('show');
            }
        });

        $('#basic_information_panel .btn-save').click(function () {
            $('#basic_information').attr('active', 0);
            $('#basic_information').removeClass('hide');
            $('#update_information').removeClass('show');
            $('#update_information').addClass('hide');
            $('#display_information').removeClass('hide');
            $('#display_information').addClass('show');


            var data = {
                basic_information: {
                    'middle_name': $('#basic_information_middle_name').val(),
                    'last_name': $('#basic_information_last_name').val(),
                    'school': $('#basic_information_school').val(),
                    'class': $('#basic_information_class').val(),
                    'phone': $('#basic_information_phone').val(),
                    'email': $('#basic_information_email').val(),
                    'birthday': $('#basic_information_birthday').val(),
                }
            };
            saveWithAjax(data);
        });

        // description action
        $('#description_button').click(function () {
            var status = $(this).attr('active');
            if (status == 0) {
                $(this).addClass('hide');
                $('#description_panel .btn-save').removeClass('hide');
                $('#description_editor').ckeditor({
                    "filebrowserBrowseUrl": "{{ url(config('backpack.base.route_prefix').'/elfinder/ckeditor') }}",
                }).focus();
                $(this).attr('active', 1);
                CKEDITOR.instances['description_editor'].setReadOnly(false);
                $('#cke_description_editor .cke_reset_all').removeClass('hide');

            } else {
                $(this).attr('active', 0);
                CKEDITOR.instances['description_editor'].setReadOnly(true);
                $('#cke_description_editor .cke_reset_all').addClass('hide');
                $('#description_panel .btn-save').addClass('hide');
            }
        });
        $('#description_panel .btn-save').click(function () {
            $('#description_button').attr('active', 0);
            $('#description_button').removeClass('hide');
            CKEDITOR.instances['description_editor'].setReadOnly(true);
            $('#cke_description_editor .cke_reset_all').addClass('hide');
            $('#description_panel .btn-save').addClass('hide');

            var data = {
                description: {
                    content: $('#description_editor').val(),
                }
            }
            saveWithAjax(data);
        });

        // Skill action
        $('#skills_button').click(function () {
            var status = $(this).attr('active');
            if (status == 0) {
                $(this).addClass('hide');
                $('#skills_panel .btn-save').removeClass('hide');
                $('#skills_editor').ckeditor({
                    "filebrowserBrowseUrl": "{{ url(config('backpack.base.route_prefix').'/elfinder/ckeditor') }}",
                }).focus();
                $(this).attr('active', 1);
                CKEDITOR.instances['skills_editor'].setReadOnly(false);
                $('#cke_skills_editor .cke_reset_all').removeClass('hide');

            } else {
                $(this).attr('active', 0);
                CKEDITOR.instances['skills_editor'].setReadOnly(true);
                $('#cke_skills_editor .cke_reset_all').addClass('hide');
                $('#skills_panel .btn-save').addClass('hide');
            }
        });
        $('#skills_panel .btn-save').click(function () {
            $('#skills_button').attr('active', 0);
            $('#skills_button').removeClass('hide');
            CKEDITOR.instances['skills_editor'].setReadOnly(true);
            $('#cke_skills_editor .cke_reset_all').addClass('hide');
            $('#skills_panel .btn-save').addClass('hide');

            var data = {
                skills: {
                    content: $('#skills_editor').val(),
                }
            }
            saveWithAjax(data);
        });


        // Skill action
        $('#experiences_button').click(function () {
            var status = $(this).attr('active');
            if (status == 0) {
                $(this).addClass('hide');
                $('#experiences_panel .btn-save').removeClass('hide');
                $('#experiences_editor').ckeditor({
                    "filebrowserBrowseUrl": "{{ url(config('backpack.base.route_prefix').'/elfinder/ckeditor') }}",
                }).focus();
                $(this).attr('active', 1);
                CKEDITOR.instances['experiences_editor'].setReadOnly(false);
                $('#cke_experiences_editor .cke_reset_all').removeClass('hide');

            } else {
                $(this).attr('active', 0);
                CKEDITOR.instances['experiences_editor'].setReadOnly(true);
                $('#cke_experiences_editor .cke_reset_all').addClass('hide');
                $('#experiences_panel .btn-save').addClass('hide');
            }
        });
        $('#experiences_panel .btn-save').click(function () {
            $('#experiences_button').attr('active', 0);
            $('#experiences_button').removeClass('hide');
            CKEDITOR.instances['experiences_editor'].setReadOnly(true);
            $('#cke_experiences_editor .cke_reset_all').addClass('hide');
            $('#experiences_panel .btn-save').addClass('hide');

            var data = {
                experiences: {
                    content: $('#experiences_editor').val(),
                }
            }
            saveWithAjax(data);
        });

        // Studies action
        $('#studies_button').click(function () {
            var status = $(this).attr('active');
            if (status == 0) {
                $(this).addClass('hide');
                $('#studies_panel .btn-save').removeClass('hide');
                $('#studies_editor').ckeditor({
                    "filebrowserBrowseUrl": "{{ url(config('backpack.base.route_prefix').'/elfinder/ckeditor') }}",
                }).focus();
                $(this).attr('active', 1);
                CKEDITOR.instances['studies_editor'].setReadOnly(false);
                $('#cke_studies_editor .cke_reset_all').removeClass('hide');

            } else {
                $(this).attr('active', 0);
                CKEDITOR.instances['studies_editor'].setReadOnly(true);
                $('#cke_studies_editor .cke_reset_all').addClass('hide');
                $('#studies_panel .btn-save').addClass('hide');
            }
        });
        $('#studies_panel .btn-save').click(function () {
            $('#studies_button').attr('active', 0);
            $('#studies_button').removeClass('hide');
            CKEDITOR.instances['studies_editor'].setReadOnly(true);
            $('#cke_studies_editor .cke_reset_all').addClass('hide');
            $('#studies_panel .btn-save').addClass('hide');

            var data = {
                studies: {
                    content: $('#studies_editor').val(),
                }
            }
            saveWithAjax(data);
        });

        // Studies action
        $('#activities_button').click(function () {
            var status = $(this).attr('active');
            if (status == 0) {
                $(this).addClass('hide');
                $('#activities_panel .btn-save').removeClass('hide');
                $('#activities_editor').ckeditor({
                    "filebrowserBrowseUrl": "{{ url(config('backpack.base.route_prefix').'/elfinder/ckeditor') }}",
                }).focus();
                $(this).attr('active', 1);
                CKEDITOR.instances['activities_editor'].setReadOnly(false);
                $('#cke_activities_editor .cke_reset_all').removeClass('hide');

            } else {
                $(this).attr('active', 0);
                CKEDITOR.instances['activities_editor'].setReadOnly(true);
                $('#cke_activities_editor .cke_reset_all').addClass('hide');
                $('#activities_panel .btn-save').addClass('hide');
            }
        });
        $('#activities_panel .btn-save').click(function () {
            $('#activities_button').attr('active', 0);
            $('#activities_button').removeClass('hide');
            CKEDITOR.instances['activities_editor'].setReadOnly(true);
            $('#cke_activities_editor .cke_reset_all').addClass('hide');
            $('#activities_panel .btn-save').addClass('hide');

            var data = {
                activities: {
                    content: $('#activities_editor').val(),
                }
            }
            saveWithAjax(data);
        });
    </script>
@endsection
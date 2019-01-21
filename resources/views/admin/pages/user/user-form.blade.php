@extends('admin.layouts.main', ['title' => 'Member Management'])

@section('custom-css')
    <link type="text/css" href="{{ asset('plugins/parsley/src/parsley.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/ionRangeSlider/css/ion.rangeSlider.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/bootstrap-combobox/css/bootstrap-combobox.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/custom/avatar-upload.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- begin page-header -->
    <h1 class="page-header">Edit Member Info</h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            </div>
            <h4 class="panel-title">Member Code: {{$userInfo->member_code}}</h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="row">
            <!-- begin col-8 -->
            <div class="panel-body col-md-8 offset-md-2">
                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 text-inverse"></legend>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Username</label>
                    <div class="col-md-6">
                        <input type="text" name="username" placeholder="admin" class="form-control" value="{{ $userInfo->username }}" disabled>
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Email <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="email" placeholder="admin.flamehaze@mfu.com" class="form-control" value="{{ $userInfo->email }}">
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">First Name <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="firstname" placeholder="Admin" class="form-control" value="{{ $userInfo->nickname }}">
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Last Name <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="lastname" placeholder="Admin" class="form-control">
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Date Of Birth</label>
                    <div class="col-md-6">
                        <div class="input-group date" id="datepicker-autoClose" data-date-start-date="Date.default">
                            <input type="text" class="form-control" data-date-format="yyyy-mm-dd" placeholder="01-01-1990" value="{{ $userInfo->dob }}">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Gender</label>
                    <div class="col-md-9">
                        <div class="radio radio-css is-valid">
                            <input type="radio" name="gender" id="male" value="0" checked="{{$userInfo->gender == 'Male' ? 'checked' : ''}}">
                            <label for="male">Male</label>
                        </div>
                        <div class="radio radio-css is-invalid">
                            <input type="radio" name="gender" id="female" value="1" checked="{{$userInfo->gender == 'Female' ? 'checked' : ''}}">
                            <label for="female">Female</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Avatar</label>
                    <div class="col-md-6 avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url({{ asset("img/user/$userInfo->avatar") }});">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Diamond<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="coin" placeholder="0" class="form-control" value="{{ $userInfo->coin }}">
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Level<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="level" placeholder="1" class="form-control" value="{{ $userInfo->level }}">
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Current Experience</label>
                    <div class="col-md-6" style="margin: 5px 0px">
                        <div class="progress rounded-corner m-b-15" style="height: 1.5rem">
                            <div class="progress-bar bg-purple progress-bar-striped progress-bar-animated" style="width: 80%">{{ $userInfo->exp }}/{{ $userInfo->exp }}</div>
{{--                            <div class="progress-bar bg-purple progress-bar-striped progress-bar-animated" style="width: 80%">{{ $userInfo->exp }}/{{ $userInfo->exp_required }}</div>--}}
                        </div>
                    </div>
                </div>
                <div class="form-group row m-b-10">
                    <div class="col-md-12 text-md-center">
                        <button type="submit" class="btn btn-sm btn-warning m-r-5">Reset</button>
                        <button type="submit" class="btn btn-sm btn-success m-r-5">Submit</button>
                    </div>

                </div>

            </div>
            <!-- end col-8 -->
        </div>
        <!-- end panel-body -->
    </div>
    <!-- end panel -->
@endsection

@section('custom-js')
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('plugins/bootstrap-daterangepicker/moment.js') }}"></script>
    <script src="{{ asset('plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-combobox/js/bootstrap-combobox.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-show-password/bootstrap-show-password.js') }}"></script>
    <script src="{{ asset('js/demo/form-plugins.demo.min.js') }}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script src="{{ asset('js/admin/avatar-upload.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
            FormPlugins.init();
        });
    </script>
@endsection
@extends('admin.layouts.main', ['title' => 'Member Management'])

@section('custom-css')
    <link type="text/css" href="{{ asset('plugins/parsley/src/parsley.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/password-indicator/css/password-indicator.css') }}" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/custom/avatar-upload.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- begin page-header -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Member Info Validation</h1>
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
                        <input type="text" name="email" placeholder="admin.flamehaze@mfu.com" class="form-control">
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Nick Name <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="firstname" placeholder="John" class="form-control">
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Last Name <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="lastname" placeholder="Smith" class="form-control">
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
                            <input type="radio" name="gender" id="male" value="1" checked="{{$userInfo->gender == 'Male' ? 'checked' : ''}}">
                            <label for="male">Male</label>
                        </div>
                        <div class="radio radio-css is-invalid">
                            <input type="radio" name="gender" id="female" value="0" checked="{{$userInfo->gender == 'Female' ? 'checked' : ''}}">
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
                    <label class="col-md-3 col-form-label text-md-right">Country</label>
                    <div class="col-md-6">
                        <select class="form-control selectpicker" data-size="10" data-live-search="true" data-style="btn-info" style="display: none;">
                            <option value="" selected="">Select a Country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                        </select><div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle selectpicker btn-info" data-toggle="dropdown" title="Select a Country" aria-expanded="false"><span class="filter-option pull-left">Select a Country</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;"><div class="bootstrap-select-searchbox"><input type="text" class="input-block-level form-control"></div><ul class="dropdown-menu inner selectpicker" role="menu"><li rel="0" class="selected"><a tabindex="0" class="" style=""><span class="text">Select a Country</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="1"><a tabindex="0" class="" style=""><span class="text">Afghanistan</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="2"><a tabindex="0" class="" style=""><span class="text">Albania</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="3"><a tabindex="0" class="" style=""><span class="text">Algeria</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="4"><a tabindex="0" class="" style=""><span class="text">American Samoa</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="5"><a tabindex="0" class="" style=""><span class="text">Andorra</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="6"><a tabindex="0" class="" style=""><span class="text">Angola</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="7"><a tabindex="0" class="" style=""><span class="text">Anguilla</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="8"><a tabindex="0" class="" style=""><span class="text">Antarctica</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="9" class=""><a tabindex="0" class="" style=""><span class="text">Antigua and Barbuda</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li></ul></div></div>
                    </div>
                </div>

                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label text-md-right">Diamond<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="coin" placeholder="Smith" class="form-control">
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
                            <div class="progress-bar bg-purple progress-bar-striped progress-bar-animated" style="width: 80%">{{ $userInfo->exp }}</div>
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
    <script src="../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="../assets/plugins/password-indicator/js/password-indicator.js"></script>
    <script src="../assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
    <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="../assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

    <script src="{{ asset('plugins/bootstrap-daterangepicker/moment.js') }}"></script>
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
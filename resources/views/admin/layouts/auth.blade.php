<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>My Universe | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/bootstrap/4.0.0/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/font-awesome/5.0/css/fontawesome-all.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/animate/animate.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/default/style.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/default/style-responsive.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/default/theme/default.css') }}" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
<!-- begin #page-loader -->
<div id="page-loader" class="fade show"><span class="spinner"></span></div>
<!-- end #page-loader -->

<div class="login-cover">
    <div class="login-cover-image" style="background-image: url({{ asset('img/login-bg/login-bg-17.jpg') }})" data-id="login-cover-image"></div>
    <div class="login-cover-bg"></div>
</div>
<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login login-v2" data-pageload-addclass="animated fadeIn">
        <!-- begin brand -->
        <div class="login-header">
            <div class="brand">
                <span class="logo"></span> <b>My</b> Universe
                <small>Life isn't fair. But it's still <b>good...</b></small>
            </div>
            <div class="icon">
                <i class="fa fa-lock"></i>
            </div>
        </div>
        <!-- end brand -->
        <!-- begin content -->
        @yield('content')
        <!-- end content -->
    </div>
    <!-- end login -->

    <ul class="login-bg-list clearfix">
        <li class="active"><a href="javascript:;" data-click="change-bg" data-img="{{ asset('img/login-bg/login-bg-17.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-17.jpg') }})"></a></li>
        <li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('img/login-bg/login-bg-16.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-16.jpg') }})"></a></li>
        <li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('img/login-bg/login-bg-15.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-15.jpg') }})"></a></li>
        <li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('img/login-bg/login-bg-14.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-14.jpg') }})"></a></li>
        <li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('img/login-bg/login-bg-13.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-13.jpg') }})"></a></li>
        <li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('img/login-bg/login-bg-12.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-12.jpg') }})"></a></li>
    </ul>
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('plugins/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('plugins/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('js/theme/default.min.js') }}"></script>
<script src="{{ asset('js/apps.min.js') }}"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('js/admin/auth/admin-login.js') }}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        AdminLogin.init();
    });
</script>
</body>
</html>

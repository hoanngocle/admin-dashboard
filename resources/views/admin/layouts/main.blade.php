<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Color Admin | Dashboard v2</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- include css-->
        @include('admin.assests.css')
    </head>
    <body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

        <!-- partials #header -->
        @include('admin.partials.header')

        <!-- partials #sidebar -->
        @include('admin.partials.sidebar')

        <!--  #content -->
        <div id="content" class="content">

            <!-- partials breadcrumb -->
            @include('admin.partials.breadcrumb')

            <!-- page-header -->
            <h1 class="page-header">Dashboard v2 <small>header small text goes here...</small></h1>

            <!-- page #content -->
            @yield('content')

        </div>

        <!-- partials - scroll to top btn -->
        @include('admin.partials.up-to-top')
    </div>
    <!-- end page container -->

    <!-- include js -->
    @include('admin.assests.js')
    </body>
</html>

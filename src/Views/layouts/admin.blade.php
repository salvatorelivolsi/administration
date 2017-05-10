<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Administration">
    <meta name="author" content="ComCafe">
    <!-- App Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/vendor/admin/images/favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App Title -->
    <title>Administration - @yield('page-title')</title>

    <link href="{{ asset('assets/vendor/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/custom.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/vendor/admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/plugins/bootstrap-sweetalert/sweet-alert.css') }}" rel="stylesheet" type="text/css" />

    @yield('stylesheet')

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('assets/vendor/admin/js/modernizr.min.js') }}"></script>
    @yield('javascript-header')

</head>
<body>
@include('layouts.admin.parts.header')


<div class="wrapper">
    <div class="container">

        <!-- Page-Title -->
        <div class="row m-b-15">
            <div class="col-sm-12">
                <div class="btn-group pull-right">
                    @yield('header-buttons')

                </div>

                <h4 class="page-title">@yield('page-title')</h4>

            </div>
        </div>
        @include('parts.flash')
        @yield('content')

        @include('layouts.admin.parts.footer')
    </div> <!-- end container -->
</div>
<!-- end wrapper -->


<!-- jQuery  -->
<script src="{{ asset('assets/vendor/admin/js/jquery.min.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/js/bootstrap.min.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/js/detect.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/js/fastclick.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/js/jquery.slimscroll.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/js/jquery.blockUI.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/js/waves.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/js/wow.min.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/js/jquery.nicescroll.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/js/jquery.scrollTo.min.js') }}?v={{ env('JS_VS', time()) }}"></script>

<script src="{{ asset('assets/vendor/admin/plugins/notifyjs/js/notify.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/plugins/notifications/notify-metro.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/plugins/tinymce/tinymce.min.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/plugins/bootstrap-sweetalert/sweet-alert.min.js') }}?v={{ env('JS_VS', time()) }}"></script>

<!-- Plugins js -->
@yield('javascript-plugins')

<!-- App core js -->
<script src="{{ asset('assets/vendor/admin/js/jquery.core.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/js/jquery.app.js') }}?v={{ env('JS_VS', time()) }}"></script>
<script src="{{ asset('assets/vendor/admin/js/custom.js') }}?v={{ env('JS_VS', time()) }}"></script>

@yield('javascript')

</body>
</html>
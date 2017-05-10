<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Administration">
    <meta name="author" content="ComCafe">

    <link rel="shortcut icon" href="{{ asset('assets/vendor/admin/images/favicon_1.ico') }}">

    <title>Administration</title>

    <link href="{{ asset('assets/vendor/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/admin/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('assets/vendor/admin/js/modernizr.min.js') }}"></script>

</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
        @yield('content')
    </div>
</div>

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('assets/vendor/admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/admin/js/detect.js') }}"></script>
<script src="{{ asset('assets/vendor/admin/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/vendor/admin/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/vendor/admin/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/vendor/admin/js/waves.js') }}"></script>
<script src="{{ asset('assets/vendor/admin/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/vendor/admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/vendor/admin/js/jquery.scrollTo.min.js') }}"></script>


<script src="{{ asset('assets/vendor/admin/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/vendor/admin/js/jquery.app.js') }}"></script>

</body>
</html>
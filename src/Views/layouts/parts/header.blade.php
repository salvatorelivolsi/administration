
<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <a href="{{ route('admin::dashboard') }}" class="logo"><span>{{ config('app.admin') }}</span></a>
            </div>
            <!-- End Logo container-->


            @include('layouts.admin.parts.top')

        </div>
    </div>

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    {!! $menuHorizontal !!}
                </ul>
                <!-- End navigation menu        -->
            </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->
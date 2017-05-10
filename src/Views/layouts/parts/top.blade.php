<div class="menu-extras">

    <ul class="nav navbar-nav navbar-right pull-right">


        <li class="dropdown navbar-c-items">
            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-plus"></i></a>
            <ul class="dropdown-menu">
                {!! $menuTop !!}
            </ul>
        </li>
        <li class="dropdown navbar-c-items">
            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-user"></i></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin::setting.index') }}"><i class="fa fa-cogs text-primary m-r-10"></i> Configuration</a></li>
                <li class="divider"></li>
                <li><a href="{{ route('admin::logout') }}"><i class="ti-power-off text-danger m-r-10"></i> Se déconnecter</a></li>

            </ul>
        </li>
    </ul>
    <div class="menu-item">
        <!-- Mobile menu toggle-->
        <a class="navbar-toggle">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
        <!-- End mobile menu toggle-->
    </div>
</div>
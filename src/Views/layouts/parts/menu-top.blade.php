@foreach($menus as $menu)
    <li><a href="{{ route(array_get($menu,'url'),array_get($menu,'params',[])) }}"><i class="text-primary {{ array_get($menu,'icon') }} m-r-10"></i> {{ array_get($menu,'label') }}</a></li>
@endforeach
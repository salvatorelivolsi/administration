@foreach($menus as $menu)
    <?php $children = array_get($menu, 'children') ?>
    <li class="{{ !empty($children) ? 'has-submenu':'' }}">
        <a href="{{ array_get($menu, 'url') != '#' ? route(array_get($menu, 'url'),array_get($menu, 'params')) : '#' }}">
            @if(array_get($menu, 'icon'))
                <i class="{{ array_get($menu, 'icon') }}"></i>
            @endif
            {{ array_get($menu, 'label') }}
        </a>
        @if(!empty($children))
            <ul class="submenu ">
                {!! with(new \App\Services\MenuService())->adminHorizontal(array_get($menu, 'children')) !!}
            </ul>
        @endif
    </li>
@endforeach
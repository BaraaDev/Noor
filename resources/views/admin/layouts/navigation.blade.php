<div class="card card-sidebar-mobile">
    <ul class="nav nav-sidebar" data-nav-type="accordion">
        <!-- Main -->
        <li class="nav-item-header mt-0"><div class="text-uppercase font-size-xs line-height-xs">{{__('admin/admin.navigation_menu_settings')}}</div> <i class="icon-menu" title="{{__('admin/admin.navigation_menu_settings')}}"></i></li>
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link" target="_blank">
                <i class="icon-home5"></i>
                <span>
                   {{__('admin/admin.visit_site')}}
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('home.dashboard')}}" class="nav-link {{active()->route('home.dashboard')}}">
                <i class="icon-home4"></i>
                <span>
                   {{__('admin/admin.dashboard')}}
                </span>
            </a>
        </li>
        <li class="nav-item-header mt-0">
            <div class="text-uppercase font-size-xs line-height-xs">{{__('admin/admin.navigation_bar')}}</div><i class="icon-menu" title="Main"></i>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('users.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('users.index')}}" class="nav-link {{active()->route('users.*')}}">
                <i class="icon-users4"></i>
                <span>{{__('admin/user.users')}}</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="{{__('admin/user.users')}}">
                <li class="nav-item"><a href="{{route('users.index')}}" class="nav-link {{active()->route('users.index')}}"><span><span>{{__('admin/user.all_users')}}</span></span></a></li>
                <li class="nav-item"><a href="{{route('users.create')}}" class="nav-link {{active()->route('users.create')}}"><span>{{__('admin/user.create_user')}}</span></a></li>
            </ul>
        </li>

        <li class="nav-item-header mt-0">
            <div class="text-uppercase font-size-xs line-height-xs">{{__('admin/admin.basic_data')}}</div><i class="icon-menu" title="Main"></i>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('categories.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('categories.index')}}" class="nav-link {{active()->route('categories.*')}}">
                <i class="icon-grid6"></i>
                <span>{{__('admin/category.categories')}}</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="{{__('admin/category.categories')}}">
                <li class="nav-item"><a href="{{route('categories.index')}}" class="nav-link {{active()->route('categories.index')}}"><span><span>{{__('admin/category.categories')}}</span></span></a></li>
                <li class="nav-item"><a href="{{route('categories.create')}}" class="nav-link {{active()->route('categories.create')}}"><span>{{__('admin/category.add_category')}}</span></a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('real_estates.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('real_estates.index')}}" class="nav-link {{active()->route('real_estates.*')}}">
                <i class="icon-home7"></i>
                <span>{{__('admin/real_estate.real_estates')}}</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="{{__('admin/real_estate.real_estates')}}">
                <li class="nav-item"><a href="{{route('real_estates.index')}}" class="nav-link {{active()->route('real_estates.index')}}"><span><span>{{__('admin/real_estate.real_estates')}}</span></span></a></li>
                <li class="nav-item"><a href="{{route('real_estates.create')}}" class="nav-link {{active()->route('real_estates.create')}}"><span>{{__('admin/real_estate.add_real_estate')}}</span></a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('projects.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('projects.index')}}" class="nav-link {{active()->route('projects.*')}}">
                <i class="icon-briefcase"></i>
                <span>{{__('admin/projects.projects')}}</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="{{__('admin/projects.projects')}}">
                <li class="nav-item"><a href="{{route('projects.index')}}" class="nav-link {{active()->route('projects.index')}}"><span><span>{{__('admin/projects.projects')}}</span></span></a></li>
                <li class="nav-item"><a href="{{route('projects.create')}}" class="nav-link {{active()->route('projects.create')}}"><span>{{__('admin/projects.add_projects')}}</span></a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('icons.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('icons.index')}}" class="nav-link {{active()->route('icons.*')}}">
                <i class="icon-thumbs-up2"></i>
                <span>{{__('admin/icons.icon')}}</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="{{__('admin/icons.icon')}}">
                <li class="nav-item"><a href="{{route('icons.index')}}" class="nav-link {{active()->route('icons.index')}}"><span><span>{{__('admin/icons.icon')}}</span></span></a></li>
                <li class="nav-item"><a href="{{route('icons.create')}}" class="nav-link {{active()->route('icons.create')}}"><span>{{__('admin/icons.add_icons')}}</span></a></li>
            </ul>
        </li>

        <li class="nav-item-header mt-0"><div class="text-uppercase font-size-xs line-height-xs">{{__('admin/admin.menu_settings')}}</div> <i class="icon-menu" title="Main"></i></li>
        <li class="nav-item nav-item-submenu">
            <a href="{{route('settings.index')}}" class="nav-link {{active()->route('settings.*')}}">
                <i class="icon-cog3"></i>
                <span>{{__('admin/admin.settings')}}</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="{{__('admin/admin.settings')}}">
                @if (count($settings) == 0)
                    <li class="nav-item"><a href="{{route('settings.create')}}" class="nav-link {{active()->route('settings.create')}}"><span>{{__('admin/admin.create_settings')}}</span></a></li>
                @else
                    <li class="nav-item"><a href="{{route('settings.edit',$setting->id)}}" class="nav-link {{active()->route('settings.edit',$setting->id)}}"><span>{{__('admin/admin.edit_settings')}}</span></a></li>
                @endif
            </ul>
        </li>
        <!-- /main -->
    </ul>
</div>

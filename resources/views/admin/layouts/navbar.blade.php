<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark ">
    <div class="navbar-brand">
        <a href="{{url('/')}}" class="d-inline-block">
            <img src="{{asset('admin/global_assets/images/logo_light.png')}}" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block sidebarnav">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

        </ul>

        <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

        <ul class="navbar-nav">

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-people"></i>
                    <span class="d-md-none ml-2">{{__('admin/user.users')}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">{{__('admin/user.Latest_users')}}</span>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            @foreach($users as $user)
                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{$user->photo}}" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">{{$user->name}}</a>
                                    <span class="d-block text-muted font-size-sm">{{$user->location}}</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark @if($user->status == 1) border-success @else border-danger @endif "></span></div>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="{{route('users.index')}}" class="text-grey mr-auto">{{__('admin/user.all_users')}}</a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="d-md-none ml-2">الرسائل</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">{{$contactUsCount}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">الرسائل</span>
                        <a href="#" class="text-default"><i class="icon-compose"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            @if(count($contacts))
                                @foreach($contacts as $contact)
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="{{asset('website/users/avatar.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">{!! \Illuminate\Support\Str::limit($contact->name, $limit = 52, $end = '...' ) !!}</span>
                                                <span class="text-muted float-right font-size-sm">{{$contact->created_at->format('H:i')}}</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">{{$contact->message}}</span>
                                    </div>
                                </li>
                                @endforeach
                            @else
                                لا توجد رسائل
                            @endif
                        </ul>
                    </div>

                    <div class="dropdown-content-footer justify-content-center p-0">
                        <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown dropdown-user">
                <a href="{{route('profile.index')}}" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="{{auth()->user()->photo}}" class="rounded-circle mr-2" height="34" alt="">
                    <span>{{auth()->user()->name}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route('profile.index')}}" class="dropdown-item"><i class="icon-user"></i>{{__('admin/user.profile')}}</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('profile.index')}}" class="dropdown-item"><i class="icon-cog5"></i>{{__('admin/user.account_settings')}}</a>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="icon-switch2"></i>{{__('auth.Logout')}}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div><!-- /main navbar -->

@extends('admin.layouts.app')

@section('titleDashboard')
    / {{__('admin/user.users')}}
@endsection

@section('content')
    <div class="page-header border-bottom-0">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline border-0">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>{{__('admin/admin.dashboard')}}</a>
                    <span class="breadcrumb-item active">{{__('admin/user.users')}}</span>
                </div>
            </div>
        </div>


        <div class="page-header-content header-elements-md-inline">

            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">{{__('admin/admin.home')}}</span> - {{__('admin/user.users')}}</h4>
            </div>

            <div class="header-elements d-none mb-3 mb-md-0">
                <div class="d-flex justify-content-center">
                    <a href="{{route('users.create')}}" class="btn btn-link btn-float text-default">
                        <i class="icon-user-plus text-indigo-400"></i>
                        <span>{{__('admin/user.add_user')}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Content area -->
    <div class="content">
        <!-- Search field -->
        <div class="card">
            <div class="card-body">
                <h5 class="mb-3">{{__('admin/user.search_user')}}</h5>

                <form action="" method="get">
                    <div class="input-group mb-3">
                        <div class="form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control form-control-lg" name="keyword" value="" placeholder="{{__('admin/admin.search_here')}}">
                            <div class="form-control-feedback form-control-feedback-lg">
                                <i class="icon-search4 text-muted"></i>
                            </div>
                        </div>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary btn-lg">{{__('admin/admin.search')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /search field -->

        <!-- Collapsible lists -->
        @include('admin.layouts.messages.message')
        <div class="row">
            <div class="col-md-12">
                <!-- Custom handle -->
                <div class="card ">
                    <div class="card-header header-elements-inline ">
                        <h5 class="card-title">{{__('admin/user.all_users')}}</h5>
                    </div>
                        <div class="row">
                            @foreach($users as $user)
                            <div class="col-xl-3 col-sm-6 ">
                                <div class="card bg-slate-600" style="background-image: url('admin/global_assets/images/backgrounds/panel_bg.png'); background-size: contain;">
                                    <div class="card-body text-center">
                                        <div class="card-img-actions d-inline-block mb-3">
                                            <img class="img-fluid rounded-circle" src="{{$user->photo}}" width="170" height="170" alt="">
                                            <div class="card-img-actions-overlay card-img rounded-circle">
                                                <div class="align-self-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                            <div class="dropdown-menu">
                                                                {!! Form::open(array(
                                                                    'style'    => 'display: inline-block;',
                                                                    'method'   => 'DELETE',
                                                                    'onsubmit' => "return confirm('".trans("هل أنت متأكد من حذف $user->name ؟")."');",
                                                                    'route'    => ['users.destroy', $user->id]))
                                                               !!}
                                                                <button class="dropdown-item"><i class="icon-user-cancel" style="color: #fa0000"></i>{{__('admin/user.delete')}} {{$user->name}}</button>
                                                                {!! Form::close() !!}
                                                                <a href="{{route('users.edit',$user->id)}}" class="dropdown-item"><i class="icon-pencil5" style="color: #87caff"></i>{{__('admin/user.edit')}} {{$user->name}}</a>
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="font-weight-semibold mb-0">{{$user->name}}</h6>
                                        <span class="d-block opacity-75">{{$user->email}}</span>

                                        <div class="list-icons list-icons-extended mt-3">
                                            <a href="https://instagram.com/{{$user->instagram}}" class="list-icons-item text-white" data-popup="tooltip" title="Instagram" data-container="body"><i class="icon-instagram"></i></a>
                                            <a href="https://www.facebook.com/{{$user->facebook}}" class="list-icons-item text-white" data-popup="tooltip" title="Facebook" data-container="body"><i class="icon-facebook"></i></a>
                                            <a href="https://twitter.com/{{$user->twitter}}" class="list-icons-item text-white" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
                                            <a href="https://www.youtube.com/c{{$user->youtube}}" class="list-icons-item text-white" data-popup="tooltip" title="Youtube" data-container="body"><i class="icon-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center">
                            {!! $users->render() !!}
                        </div>
                </div><!-- /custom handle -->
            </div>
        </div><!-- /collapsible lists -->
    </div>
    <!-- /content area -->

@endsection

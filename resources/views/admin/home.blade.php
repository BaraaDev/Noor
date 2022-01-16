@extends('admin.layouts.app')
@inject('usersCount','App\Models\User')
@inject('ProjectsCount','App\Models\Project')
@inject('RealEstateCount','App\Models\RealEstate')
@section('head1')

    <style>
        body {
            font-family: Cairo;
            font-size: 0.95em;
            color: #929292;
        }

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
            background: linear-gradient(to right, #583d72, #9f5f80);

        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: #212121;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-right: 15px;
            color: #929292;
        }

        .time {
            line-height: 25px;
        }
    </style>
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i>
                    <span class="font-weight-semibold">{{__('admin/admin.home')}}</span> - {{__('admin/admin.dashboard')}}</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>{{__('admin/admin.home')}}</a>
                    <span class="breadcrumb-item active">{{__('admin/admin.dashboard')}}</span>
                </div>
            </div>
        </div>
    </div><!-- /page header -->

    <div class="content "><!-- Basic line -->
        <!-- Simple statistics -->
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">{{__('admin/admin.simple_stats')}}</h6>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="card card-body">
                    <div class="media">
                        <div class="mr-3 align-self-center">
                            <i class="icon-users4 icon-3x text-success-400"></i>
                        </div>
                        <div class="media-body text-right">
                            <h3 class="font-weight-semibold mb-0">{{$usersCount->count()}}</h3>
                            <span class="text-uppercase font-size-sm text-muted" title="{{__('admin/user.userCount')}}">{{__('admin/user.users')}}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body">
                    <div class="media">
                        <div class="mr-3 align-self-center">
                            <a href="{{route('admin.visits')}}"><i class="icon-enter6 icon-3x text-indigo-400"></i></a>
                        </div>
                        <div class="media-body text-right">
                            <h3 class="font-weight-semibold mb-0">{{$visit_site}}</h3>
                            <span class="text-uppercase font-size-sm text-muted" title="{{__('admin/admin.visit_site_month')}}">{{__('admin/admin.visit_site')}}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="font-weight-semibold mb-0">{{$ProjectsCount->count()}}</h3>
                            <span class="text-uppercase font-size-sm text-muted" title="{{__('admin/projects.projectsCount')}}">{{__('admin/projects.projects')}}</span>
                        </div>
                        <div class="ml-3 align-self-center">
                            <i class="icon-briefcase icon-3x text-blue-400"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="font-weight-semibold mb-0">{{$RealEstateCount->count()}}</h3>
                            <span class="text-uppercase font-size-sm text-muted" title="{{__('admin/real_estate.real_estateCount')}}">{{__('admin/real_estate.real_estate')}}</span>
                        </div>

                        <div class="ml-3 align-self-center">
                            <i class="icon-home7 icon-3x text-danger-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /basic line -->
@endsection

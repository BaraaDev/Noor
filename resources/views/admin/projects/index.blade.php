@extends('admin.layouts.app')

@section('titleDashboard')
    @if($request->keyword) / {{Request::old('keyword') ? Request::old('keyword') : $request->keyword}} @else / {{__('admin/projects.projects')}} @endif
@endsection
@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/tables/datatables/extensions/buttons.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/tables/datatables/extensions/select.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
@endsection

@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/datatables_extension_buttons_print.js')}}"></script>
@endsection

@section('content')
    <div class="page-header border-bottom-0">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline border-0">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('home.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> {{__('admin/admin.dashboard')}}</a>
                    @if($request->keyword)
                        <a href="{{route('projects.index')}}" class="breadcrumb-item"><i class="icon-briefcase mr-2"></i> {{__('admin/projects.projects')}}</a>
                    @endif
                    <span class="breadcrumb-item active"><i class="icon-briefcase mr-2"></i>@if($request->keyword){{Request::old('keyword') ? Request::old('keyword') : $request->keyword}} @else {{__('admin/projects.projects')}} @endif</span>
                </div>
            </div>
        </div>


        <div class="page-header-content header-elements-md-inline">

            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">{{__('admin/admin.home')}}</span> @if($request->keyword) - {{Request::old('keyword') ? Request::old('keyword') : $request->keyword}} @else - {{__('admin/projects.projects')}} @endif</h4>
            </div>

            <div class="header-elements d-none mb-3 mb-md-0">
                <div class="d-flex justify-content-center">
                    <a href="{{route('projects.create')}}" class="btn btn-link btn-float text-default">
                        <i class="icon-plus22 text-indigo-400"></i>
                        <span>{{__('admin/projects.add_projects')}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- Search field -->
        <div class="card">
            <div class="card-body">
                <h5 class="mb-3">{{__('admin/projects.search_projects')}}</h5>

                <form action="#" method="get">
                    <div class="input-group mb-3">
                        <div class="form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control form-control-lg" name="keyword" value="{{Request::old('keyword') ? Request::old('keyword') : $request->keyword}}" placeholder="{{__('admin/admin.search_here')}}" autocomplete="off">
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
        </div><!-- /search field -->
        <!-- Collapsible lists -->
        @include('admin.layouts.messages.message')
        <div class="row">
            <div class="col-md-12">
                <!-- Custom handle -->
                <div class="card ">
                    <div class="card-header header-elements-inline ">
                        <h5 class="card-title">{{__('admin/projects.all_projects')}} </h5>

                    </div>
                    <table class="table datatable-button-print-rows">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('admin/projects.projects')}}</th>
                            <th>{{__('admin/admin.by')}}</th>
                            <th>{{__('admin/admin.added_date')}}</th>
                            <th>{{__('admin/admin.status_date')}}</th>

                            <th>إجراءات</th>
                        </tr>
                        </thead>
                        @if (count($projects) == 0)

                        <div class="alert alert-info alert-styled-left alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                            <span class="font-weight-semibold">{{__('admin/admin.there_no_data')}}</span>{{__('admin/admin.you_have_to_create_first')}} <a href="{{route('projects.create')}}" class="alert-link">{{__('admin/admin.here')}}</a>.
                        </div>
                        @endif
                        <tbody>

                        @foreach($projects as $project)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$project->title}}</td>
                            <td>{{optional($project->user)->name}}</td>
                            <td title="{{$project->created_at->format('H:i')}}">{{$project->created_at->format('Y-m-d')}}</td>
                            <td>
                                @if ($project->status == 1)
                                <span class="badge badge-success">{{__('admin/admin.active')}}</span>
                                @elseif ($project->status == 0)
                                <span class="badge badge-secondary">{{__('admin/admin.deactive')}}</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="javascript: void(0);" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu">
                                            <a href="{{route('projects.edit',$project->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> {{__('admin/admin.edit')}} "{{$project->title}}"</a>
                                            {!! Form::open([
                                                 'action' => ['Admin\ProjectController@destroy',$project->id],
                                                 'method' => 'delete'
                                             ])!!}
                                            <button class="dropdown-item" onclick="return confirm('{{__('admin/projects.are_sure_delete')}} {{$project->title}} ؟');"><i class="icon-trash-alt" ></i> {{__('admin/admin.delete')}} "{{$project->title}}"</button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /custom handle -->
                <div class="text-center">
                    {!! $projects->render() !!}
                </div>
            </div>
        </div><!-- /collapsible lists -->
    </div><!-- /content area -->
@endsection

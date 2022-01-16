@extends('admin.layouts.app')

@section('titleDashboard')
    @if($request->keyword) / {{Request::old('keyword') ? Request::old('keyword') : $request->keyword}} @else / {{__('admin/real_estate.real_estates')}} @endif
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
                        <a href="{{route('real_estates.index')}}" class="breadcrumb-item"><i class="icon-home7 mr-2"></i> {{__('admin/real_estate.real_estates')}}</a>
                    @endif
                    <span class="breadcrumb-item active">@if($request->keyword){{Request::old('keyword') ? Request::old('keyword') : $request->keyword}} @else {{__('admin/real_estate.real_estates')}} @endif</span>
                </div>
            </div>
        </div>


        <div class="page-header-content header-elements-md-inline">

            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">{{__('admin/admin.home')}}</span> @if($request->keyword) - {{Request::old('keyword') ? Request::old('keyword') : $request->keyword}} @else - {{__('admin/real_estate.real_estates')}} @endif</h4>
            </div>

            <div class="header-elements d-none mb-3 mb-md-0">
                <div class="d-flex justify-content-center">
                    <a href="{{route('real_estates.create')}}" class="btn btn-link btn-float text-default">
                        <i class="icon-plus22 text-indigo-400"></i>
                        <span>{{__('admin/real_estate.add_real_estates')}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- Search field -->
        <div class="card">
            <div class="card-body">
                <h5 class="mb-3">{{__('admin/real_estate.search_real_estate')}}</h5>

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
                        <h5 class="card-title">{{__('admin/real_estate.all_real_estates')}} </h5>

                    </div>
                    <table class="table datatable-button-print-rows">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('admin/real_estate.real_estate')}}</th>
                            <th>{{__('admin/real_estate.Area')}}</th>
                            <th>{{__('admin/real_estate.bedrooms')}}</th>
                            <th>{{__('admin/real_estate.bathrooms')}}</th>
                            <th>{{__('admin/real_estate.garages')}}</th>
                            <th>{{__('admin/real_estate.building')}}</th>
                            <th>{{__('admin/category.category')}}</th>
                            <th>{{__('admin/location.location')}}</th>
                            <th>{{__('admin/admin.by')}}</th>
                            <th>{{__('admin/admin.added_date')}}</th>
                            <th>{{__('admin/admin.status_date')}}</th>

                            <th>إجراءات</th>
                        </tr>
                        </thead>
                        @if (count($real_estates) == 0)

                        <div class="alert alert-info alert-styled-left alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                            <span class="font-weight-semibold">{{__('admin/admin.there_no_data')}}</span>{{__('admin/admin.you_have_to_create_first')}} <a href="{{route('real_estates.create')}}" class="alert-link">{{__('admin/admin.here')}}</a>.
                        </div>
                        @endif
                        <tbody>

                        @foreach($real_estates as $real_estate)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$real_estate->title}}</td>
                            <td>{{$real_estate->Area}}</td>
                            <td>{{$real_estate->bedroom}}</td>
                            <td>{{$real_estate->bathroom}}</td>
                            <td>{{$real_estate->garage}}</td>
                            <td>{{$real_estate->building}}</td>
                            <td>{{optional($real_estate->category)->name}}</td>
                            <td>{{optional($real_estate->location)->name}}</td>
                            <td>{{optional($real_estate->user)->name}}</td>
                            <td title="{{$real_estate->created_at->format('H:i')}}">{{$real_estate->created_at->format('Y-m-d')}}</td>
                            <td>
                                @if ($real_estate->status == 1)
                                <span class="badge badge-success">{{__('admin/admin.active')}}</span>
                                @elseif ($real_estate->status == 0)
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
                                            <a href="{{route('real_estates.edit',$real_estate->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> {{__('admin/admin.edit')}} "{{$real_estate->title}}"</a>
                                            {!! Form::open([
                                                 'action' => ['Admin\RealEstateController@destroy',$real_estate->id],
                                                 'method' => 'delete'
                                             ])!!}
                                            <button class="dropdown-item" onclick="return confirm('{{__('admin/real_estate.are_sure_delete')}} {{$real_estate->title}} ؟');"><i class="icon-trash-alt" ></i> {{__('admin/admin.delete')}} "{{$real_estate->title}}"</button>
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
                <!-- pagination -->
                <div class="d-flex justify-content-center mt-3 mb-3">
                    <ul class="pagination shadow-1">
                        {!! $real_estates->render() !!}
                    </ul>
                </div><!-- /pagination -->
            </div>
        </div><!-- /collapsible lists -->
    </div><!-- /content area -->
@endsection

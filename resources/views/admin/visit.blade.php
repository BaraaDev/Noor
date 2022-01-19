@extends('admin.layouts.app')

@section('titleDashboard')
    / الزيارات
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
                    <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                    @if($request->keyword)
                        <a href="{{route('admin.visits')}}" class="breadcrumb-item"><i class="icon-stats-bars4"></i> الزيارات </a>
                        <span class="breadcrumb-item active">{{$request->keyword}}</span>
                    @else
                        <span class="breadcrumb-item active">الزيارات</span>
                    @endif
                </div>

            </div>
        </div>


        <div class="page-header-content header-elements-md-inline">

            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> - الزيارات</h4>
            </div>

        </div>
    </div><!-- Content area -->

    <div class="content">
        <!-- Search field -->
        <div class="card">
            <div class="card-body">
                <h5 class="mb-3">إبحث في الزيارات</h5>

                <form action="#" method="get">
                    <div class="input-group mb-3">
                        <div class="form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control form-control-lg" name="keyword" value="{{Request::old('keyword') ? Request::old('keyword') : $request->keyword}}" placeholder="أ,ي">
                            <div class="form-control-feedback form-control-feedback-lg">
                                <i class="icon-search4 text-muted"></i>
                            </div>
                        </div>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary btn-lg">بحث</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /search field -->
        <!-- Collapsible visitor -->
        <div class="row">
            <div class="col-md-12">
                <!-- Custom handle -->
                <div class="card ">
                    <div class="card-header header-elements-inline ">
                        <h5 class="card-title">جميع الزيارات بالموقع</h5>

                    </div>
                    <table class="table datatable-button-print-rows ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان بروتوكول الإنترنت</th>
                            <th>الدولة</th>
                            <th>من خلال</th>
                            <th>المتصفح</th>
                            <th>عنوان الجلسة</th>
                            <th>تاريخ الزيارات </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($visits as $visit)
                            <tr>
                                <td>{{$loop->iteration}} </td>
                                <td>{{$visit->ip}}</td>
                                <td>{{\Location::get($visit->ip)->countryName}}</td>
                                @if($visit->user_id) <td class="text-primary">{{optional($visit->user)->name}}</td> @else <td class="text-danger">لا يوجد مستخدم</td> @endif

                                <td>{{$visit->agent}}</td>

                                <td>{{$visit->session_id}}</td>
                                <td title="{{$visit->created_at->format('H:i')}}">{{$visit->created_at->format('Y-m-d')}}</td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-3 mb-3">
                        <ul class="pagination shadow-1">
                            {!! $visits->render() !!}
                        </ul>
                    </div><!-- /pagination -->
                </div><!-- /custom handle -->
            </div>
        </div><!-- /collapsible visitor -->
    </div><!-- /content area -->
@endsection

@extends('admin.layouts.app')
@inject('model', 'App\Models\News')

@section('titleDashboard')
  /  {{__('admin/news.add_news')}}
@endsection
@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
@endsection

@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/form_inputs.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/form_select2.js')}}"></script>
@endsection

@section('content')

    <div class="page-header border-bottom-0">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline border-0">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>{{__('admin/admin.dashboard')}}</a>
                    <a href="{{route('news.index')}}" class="breadcrumb-item"><i class="icon-newspaper mr-2"></i>{{__('admin/news.news')}}</a>
                    <span class="breadcrumb-item active">{{__('admin/news.add_news')}}</span>
                </div>
            </div>
        </div>

        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">{{__('admin/admin.home')}}</span> - {{__('admin/news.add_news')}}</h4>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- Form -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">{{__('admin/news.add_news')}}</h5>
            </div>

            <div class="card-body">
                <p class="mb-4">{{__('admin/admin.check_data')}}</p>
                @include('admin.layouts.partials.validation-errors')

                <form class="form-validate-jquery" action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="mb-3">
                        @include('admin.news.form')
                    </fieldset>
                    <div class="d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-primary ml-3">{{__('admin/news.add_news')}}<i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div><!-- /form -->
    </div><!-- /content area -->
@endsection

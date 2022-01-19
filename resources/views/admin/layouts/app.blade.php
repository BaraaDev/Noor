<!DOCTYPE html>

<html lang="en" dir="rtl">

@include('admin.layouts.head')
<body style="font-family: 'Cairo', sans-serif;">
<script type="text/javascript">
    if(localStorage.getItem("keySidebar") == 'false'){
        var body = document.getElementsByTagName("body")[0];
        body.className += "sidebar-xs";
    }

    $(document).on('click', '.sidebarnav', function() {
        var sidebar_collapse = localStorage.getItem('keySidebar');
        if ($('body').hasClass('sidebar-xs')) {
            localStorage.setItem('keySidebar', 'false');
        } else {
            localStorage.setItem('keySidebar', 'true');
        }
    });


</script>

@include('admin.layouts.navbar')

<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-right8"></i>
            </a>
            Navigation
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->

        <!-- Sidebar content -->
        <div class="sidebar-content">
            <!-- User menu -->
            <div class="sidebar-user">
                <div class="card-body">
                    <div class="media">
                        <div class="mr-3">
                            <a href="#"><img src="{{auth()->user()->photo}}" width="38" height="38" class="rounded-circle" alt=""></a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold">{{auth()->user()->name}}</div>
                            <div class="font-size-xs opacity-50">
                                <i class="icon-pin font-size-sm"></i> &nbsp;{{auth()->user()->location}}
                            </div>
                        </div>

                        <div class="ml-3 align-self-center">
                            <a href="{{route('profile.index')}}" class="text-white"><i class="icon-cog3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->

            <!-- Main navigation -->

            @include('admin.layouts.navigation')
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->
@yield('sidebar')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content area -->
        @yield('content')
        <!-- /content area -->

     @include('admin.layouts.footer')
    </div><!-- /main content -->
</div><!-- /page content -->
</body>
@yield('script')
</html>




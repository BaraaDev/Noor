<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="audio/MELP120000" />
    <title>
        {{__('admin/admin.dashboard')}} @yield('titleDashboard')
    </title>
    <!-- Global stylesheets -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/image/logo.png')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href={{asset('admin/global_assets/css/icons/icomoon/styles.min.css')}} rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&display=swap" rel="stylesheet">
    <link href={{asset('admin/assets/css/bootstrap.min.css')}} rel="stylesheet" type="text/css">
    <link href={{asset('admin/assets/css/bootstrap_limitless.min.css')}} rel="stylesheet" type="text/css">
    <link href={{asset('admin/assets/css/layout.min.css')}} rel="stylesheet" type="text/css">
    <link href={{asset('admin/assets/css/components.min.css')}} rel="stylesheet" type="text/css">
    <link href={{asset('admin/assets/css/colors.min.css')}} rel="stylesheet" type="text/css">
    <!-- Core JS files -->
    <script src={{asset('admin/global_assets/js/main/jquery.min.js')}}></script>
    <script src={{asset('admin/global_assets/js/main/bootstrap.bundle.min.js')}}></script>
    <script src={{asset('admin/global_assets/js/plugins/loaders/blockui.min.js')}}></script>
    @yield('head1')
    <script src="{{asset('admin/assets/js/app.js')}}"></script>
    @yield('head2')
</head>

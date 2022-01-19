<!DOCTYPE html>
<html lang="ar">
<!-- Code and Developed by: MOHAMED GAMAL -->
<!-- https://MGamal.com -->
<!--____________________-->
<!-- Copyright © 2021 MOHAMED GAMAL - All rights reserved. -->
<head>
    @include('layouts.head')
</head>


<body class="rtl">
<!-- WhatsApp-->
<a href="https://wa.me/{{$setting->whatsApp}}" class="float" target="_blank" rel="nofollow">
    <i style="color: white;" class="fa fa-whatsapp my-float"></i>
</a>

<div class="page-wrapper">
    <!-- Preloader -->
{{--    <div class="preloader"></div>--}}


    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</div><!--End page wrapper-->
@include('layouts.footer-script')

</body>
</html>

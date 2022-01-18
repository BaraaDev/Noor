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
<a href="https://api.whatsapp.com/send?phone=905435078511" class="float" target="_blank">
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

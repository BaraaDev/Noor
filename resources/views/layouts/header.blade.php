<!-- Main Header-->
<header class="main-header header-style-four">
    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li><i class="fab fa-whatsapp"></i><a href="https://wa.me/{{$setting->whatsApp}}" target="_blank" rel="nofollow">{{$setting->whatsApp}}</a></li>
                        <li><i class="fas fa-envelope-open-text"></i><a href="mailto:{{$setting->email}}" target="_blank" rel="nofollow">{{$setting->email}}</a></li>
                    </ul>
                </div>
                <div class="top-right">
                    <ul class="social-icon-one clearfix">
                        <li><a href="https://www.youtube.com/c/{{$setting->youtube}}" target="_blank" rel="nofollow"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://twitter.com/{{$setting->twitter}}" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/{{$setting->linkedin}}" target="_blank" rel="nofollow"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/{{$setting->instagram}}" target="_blank" rel="nofollow"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/{{$setting->facebook}}" target="_blank" rel="nofollow"><i class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="main-box">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="logo-box">
                        <div class="logo"><a onclick="window.location.reload(true);"><img width="100px" src="images/logo.png" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-dark">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{active()->route('home')}}"><a href="{{route('home')}}">الــــرئيسيــــــة</a></li>
                                    <li class="{{active()->route('about')}}"><a href="{{route('about')}}">من نحن</a></li>
                                    <li class="{{active()->route('services')}}"><a href="{{route('services')}}">خدماتنا</a></li>
                                    <li class="{{active()->route('nationality')}}"><a href="{{route('nationality')}}">الجنسية التركية</a></li>
                                    <li class="{{active()->route('bursa')}}"><a href="{{route('bursa')}}">مدينة بورصا</a></li>
                                    <li class="{{active()->route('real_estate')}}"><a href="{{route('real_estate')}}">العقارات</a></li>
                                    <li class="{{active()->route('portfolio')}}"><a href="{{route('portfolio')}}">أعمالنا</a></li>
                                    <li class="{{active()->route('news')}}"><a href="{{route('news')}}">أخبارنا</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box">
                            <div class="btn-box">
                                <a href="{{route('contact')}}" class="theme-btn btn-style-five">تواصل معنا الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a onclick="window.location.reload(true);" title=""><img width="100px" src="{{asset('website/images/logo.png')}}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current dropdown"><a><b>الــــرئيسيــــــة</b></a></li>
                            <li class="dropdown"><a href="{{route('about')}}"><b>من نحن</b></a></li>
                            <li class="dropdown"><a href="{{route('services')}}"><b>خدماتنا</b></a></li>
                            <li class="dropdown"><a href="{{route('nationality')}}"><b>الجنسية التركية</b></a></li>
                            <li class="dropdown"><a href="{{route('bursa')}}"><b>مدينة بورصا</b></a></li>
                            <li class="dropdown"><a href="{{route('real_estate')}}"><b>العقارات</b></a></li>
                            <li class="dropdown"><a href="{{route('portfolio')}}"><b>أعمالنا</b></a></li>
                            <li class="dropdown"><a href="{{route('news')}}"><b>أخبارنا</b></a></li>
                            <li class="dropdown"><a href="{{route('contact')}}"><b>اتصل بنا</b></a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>
<!--End Main Header -->

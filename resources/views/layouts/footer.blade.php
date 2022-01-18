<!-- Main Footer -->
<footer class="main-footer" style="background-image: url(website/images/background/3.jpg);">
    <div class="auto-container">
        <div class="upper-box">
            <div class="row">
                <!-- Upper column -->
                <div class="upper-column col-lg-6 col-md-12 col-sm-12">
                    <div class="footer-logo">
                        <figure class="image"><a onclick="window.location.reload(true);"><img width="200px" src="{{asset('website/images/logo.png')}}" alt=""></a></figure>
                    </div>
                </div>

                <!-- Upper column -->
                <div class="upper-column col-lg-6 col-md-12 col-sm-12">
                    <br><br>
                    <div class="social-links">
                        <ul class="social-icon-two">
                            <li><a href="https://www.facebook.com/{{$setting->facebook}}" target="_blank" rel="nofollow"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/{{$setting->instagram}}" target="_blank" rel="nofollow"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/{{$setting->linkedin}}" target="_blank" rel="nofollow"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://twitter.com/{{$setting->twitter}}" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/c/{{$setting->youtube}}" target="_blank" rel="nofollow"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget cities-widget">
                                <h2 class="widget-title">• الوصول السريع</h2>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="{{route('about')}}"><b>من نحن</b></a></li>
                                        <li><a href="{{route('home')}}"><b>الــــرئيسيــــــة</b></a></li>
                                        <li><a href="{{route('nationality')}}"><b>الجنسية التركية</b></a></li>
                                        <li><a href="{{route('services')}}"><b>خدماتنا</b></a></li>
                                        <li><a href="{{route('portfolio')}}"><b>أعمالنا</b></a></li>
                                        <li><a href="{{route('real_estate')}}"><b>العقارات</b></a></li>
                                        <li><a href="{{route('contact')}}"><b>اتصل بنا</b></a></li>
                                        <li><a href="{{route('news')}}"><b>أخبارنا</b></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget popular-posts">
                                <h2 class="widget-title">• أهم الأخبار</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    @foreach($news_paper as $row)
                                    <div class="post">
                                        <div class="thumb"><a href="{{route('newsShow',$row->id)}}"><img src="{{$row->photo}}" alt="{{$row->title}}"></a></div>
                                        <h4><a href="{{route('newsShow',$row->id)}}">{{$row->title}}</a></h4>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">• <a href="{{route('bursa')}}" style="color: #fff;"><b>مناطق بورصا</b></a></h2>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a>Görükle</a></li>
                                        <li><a>Mudanya</a></li>
                                        <li><a>Özlüce</a></li>
                                        <li><a>Osman gazi</a></li>
                                        <li><a>Beşevler</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">• تواصل معنا</h2>
                                <div class="widget-content">
                                    <ul class="contact-list">
                                        <li><span class="fas fa-map-marked-alt"></span><a href="https://goo.gl/maps/ePkhJbEVB9nNM2KZ6" target="_blank" rel="nofollow">Dumlupınar, Atatürk Blv. No:25, 16285 Nilüfer/Bursa</a></li>
                                        <li><span class="fas fa-headset"></span><a href="tel:{{$setting->phone}}" target="_blank" rel="nofollow">{{$setting->phone}}</a></li>
                                        <li><span class="fas fa-envelope-open-text"></span><a href="mailto:{{$setting->email}}" target="_blank" rel="nofollow">{{$setting->email}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <!--Scroll to top-->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></div>

            <div class="inner-container clearfix">
                <div class="footer-nav">
                    <div class="copyright-text">
                        <p>العلامة التجارية وجميع الحقوق محفوظة لصالح:&nbsp;<a href="{{route('about')}}"><b>شركة نور للاستثمار</b></a>&nbsp;©&nbsp;2022</p>
                    </div>
                </div>


                <div class="copyright-text">
                    <p>Developed By:&nbsp;<a href="https://yelnaggar.com" target="_blank" rel="nofollow"><b>YOUSSEF&nbsp;ELNAGGAR</b></a>&nbsp;-&nbsp;&copy;&nbsp;2022&nbsp;•</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Main Footer -->

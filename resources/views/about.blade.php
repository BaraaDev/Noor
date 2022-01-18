@extends('layouts.app')
@section('title')
    من نحن /
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(website/images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>من نحن</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">الرئيسية</a></li>
                    <li>من نحن</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- About Us -->
    <section class="about-us" style="background-image: url(website/images/background/1.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="title">- من نحن -</span>
                            <h2>شركة نور للاستثمار</h2>
                        </div>

                        <div class="text"><strong>هي شركة استثمار تأسست عام 2007 م في مدينة بورصا التي تعد رابع أكبر مدن تركيا، تعمل الشركة في عده مجالات رئيسية:</strong></div>

                        <div class="row features">
                        @foreach($icons as $icon)
                            <!-- Feature Block -->
                                <div class="feature-block">
                                    <div class="inner-box">
                                        <span class="{{$icon->icon}}"></span>
                                        <h4>{!! $icon->title !!}</h4>
                                        <div class="text">{!! $icon->text !!}</div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-xl-6 col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div>
                            <figure class="image"></figure>
                            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/1MTTsl9Uh4s?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->


    <!-- Agents Section -->
    <div class="agents-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">أعضاء فريق العمل</span>
                <h2>فريقنا</h2>
            </div>

            <div class="agents-carousel owl-carousel owl-theme">
            @foreach($users as $user)
                <!-- Agent Block -->
                    <div class="agent-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a><img src="{{$user->photo}}" alt="{{$user->name}}"></a></figure>
                                <ul class="social-links">
                                    <li><a href="https://facebook.com/{{$user->facebook}}"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="https://instagram.com/{{$user->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://linkedin.com/in/{{$user->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="https://twitter.com/{{$user->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://youtube.com/c/{{$user->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="info-box">
                                <h4 class="name">{{$user->name}}</h4>
                                <span class="designation">{{$user->job}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Agents Section -->


    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(images/background/2.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="title-column">
                    <div class="sec-title light">
                        <span class="title">شركة نور للاستثمار:</span>
                        <h2>30 عاماً من الخبرة في مجال الانشاءات...</h2>
                    </div>
                </div>

                <!-- Button Column -->
                <div class="button-column">
                    <a href="{{route('contact')}}" class="theme-btn btn-style-one"><b>- تواصل معنا الآن -</b></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->
@endsection

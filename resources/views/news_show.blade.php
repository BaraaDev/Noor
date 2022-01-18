@extends('layouts.app')
@section('title')
  {{$news->title}} /
@endsection
@section('content')


<!--Page Title-->
<section class="page-title" style="background-image:url(website/images/background/16.jpg);">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <h1>{{$news->title}}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">الرئيسية</a></li>
                    <li><a href="{{route('news')}}">أخبارنا</a></li>
                    <li>{{$news->title}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="upper-info-box">
                <div class="row">
                    <div class="about-property col-lg-8 col-md-12 col-sm-12">
                        <h2>{{$news->title}}</h2>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="property-detail">
                        <div class="upper-box">
                            <div class="carousel-outer">
                                <ul class="image-carousel owl-carousel owl-theme">
                                    <li><a href="{{$news->photo}}" class="lightbox-image" title=""><img src="{{$news->photo}}" alt=""></a></li>
                                </ul>

                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                </ul>
                            </div>
                        </div>

                        <div class="lower-content">
                            <h3>{{$news->title}}</h3>
                            <blockquote>
                                {!! $news->content !!}
                            </blockquote>
                        </div>
                        <div class="load-more-btn text-center">
                            <a href="{{route('contact')}}" class="theme-btn btn-style-two"><b style="color: #ffffff;">- تواصل معنا -</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->
@endsection

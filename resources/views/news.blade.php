@extends('layouts.app')
@section('title')
    الأخبار /
    @endsection
@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(website/images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>أخبارنا</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">الرئيسية</a></li>
                    <li>أخبارنا</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- News Section -->
    <section class="news-section-two">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">تابع آخر أخبارنا لمعرفة كل جديد...</span>
                <h2>أخبارنا</h2>
            </div>

            <div class="row">
                @foreach($news as $row)
                <!-- News Block Two -->
                <div class="news-block-two col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <br>
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('newsShow',$row->id)}}"><img src="{{$row->photo}}" alt="{{$row->title}}"></a></figure>
                        </div>

                        <div class="content-box">
                            <h4><a href="{{route('newsShow',$row->id)}}">{{$row->title}}</a></h4>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!--End News Section -->
@endsection

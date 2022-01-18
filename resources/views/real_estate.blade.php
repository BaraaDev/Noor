@extends('layouts.app')
@section('title')
    العقارات /
@endsection
@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(website/images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>العقارات</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">الرئيسية</a></li>
                    <li>العقارات</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Real Estate Section -->
    <section class="property-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">ابحث الآن عن منزل أحلامك</span>
                <h2>العقارات المتاحة</h2>
            </div>

            <div class="row">
            @foreach($real_estates as $real_estate)
                <!-- Property Block -->
                    <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    @foreach($real_estate->photo as $key => $value)
                                        <figure class="image"><img src="{{asset('media'.'/'.$value->id.'/'.$value->file_name)}}" alt="{{$real_estate->title}}"></figure>
                                    @endforeach
                                </div>
                                <span class="for">{{$real_estate->building}}</span>

                            </div>
                            <div class="lower-content">
                                <ul class="tags">
                                    <li>{{$real_estate->category->name}}</li>
                                </ul>
                                <h3><a>{{$real_estate->title}}</a></h3>
                                <div class="lucation"><i class="la la-map-marker"></i>{{$real_estate->location->name}}</div>
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-dimension"></i>المساحة: {{$real_estate->Area}}</li>
                                    <li><i class="flaticon-bed"></i>غرف نوم: {{$real_estate->bedroom}}</li>
                                    <li><i class="flaticon-car"></i>جراج: {{$real_estate->garage}}</li>
                                    <li><i class="flaticon-bathtub"></i>حمام: {{$real_estate->bathroom}}</li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="{{route('real_estateShow',$real_estate->id)}}" class="theme-btn">تفاصيل أكثر</a></div>
                                    <div class="price"><a style="color: #fff;" href="{{route('contact')}}" class="theme-btn">تواصل معنا</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--End Real Estate Section -->
@endsection

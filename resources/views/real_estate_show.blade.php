@extends('layouts.app')
@section('title')
    {{$real_estate->title}} /
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{$real_estate->title}}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="">الرئيسية</a></li>
                    <li><a href="real_estate/">العقارات</a></li>
                    <li>{{$real_estate->title}}</li>
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
                        <h2>{{$real_estate->title}}</h2>
                        <div class="lucation"><i class="la la-map-marker"></i>{{optional($real_estate->location)->name}}</div>
                        <ul class="property-info clearfix">
                            <li><i class="flaticon-dimension"></i>المساحة: {{$real_estate->Area}}</li>
                            <li><i class="flaticon-bed"></i>غرف نوم: {{$real_estate->bedroom}}</li>
                            <li><i class="flaticon-car"></i>جراج: {{$real_estate->garage}}</li>
                            <li><i class="flaticon-bathtub"></i>حمام: {{$real_estate->bathroom}}</li>
                        </ul>
                    </div>
                    <div class="load-more-btn text-center">
                        <a href="{{route('contact')}}" class="theme-btn btn-style-two"><b style="color: #ffffff;">- تواصل معنا -</b></a>
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
                                    @foreach($real_estate->photo as $key => $value)
                                    <li><a href="{{asset('media'.'/'.$value->id.'/'.$value->file_name)}}" class="lightbox-image" ><img src="{{asset('media'.'/'.$value->id.'/'.$value->file_name)}}" alt="{{$real_estate->title}}"></a></li>
                                    @endforeach
                                </ul>

                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    @foreach($real_estate->photo as $key => $value)
                                    <li><img src="{{asset('media'.'/'.$value->id.'/'.$value->file_name)}}" alt="{{$real_estate->title}}"></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="lower-content">
                            <h3>الوصف:</h3>
                            <blockquote>
                            {!! $real_estate->content !!}
                            </blockquote>
                        </div>

                        <!-- Property Features -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->
@endsection

@extends('layouts.app')
@section('title')
    أعمالنا /
@endsection
@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(website/images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>أعمالنا</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">الرئيسية</a></li>
                    <li>أعمالنا</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Portfolio -->
    <section class="about-us" style="background-image:url(website/images/background/6.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="title">من أعمالنا:</span>
                            <p style="color: white;">المشاريع التي قامت بها شركة نور للاستثماروالانشاءات مع المستثمرين . مدينة بورصا - تركيا</p>
                        </div>
                        <div class="row features">
                            @foreach($projects as $project)
                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-5"></span>
                                    <h4>{{$project->title}}</h4>
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
                            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/HOQ_GewMImU?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio -->
@endsection

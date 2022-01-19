@extends('layouts.app')
@section('title')
    اتصل بنا /
@endsection
@section('content')


    <!--Page Title-->
    <section class="page-title" style="background-image:url(website/images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>اتصل بنا</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="">الرئيسية</a></li>
                    <li>اتصل بنا</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="call-back-section" style="background-image: url(website/images/background/12.jpg);">

        <div class="auto-container clearfix">
            <div class="column">
                <div class="sec-title">
                    @include('admin.layouts.messages.message')
                    @include('admin.layouts.partials.validation-errors')
                    <span class="title">نسعى دائماً لخدمتك...</span>
                    <h2>اتصل بنا الآن</h2>
                </div>
                <div class="request-form">
                    <p>من فضلك ادخل بياناتك بشكل صحيح حتى نتمكن من التواصل معك ومساعدتك.</p>
                    <form action="{{route('contact.post')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="الاسم الكامل" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <input type="email" name="mail" placeholder="عنوان البريد الإلكتروني" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <input type="text" name="phone" placeholder="رقم الهاتف" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" placeholder="موضوع الرسالة" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <textarea name="message" placeholder="اكتب رسالتك هنا..." required></textarea>
                        </div>

                        <div class="form-group">
                            <button class="theme-btn btn-style-two" type="submit"><b>- ارسل رسالتك الآن -</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->
@endsection

@extends('front.layouts.master')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp
@section('title',__('site.About'))
@section('custom-style')
    @if (LaravelLocalization::getCurrentLocale() == 'en')
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/home-light.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('assets/rtl/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/rtl/css/home-light.css') }}" rel="stylesheet">
    @endif
@endsection
@section('content')
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer"></div>

    <div class="banner-inner">
        <div class="faded-text light">
            <div class="f-text"><span>@lang('site.About')</span></div>
        </div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>@lang('site.About_us')</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">@lang('site.Home')</a></li>
                        <li class="active">@lang('site.About_us')</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <section class="about-section-three" id="scroll-section">
        <figure class="floated-image-1"><img src="{{ asset('assets/images/resource/featured-image-8.jpg') }}" alt="">
        </figure>
        <figure class="floated-image-2"><img src="{{ asset('assets/images/resource/featured-image-9.jpg') }}" alt="">
        </figure>
        <div class="auto-container">

            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title-three left-aligned">
                            <div class="sub-title">@lang('site.About_us')</div>
                            <h2>@lang('site.About_us_title')</h2>
                            <div class="lower-text">@lang('site.About_us_sub_title')</div>
                        </div>
                        <div class="text-content">
                            <div class="text-block">
                                <div class="title">
                                    <span class="count">01</span>
                                    <h4>@lang('site.Our_mission')</h4>
                                </div>
                                <div class="text">@lang('site.home_our_mission')</div>
                            </div>
                            <div class="text-block">
                                <div class="title">
                                    <span class="count">02</span>
                                    <h4>@lang('site.Our_vision')</h4>
                                </div>
                                <div class="text">@lang('site.home_our_vision')</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner clearfix">
                        <figure class="image paroller" data-paroller-factor="-0.07" data-paroller-factor-lg="-0.07"
                            data-paroller-factor-md="-0.07" data-paroller-factor-sm="-0.07" data-paroller-type="foreground"
                            data-paroller-direction="horizontal"><img src="{{ asset('assets/images/home2.png') }}" alt="">
                        </figure>
                        <figure class="image paroller" data-paroller-factor="-0.07" data-paroller-factor-lg="-0.07"
                            data-paroller-factor-md="-0.07" data-paroller-factor-sm="-0.07" data-paroller-type="foreground"
                            data-paroller-direction="vertical"><img src="{{ asset('assets/images/home1.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="about-counter-section">
    <!--Counter Section-->
    <div class="container ">
        <div class="sec-title centered">
            <div class="sub-title">@lang('site.Company_Achivement')</div>

        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <span class="counter-value">3000475</span>
                    <h3>@lang('site.printing')</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <span class="counter-value">2000740</span>
                    <h3>@lang('site.translate')</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter ">
                    <span class="counter-value">1000645</span>
                    <h3>@lang('site.Happy_Customers')</h3>
                </div>

            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <span class="counter-value">1997</span>
                    <h3>@lang('site.date_create')</h3>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--Services Section-->
    <section class="services-section-four">
        <div class="bubble-dotted">
            <span class="dotted dotted-1"></span>
            <span class="dotted dotted-2"></span>
            <span class="dotted dotted-3"></span>
            <span class="dotted dotted-4"></span>
            <span class="dotted dotted-5"></span>
            <span class="dotted dotted-6"></span>
            <span class="dotted dotted-7"></span>
            <span class="dotted dotted-8"></span>
            <span class="dotted dotted-9"></span>
            <span class="dotted dotted-10"></span>
        </div>
        <div class="faded-text">
            <div class="f-text"><span>services</span></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="sub-title">@lang('site.Services')</div>
                <h2>@lang('site.What_We_Do')</h2>
            </div>

            <div class="tabs-box services-tabs">
                <div class="tab-buttons">
                    <div class="row clearfix justify-content-center">
                        <div class="col-lg-2 col-md-4 col-md-4 col-sm-6">
                            <div class="btn-inner tab-btn active-btn" data-tab="#tab-1">
                                <span class="icon-bg pe-7s-target"></span>
                                <span class="icon pe-7s-target"></span>
                                <span class="txt">@lang('site.printing')</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-md-4 col-sm-6">
                            <div class="btn-inner tab-btn" data-tab="#tab-2">
                                <span class="icon-bg pe-7s-star"></span>
                                <span class="icon pe-7s-star"></span>
                                <span class="txt">@lang('site.Translate')</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs-content">
                    <!--Tab-->
                    <div class="tab active-tab" id="tab-1">
                        <div class="tab-inner">
                            <div class="featured-service">
                                <div class="row clearfix">
                                    <!-- Image Column -->
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner">
                                            <div class="image-box">
                                                <img src="{{ asset('assets/images/translate/Brochure-Translation-main.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text Column -->
                                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner">
                                            <div class="sec-title left-aligned">
                                                <div class="sub-title">@lang('site.printing')</div>
                                                <h2>@lang('site.Our_mission')</h2>
                                            </div>
                                            <div class="text">@lang('site.home_our_mission') </div>
                                            <div class="link-box clearfix">
                                                <a href="{{ route('contact') }}" class="theme-btn btn-style-nine"><span class="btn-title">@lang('site.Contact')</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-2">
                        <div class="tab-inner">
                            <div class="featured-service">
                                <div class="row clearfix">
                                    <!-- Image Column -->
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner">
                                            <div class="image-box">
                                                <img src="{{ asset('assets/images/translate/2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text Column -->
                                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner">
                                            <div class="sec-title left-aligned">
                                                <div class="sub-title">@lang('site.translate')</div>
                                                <h2>@lang('site.Our_vision')</h2>
                                            </div>
                                            <div class="text">@lang('site.home_our_vision') </div>
                                            <div class="link-box clearfix">
                                                <a href="{{ route('contact') }}" class="theme-btn btn-style-nine"><span class="btn-title">@lang('site.Contact')</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Testimonial Section-->
    <section class="testimonial-section">
        <div class="image-layer" ></div>
        <div class="auto-container">
            <div class="testimonial-carousel owl-theme owl-carousel">

                @foreach ($testimonials as $testimonial)
                <div class="slide-item">
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="content">

                                <div class="image"><img src="{{ asset('uploads/'.$testimonial->image)}}" alt="" title="" style="height: 100%;object-fit: cover;">
                                    <div class="icon-box"><span class="flaticon-left-quote"></span></div>
                                </div>
                                <div class="info">
                                    <h4>{{ $testimonial['name_'.$lang] }}</h4>
                                    <div class="designation">{{ $testimonial['job_'.$lang] }}</div>
                                </div>
                                <div class="text">
                                    {{ $testimonial['message_'.$lang] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection

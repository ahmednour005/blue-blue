@extends('front.layouts.master')
@section('title', __('site.print_services'))
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp
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
                <div class="f-text"><span>@lang('site.Services')</span></div>
            </div>
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>@lang('site.request_design')</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('home') }}">@lang('site.Home')</a></li>
                            <li><a href="{{ route('print.index') }}">@lang('site.Print')</a></li>
                            <li class="active">@lang('site.request_design')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->
        <!--About Section-->
        <section class="about-section-three pt-5 pb-0" id="about-section">
            <figure class="floated-image-1"><img src="{{ asset('assets/images/resource/featured-image-8.jpg') }}" alt="">
            </figure>
            <figure class="floated-image-2"><img src="{{ asset('assets/images/resource/featured-image-9.jpg') }}" alt="">
            </figure>
            <div class="auto-container">

                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-12">
                        <div class="inner">
                            <div class="sec-title-three left-aligned">
                                <div class="sub-title">@lang('site.request_design')</div>
                                <h2 style="font-size: 40px;">@lang('site.help_design')</h2>
                                <div class="lower-text" style="font-size: 20px;">
                                    @lang('site.about_design_print1')
                                    <br>
                                    <br>
                                    @lang('site.about_design_print2')
                                    <br>
                                    @lang('site.about_design_print3')
                                    <br><br>
                                    @lang('site.design_contact_info')
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>



    <!--service Section-->
    <section class="team-section">
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
            <div class="f-text"><span>@lang('site.Services')</span></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centered mb-4">
                <div class="sub-title">@lang('site.print_services')</div>
                <h2>اطلب تصميمك</h2>
            </div>
            <hr>

            <section class="portfolio-section-four">
                <div class="auto-container">
                    <div class="row clearfix">
                        @foreach ($prints as $pr)
                            <div class="gallery-item-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image-box">
                                        <figure class="image">
                                            @if ($pr->imageCategoryPrints()->exists())
                                                <a class="lightbox-image" href="{{ asset('uploads/'. $pr->imageCategoryPrints[0]->image) }}">\
                                                    <img  src="{{ asset('uploads/' . $pr->imageCategoryPrints[0]->image) }}"
                                                        alt=""></a>
                                            @endif
                                        </figure>
                                        <div class="hover-box">
                                            <div class="hover-inner">
                                                <div class="content">
                                                    <h4><a
                                                            href="{{ route('print.service_details', $pr->id) }}">{{ $pr['title_' . $lang] }}</a>
                                                    </h4>
                                                    <div class="separator"><span class="dot"></span></div>
                                                </div>
                                            </div>
                                            <div class="zoom-btn">
                                                @if ($pr->imageCategoryPrints()->exists())
                                                    <a class="lightbox-image zoom-link"
                                                        href="{{ asset('uploads/' . $pr->imageCategoryPrints[0]->image) }}"
                                                        data-fancybox="gallery"><span
                                                            class="icon flaticon-expand"></span></a>
                                                @endif
                                            </div>
                                            <div class="link-btn">
                                                <a href="{{ route('print.service_details', $pr->id) }}"><span
                                                        class="icon flaticon-link-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

        </div>
    </section>

@endsection

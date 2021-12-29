@extends('front.layouts.master2')
@section('title',__('site.Translate'))
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp
@section('custom-style')
    @if (LaravelLocalization::getCurrentLocale() == 'en')
        <link href="{{ asset('assets/css2/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css2/home-light.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('assets/rtl/css2/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/rtl/css2/home-light.css') }}" rel="stylesheet">
    @endif
@endsection

@section('content')
    <!-- Banner Section -->
    <section class="banner-section banner-two">
        <div class="image-layer" @if (LaravelLocalization::getCurrentLocale() == 'en') style="background-image: url({{ asset('assets/images/main-slider/2.png') }});" @else style="background-image: url({{ asset('assets/images/header-bg-rtl.png') }});" @endif></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content clearfix">
                    <div class="inner">
                        <div class="sub-title">@lang('site.blueblue_translate')</div>
                        <h1>@lang('site.ask_order') @lang('site.translate')</h1>
                        <div class="text">@lang('site.trans_descrip')</div>
                        <div class="link-box clearfix">
                            <a href="{{ route('contact') }}" class="theme-btn btn-style-four"><span
                                    class="btn-title">@lang('site.Contact') </span></a>
                            <a data-target="#about-section" class="theme-btn btn-style-five scroll-to-target"><span
                                    class="btn-title">@lang('site.learn_more') </span></a>
                        </div>
                    </div>
                </div>
                <div class="content-image wow slideInRight" data-wow-delay="0ms">
                    <div class="image"><img class="tilt-item"
                            src="{{ asset('assets/images/translate/translate1.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Services Section-->
    <section class="features-section" id="about-section">
        <div class="auto-container">
            <div class="faded-text">
                <div class="f-text"><span>@lang('site.Services')</span></div>
            </div>
            <div class="auto-container">
                <div class="sec-title centered mb-4">
                    <div class="sub-title">@lang('site.translate_services')</div>
                    <h2>@lang('site.avilable_lang') </h2>
                </div>
                <hr>
                <div class="row clearfix">
                    @foreach ($translate as $tr)
                        <!--Block-->
                        <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box hvr-bob">
                                <div class="pattern-layer"></div>
                                <div class="count">
                                    @if ($translate->count() <= 9)
                                        <span> 0{{ $loop->iteration }} </span>
                                    @else
                                        <span>{{ $loop->iteration }} </span>
                                    @endif
                                </div>
                                <div class="icon-box"><img class="translate-card-image" src="{{ asset('uploads/'.$tr->image) }}" alt=""></span></div>
                                <h4>{{ $tr['title_'.$lang] }}</h4>
                                <div class="text">{{ $tr['subtitle_' . $lang] }}</div>
                                <div class="more-link"><a
                                        href="{{ route('translate.service', $tr->id) }}">@lang('site.read_more')</a></div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
    </section>

    <section class="call-to-two ">
        <div class="image-layer" >
            {{-- background-image: url({{ asset('assets/images/background/image-3.jpg') }});"> --}}
        </div>
        <div class="auto-container">
            <div class="inner">
                {{-- <div class="images">
                    <figure class="image"><img src="{{ asset('assets/images/resource/author-image-2.png') }}"
                            alt=""></figure>
                    <figure class="image"><img src="{{ asset('assets/images/resource/author-image-3.png') }}"
                            alt=""></figure>
                    <figure class="image"><img src="{{ asset('assets/images/resource/author-image-4.png') }}"
                            alt=""></figure>
                    <figure class="image"><img src="{{ asset('assets/images/resource/author-image-5.png') }}"
                            alt=""></figure>
                </div> --}}
                <div class="content">
                    <div class="sub-title">@lang('site.call_to_action')</div>
                    <h2>@lang('site.we_are_here')</h2>
                    <div class="link-box">
                        <a href="{{ route('contact') }}" class="theme-btn btn-style-six"><span
                                class="btn-title">@lang('site.Contact')</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

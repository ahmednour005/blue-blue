@extends('front.layouts.master')
@section('title', __('site.Home'))
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
    <section class="banner-section banner-five">
        <div class="hero-shape-one"></div>
        <div class="hero-shape-two"></div>
        <div class="hero-shape-three"></div>
        <div class="hero-shape-four"></div>
        <div class="hero-shape-five"></div>
        <div class="dotted-bubble-01"></div>
        <div class="dotted-bubble-02"></div>
        <div class="dotted-bubble-03"></div>
        <div class="left-shape-layer" style="background-image: url({{ asset('assets/images/background/shape-1.png') }}">
        </div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content clearfix">
                    <div class="inner">
                        <div class="sub-title">@lang('site.printing_and_translate') </div>
                        <h1>BLUE BLUE</h1>
                        <img class="xerox" src="{{ asset('assets/images/xerox.jpeg') }}" alt="">
                        <div class="link-box clearfix">
                            <a href="{{ route('translate.index') }}" class="theme-btn btn-style-nine"><span
                                    class="btn-title">@lang('site.Translate')</span></a>
                            <a href="{{ route('print.index') }}" class="theme-btn btn-style-five"><span
                                    class="btn-title">@lang('site.Print')</span></a>
                        </div>
                    </div>
                </div>
                <div class="scroll-down">
                    <div class="scroll-to-target" data-target="#scroll-section"><span
                            class="icon flaticon-right-arrow"></span></div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--About Section-->
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
                            data-paroller-direction="horizontal"><img src="{{ asset('assets/images/home2.png') }}"
                                alt="">
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

    <!--Team Section-->
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
            <div class="sec-title centered mb-2">
                <div class="sub-title">@lang('site.Services')</div>
                <h2>@lang('site.what_we_do')</h2>
            </div>
            <div class="sec-title style-three light centered mb-0">
                <div class="sub-title mb-0">@lang('site.print_services')</div>
            </div>
            <hr>

            <div class="team-carousel owl-theme owl-carousel">
                @foreach ($print as $pr)
                    <!--Block-->
                    <div class="team-block">
                        <div class="inner-box text-center">
                            <div class="image-box">
                                @if ($pr->imageCategoryPrints()->exists())
                                    <figure class="image"><img
                                            src="{{ asset('uploads/' . $pr->imageCategoryPrints[0]->image) }}" alt=""
                                            title="">
                                    </figure>
                                @endif
                            </div>
                            <div class="lower-box">
                                <div class="count">
                                    @if ($translate->count() <= 9)
                                        <span> 0{{ $loop->iteration }} </span>
                                    @else
                                        <span>{{ $loop->iteration }} </span>
                                    @endif
                                </div>
                                <h3 class="name">{{ $pr['title_' . $lang] }}</h3>
                                <div class="features">
                                    <p>
                                        {{ $pr['subtitle_' . $lang] }}
                                    </p>
                                </div>
                                <a href="{{ route('print.service', $pr->id) }}"
                                    class="theme-btn btn-style-three btn-readmore"><span
                                        class="btn-title">@lang('site.read_more')</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="sec-title style-three light centered mb-0">
                <div class="sub-title mb-0">@lang('site.translate_services')</div>
            </div>
            <hr>
            <div class="team-carousel owl-theme owl-carousel">
                @foreach ($translate as $tr)
                    <!--Block-->
                    <div class="team-block">
                        <div class="inner-box text-center">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('uploads/' . $tr->image) }}" alt=""
                                        title="">
                                </figure>
                            </div>
                            <div class="lower-box">
                                <div class="count">
                                    @if ($translate->count() <= 9)
                                        <span> 0{{ $loop->iteration }} </span>
                                    @else
                                        <span>{{ $loop->iteration }} </span>
                                    @endif
                                </div>
                                <h3 class="name">{{ $tr['title_' . $lang] }}</h3>
                                <div class="features">
                                    <p>
                                        {{ $tr['subtitle_' . $lang] }}
                                    </p>
                                </div>
                                <a href="{{ route('translate.service', $tr->id) }}"
                                    class="theme-btn btn-style-three btn-readmore"><span
                                        class="btn-title">@lang('site.read_more')</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>


    <!--Contact Section-->
    <section class="info-section">
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
        <div class="image-layer" style="background-image: url(images/background/image-5.jpg);"></div>
        <div class="faded-text style-two light">
            <div class="f-text"><span>@lang('site.Contact')</span></div>
        </div>
        <div class="auto-container">
            <div class="sec-title-three light centered">
                <div class="sub-title">@lang('site.Contact')</div>
                <h2>@lang('site.get_in_touch')</h2>
            </div>
            <div class="info">
                <div class="row clearfix">
                    <!--Info Block-->
                    <div class="info-box col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner hvr-bob">
                            <div class="icon-box"><span class="flaticon-call"></span></div>
                            <h4>@lang('site.phone_number')</h4>
                            <ul>
                                <li><a href="tel:{{ $info->phone }}">{{ $info->phone }}</a></li>
                                {{-- <li><a href="tel:+8767676575498">+8(098) 6765 7549 8</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-box col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner hvr-bob">
                            <div class="icon-box"><span class="flaticon-envelope"></span></div>
                            <h4>@lang('site.email_address')</h4>
                            <ul>
                                <li><a href="mailto:{{ $info->email }}">{{ $info->email }}</a></li>
                                {{-- <li><a href="mailto:example@mail.co">example@mail.co</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-box col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner hvr-bob">
                            <div class="icon-box"><span class="flaticon-worldwide-1"></span></div>
                            <h4>@lang('site.web_address')</h4>
                            <ul>
                                <li><a href="{{ route('print.index') }}">@lang('site.Print')</a></li>
                                <li><a href="{{ route('translate.index') }}">@lang('site.Translate')</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-box col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner hvr-bob">
                            <div class="icon-box"><span class="flaticon-placeholder-3"></span></div>
                            <h4>@lang('site.office_address')</h4>
                            <ul>
                                <li><a href="https://goo.gl/maps/VynUuqoo1iUTSjfL7" target="_blank">
                                        @lang('site.comapny_address')
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="theme-btn btn-style-three btn-contact"><span
                            class="btn-title">@lang('site.Contact')</span></a>
                </div>
            </div>


        </div>
    </section>
@endsection

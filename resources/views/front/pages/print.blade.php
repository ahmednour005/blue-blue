@extends('front.layouts.master')
@section('title', __('site.Print'))
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
    <section class="banner-section banner-two">
        <div class="hero-shape-one"></div>
        <div class="hero-shape-two"></div>
        <div class="hero-shape-three"></div>
        <div class="hero-shape-four"></div>
        <div class="hero-shape-five"></div>
        <div class="dotted-bubble-01"></div>
        <div class="dotted-bubble-02"></div>
        <div class="dotted-bubble-03"></div>
        <div class="image-layer"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content clearfix">
                    <div class="inner">
                        <div class="sub-title">@lang('site.Print_Maker')</div>
                        <h1>@lang('site.Full_service_printing_house')</h1>
                        <div class="text mt-2">@lang('site.print_head')</div>
                        <div class="link-box clearfix mt-4">
                            <a data-target="#about-section" class="theme-btn btn-style-five scroll-to-target"><span
                                    class="btn-title">@lang('site.read_more')</span></a>
                        </div>
                    </div>
                </div>
                <div class="content-image wow slideInRight" data-wow-delay="0ms">
                    <div class="image"><img class="tilt-item"
                            src="{{ asset('assets/images/p-house3.png') }}" alt="" style="margin-top: -40px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--About Section-->
    <section class="about-section-three pt-5" id="about-section">
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
                            <h2 style="font-size: 50px;">@lang('site.help')</h2>
                            <div class="lower-text" style="font-size: 20px;">
                                @lang('site.about_print')
                                <br>

                                <br>

                            </div>
                        </div>

                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner clearfix">
                        <figure class="image paroller" data-paroller-factor="-0.07" data-paroller-factor-lg="-0.07"
                            data-paroller-factor-md="-0.07" data-paroller-factor-sm="-0.07" data-paroller-type="foreground"
                            data-paroller-direction="horizontal"><img src="{{ asset('assets/images/p-about1.png') }}"
                                alt=""></figure>
                        <figure class="image paroller" data-paroller-factor="-0.07" data-paroller-factor-lg="-0.07"
                            data-paroller-factor-md="-0.07" data-paroller-factor-sm="-0.07" data-paroller-type="foreground"
                            data-paroller-direction="vertical"><img src="{{ asset('assets/images/p-about2.png') }}"
                                alt=""></figure>
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
                <h2>@lang('site.what_we_do') </h2>
            </div>
            <hr>
            <section class="portfolio-section-four">
                <div class="auto-container">

                    <div class="sortable-masonry filter-gallery">
                        <div class="filters clearfix">
                            <ul class="filter-tabs filter-btns clearfix">
                                <li class="filter active" data-role="button" data-filter=".all">@lang('site.show_all')</li>
                                @foreach ($print as $pr)
                                @if($pr->children()->exists())
                                    <li class="filter" data-role="button" data-filter=".item-{{ $pr->id }}">
                                        {{ $pr['title_' . $lang] }}</li>
                                        @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class="items-container row clearfix">
                            <!--Gallery Item-->
                            @foreach ($print as $pr)
                                @foreach ($pr->children as $product)
                                    {{-- <div class="gallery-item-two col-lg-4 col-md-6 col-sm-12"> --}}
                                    <div
                                        class="gallery-item-two masonry-item all item-{{ $pr->id }} col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="image-box">
                                                <figure class="image">
                                                    @if ($product->imageCategoryPrints()->exists())
                                                        <a class="lightbox-image"
                                                            href="{{ asset('uploads/' . $product->imageCategoryPrints[0]->image) }}"><img
                                                                src="{{ asset('uploads/' . $product->imageCategoryPrints[0]->image) }}"
                                                                alt=""></a>
                                                    @endif
                                                </figure>
                                                <div class="hover-box">
                                                    <div class="hover-inner">
                                                        <div class="content">
                                                            <h4><a
                                                                    href="{{ route('print.service', $product->id) }}">{{ $product['title_' . $lang] }}</a>
                                                            </h4>
                                                            <div class="separator"><span class="dot"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="zoom-btn">
                                                        @if ($product->imageCategoryPrints()->exists())

                                                            <a class="lightbox-image zoom-link"
                                                                href="{{ asset('uploads/' . $product->imageCategoryPrints[0]->image) }}"
                                                                data-fancybox="gallery"><span
                                                                    class="icon flaticon-expand"></span></a>
                                                        @endif
                                                    </div>
                                                    <div class="link-btn">
                                                        <a href="{{ route('print.service', $product->id) }}"><span
                                                                class="icon flaticon-link-1"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                        <a href="{{ route('print.category_service') }}" class="theme-btn btn-style-three btn-readmore m-auto" style="display: block; width:220px"><span class="btn-title" style="letter-spacing: 1px"> @lang('site.all_print_services')</span></a>

                    </div>


                    {{-- @foreach ($print as $pr)
                            <!--Gallery Item-->
                            <div class="gallery-item-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a class="lightbox-image" href="{{ asset('uploads/' . $pr->image) }}"><img
                                                    src="{{ asset('uploads/' . $pr->image) }}" alt=""></a>
                                        </figure>
                                        <div class="hover-box">
                                            <div class="hover-inner">
                                                <div class="content">
                                                    <h4><a
                                                            href="{{ route('print.service', $pr->id) }}">{{ $pr['title_' . $lang] }}</a>
                                                    </h4>
                                                    <div class="separator"><span class="dot"></span></div>
                                                </div>
                                            </div>
                                            <div class="zoom-btn">
                                                <a class="lightbox-image zoom-link"
                                                    href="{{ asset('uploads/' . $pr->image) }}"
                                                    data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                                            </div>
                                            <div class="link-btn">
                                                <a href="{{ route('print.service', $pr->id) }}"><span
                                                        class="icon flaticon-link-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach --}}

                </div>
            </section>

            {{-- </div> --}}
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
                    <h2>@lang('site.now_choose_design')</h2>
                    <div class="link-box">
                        <select name="" id="choose_cat" data-phone="{{ $info->phone }}" style="width: 200px; padding: 11px; border-radius: 40px; border: 1px solid #00adef; margin-left: 18px; cursor: pointer">
                            <option selected hidden disabled>@lang('site.choose_design')</option>
                            @foreach ($sub_prints as $print)
                                <option value="{{ $print->title_ar }}">{{ $print['title_'.$lang] }}</option>
                            @endforeach
                        </select>
                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=2{{ $info->phone }}&text=السلام عليكم محتاج طلب  لطباعة " id="send-whatsapp" class="theme-btn btn-style-six" style="overflow:inherit;min-width: auto;"><span style="    padding: 14px 73px;
                            background: #00adef;"
                                class="btn-title">@lang('site.Contact')</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('custom-script')
    <script>
        $('#choose_cat').on('change', function(){
            val = $(this).val();
            phone = $(this).data('phone');
            href = "https://api.whatsapp.com/send/?phone=2"+phone+"&text=السلام عليكم محتاج طلب  لطباعة "+val;
            $('#send-whatsapp').attr("href", href);
            console.log($phone);
        });
    </script>
@endsection

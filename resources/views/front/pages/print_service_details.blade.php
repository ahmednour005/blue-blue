@extends('front.layouts.master')
@section('title', __('site.service_details'))
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
                    <h1>{{ $print_details['title_' . $lang] }}</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('home') }}">@lang('site.Home')</a></li>
                            <li><a href="{{ route('print.index') }}">@lang('site.Print')</a></li>
                            @if ($print_details->parent()->exists())
                                <li><a href="{{ route('print.service', $print_details->parent->id) }}">
                                        {{ $print_details->parent['title_' . $lang] }}
                                    </a></li>
                            @endif
                            <li class="active">{{ $print_details['title_' . $lang] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->


    <div class="project-single">
        <section class="project-details">
            <div class="auto-container">
                <div class="upper-row">
                    <div class="row clearfix">
                        <div class="image-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner">
                                @if ($print_details->imageCategoryPrints()->exists())
                                    <img src="{{ asset('uploads/' . $print_details->imageCategoryPrints[0]->image) }}"
                                        alt="" title="">
                                @endif
                            </div>
                        </div>
                        <div class="info-column col-lg-4 col-md-12 col-sm-12">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-art"></span></div>
                                <ul class="info">
                                    <li><strong>@lang('site.name')</strong> <br>{{ $print_details['title_' . $lang] }}
                                    </li>
                                    @if ($print_details->parent()->exists())
                                        <li><strong>@lang('site.category')</strong>
                                            <br>{{ $print_details->parent['title_' . $lang] }}
                                        </li>
                                    @endif

                                </ul>
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send/?phone=2{{ $phone }}&text=السلام عليكم محتاج طلب   {{ $print_details->title_ar }}">
                                    <img src="{{ asset('assets/images/whatsapp--v6.png') }}" />
                                </a> <br>@lang('site.order_now')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-row">
                    <h3>{{ $print_details['title_' . $lang] }}</h3>
                    <p>{{ $print_details['subtitle_' . $lang] }}</p>
                    <p>{{ $print_details['describe_' . $lang] }}</p>

                </div>
            </div>
        </section>
    </div>

    <div class="screen-shot parallax section lb" style="background: #fbfbfb;padding: 20px 0;">
        <div class="container">
            <div class="project-carousel owl-theme owl-carousel">
                @foreach ($print_details->imageCategoryPrints as $image)
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            {{-- <a href="{{ asset('uploads/' . $image->image) }}" data-rel="prettyPhoto[gal]"
                                class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a> --}}
                                <a class="lightbox-image" href="{{ asset('uploads/' . $image->image) }}"><img
                                    src="{{ asset('uploads/' . $image->image) }}" style="height: 300px; object-fit: contain;border: 1px solid #DDD;"
                                    alt=""></a>
                            {{-- <img src="{{ asset('uploads/' . $image->image) }}" alt="" class="img-responsive img-rounded" style="height: 300px; object-fit: contain;border: 1px solid #DDD;"> --}}
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection

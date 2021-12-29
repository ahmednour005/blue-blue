@extends('front.layouts.master2')
@section('title',__('site.service_details'))
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
<section class="page-banner ">
    <div class="banner-inner">
        <div class="faded-text light">
            <div class="f-text"><span>@lang('site.Services')</span></div>
        </div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{ $translation['title_' . $lang] }}</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">@lang('site.Home')</a></li>
                        <li><a href="{{ route('translate.index') }}">@lang('site.Translate')</a></li>
                        <li class="active">{{ $translation['title_' . $lang] }}</li>
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
                            <img src="{{ asset('uploads/' . $translation->image) }}" alt="" title="">
                        </div>
                    </div>
                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <form method="post" action="{{ route('count-file') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="inner">
                                <div class="icon"><span class="flaticon-art"></span></div>
                                <ul class="info">

                                    <input name="id" type="hidden" value="{{ $translation->id }}">
                                    <li>
                                        <input type="file" class="@error('file') is-invalid @enderror" name="file"
                                            accept=".docx,.pdf"><br>
                                        @error('file')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                        @isset($error_excption)
                                        <p class="text-danger">

                                           {{$error_excption}}
                                        </p>
                                        @endisset
                                        @lang('site.upload_w_f')
                                    </li>
                                    <li><input type="number" min="0" name="number"
                                            class="@error('number') is-invalid @enderror"
                                            style="background: rgb(221, 221, 221); width: 220px; height: 30px;">
                                        @error('number')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                        <br>@lang('site.enter_words_count')
                                    </li>
                                    <li>
                                        <div class="mb-3">
                                            @lang('site.the_word_number') : {{ $price }} <br>
                                            @lang('site.the_price') :
                                            @php
                                                $total = ($price / 250);
                                                if(is_int($total)){
                                                   $total =  $total;
                                                }else{
                                                    $total = (int)$total+1;
                                                }
                                            @endphp
                                            {{ $total * $translation->price }}
                                            @lang('site.egy')

                                        </div>
                                        <button type="submit" class="theme-btn btn-style-four"><span
                                                class="btn-title">@lang('site.live_Price') </span></button>
                                    </li>
                                    <li>
                                        <a target="_blank"
                                            href="https://api.whatsapp.com/send/?phone=2{{ $phone }}&text=السلام عليكم  محتاج طلب اوردر (ترجمة) {{ $translation->title_ar }}"><img
                                                src="https://img.icons8.com/color/48/000000/whatsapp--v6.png" /></a>
                                        <br>@lang('site.Contact')
                                    </li>

                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="content-row">
                <h3>{{ $translation['title_' . $lang] }}</h3>
                <p>
                    {{ $translation['describe_' . $lang] }}
                </p>
            </div>
        </div>
    </section>

</div>

@endsection

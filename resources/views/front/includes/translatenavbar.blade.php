 <!-- Preloader -->
 <div class="preloader">
    <div class="spinner">
        <div class="inner">
            <div class="disc"></div>
            <div class="disc"></div>
            <div class="disc"></div>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="main-header header-style-five">

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container clearfix">
            <div class="inner clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('home') }}"
                            title="Callix - Portfolio and Digital Agency HTML Template">
                            <img src="{{ asset('assets/images/translate-logo.png') }}" width="220px" height="80px" alt="Callix - Portfolio and Digital Agency HTML Template" title="Callix - Portfolio and Digital Agency HTML Template">
                            </a></div>
                </div>
                <div class="nav-content clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                         <!-- Main Menu -->
                         <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix">
                                <ul class="navigation clearfix">
                                    <li
                                        class=" {{ (request()->is('ar') ? 'current' : '' || request()->is('en')) ? 'current' : '' }} ">
                                        <a href="{{ route('home') }}">@lang('site.Home')</a>

                                    </li>
                                    <li class="{{ (request()->is('*about') ? 'current' : '' )}} "><a href="{{ route('about') }}">@lang('site.About')</a>

                                    </li>
                                    <li
                                        class=" {{ (request()->is('*print') ? 'current' : '' || request()->is('*translate')) ? 'current' : '' }} dropdown ">
                                        <a>@lang('site.Services')</a>
                                        <ul>
                                            <li><a href="{{ route('print.index') }}">@lang('site.Print')</a></li>
                                            <li><a href="{{ route('translate.index') }}">@lang('site.Translate')</a>
                                            </li>
                                            <li><a href="{{ route('askdesign.print') }}">@lang('site.Ask_Design')</a></li>

                                        </ul>
                                    </li>
                                    <li class="{{ request()->is('*contact') ? 'current' : '' }}"><a
                                            href="{{ route('contact') }}">@lang('site.Contact')</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <!--Other Links-->
                <div class="other-links clearfix">

                    {{-- lang btn --}}
                     <!--Nav Toggler-->
                     <div class="max-nav-toggler">
                        <button class="theme-btn toggle-btn"><span class="flaticon-menu-2"></span></button>
                        @if (LaravelLocalization::getCurrentLocale() == 'en')
                            <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" class="language-btn">
                               <img src="{{ asset('assets/images/egypt.png') }}" alt="">
                           </a>
                        @else
                            <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="language-btn">
                               <img src="{{ asset('assets/images/usd.png') }}" alt="">
                           </a>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--End Header Upper-->

     <!-- Mobile Menu  -->
     <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/translate-logo.png') }}" alt=""
                        title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
<!-- End Main Header -->


<!-- Hidden Navigation Bar -->
<section class="hidden-bar right-align">

    <div class="hidden-bar-closer">
        <button><span class="flaticon-letter-x"></span></button>
    </div>

        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">

            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/translate-logo.png') }}" alt="" width="180px" /></a>
            </div>
            <div class="content-box">
                <h3>@lang('site.get_in_touch')</h3>
                <div class="text">
                   @lang('site.get_in_touch_desc')
                </div>
                <a href="{{ route('contact') }}" class="theme-btn btn-style-two">
                    <div class="btn-title">@lang('site.Contact')</div>
                </a>
            </div>
            <div class="contact-info">
                <h2>@lang('site.Contact')</h2>
                <ul class="list-style-two">
                    <li><span class="icon fa fa-map-marker-alt"></span>
                       <a href="https://goo.gl/maps/VynUuqoo1iUTSjfL7" target="_blank">
                           @lang('site.comapny_address')
                       </a>                 </li>
                    <li><span class="icon fa fa-phone-alt"></span> <a href="tel:{{ $info->phone }}">{{ $info->phone }}</a></li>
                    <li><span class="icon fa fa-envelope-open"></span>
                        <a href="mailto:{{ $info->email }}">{{ $info->email }}</a></li>
                    <li><span class="icon fa fa-clock"></span>Week Days: 09.00 Am to 10.00 Pm Friday: Closed</li>
                </ul>
            </div>
        </div><!-- / Hidden Bar Wrapper -->

</section>
<!-- End / Hidden Bar -->

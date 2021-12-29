 <!-- Main Footer -->
 <footer class="main-footer style-two">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-lg-5 col-md-6 col-sm-12">
                    <div class="footer-widget newsletter-widget">
                        <img src="{{ asset('assets/images/logo-two.png')}}" alt="">
                        <div class="widget-content">
                            <p>
                                @lang('site.footer_description')
                            </p>
                        </div>
                    </div>
                </div>


                <!--Column-->
                <div class="column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <h3>@lang('site.pages')<span>.</span></h3>
                        <div class="widget-content">
                            <div class="row clearfix">
                                <div class="col-12">
                                    <ul>
                                        <li><a href="{{ route('home') }}">@lang('site.Home')</a></li>
                                        <li><a href="{{ route('about') }}">@lang('site.About')</a></li>
                                        <li><a href="{{ route('print.index') }}">@lang('site.Print')</a></li>
                                        <li><a href="{{ route('translate.index') }}">@lang('site.Translate')</a></li>
                                        <li><a href="{{ route('contact') }}">@lang('site.Contact')</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget news-widget">
                        <h3>@lang('site.contact_info')<span>.</span></h3>
                        <div class="widget-content">
                            <!--News Post-->
                            <div class="news-post">
                                <div class="post-thumb">
                                    <span class="flaticon-call"></span>
                                </div>
                                <h5>
                                    <a href="tel:{{ $info->phone }}">{{ $info->phone }}</a><br>
                                    {{-- <a>+20 23456799</a> --}}
                                </h5>
                            </div>
                            <!--News Post-->
                            <div class="news-post">
                                <div class="post-thumb">
                                    <span class="flaticon-envelope"></span>
                                </div>
                                <h5>
                                    <a href="mailto:{{ $info->email }}">{{ $info->email }}</a>
                                </h5>

                            </div>
                            <!--News Post-->
                            <div class="news-post">
                                <div class="post-thumb">
                                    <span class="flaticon-placeholder-3"></span>
                                </div>
                                <h5>
                                    <a href="https://goo.gl/maps/VynUuqoo1iUTSjfL7" target="_blank">
                                        @lang('site.comapny_address')
                                    </a>
                                </h5>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom-two">
        <div class="auto-container">
            <div class="copyright">@lang('site.all_rights_reserved') © 2009 - 2021  Blue Blue.</div>
        </div>
    </div>

</footer>

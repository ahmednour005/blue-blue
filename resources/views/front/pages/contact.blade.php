@extends('front.layouts.master')
@section('title', __('site.Contact'))
@section('custom-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" />
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
                <div class="f-text"><span>@lang('site.Contact')</span></div>
            </div>
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>@lang('site.Contact')</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('home') }}">@lang('site.Home')</a></li>
                            <li class="active">@lang('site.Contact')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Banner Section -->

        <!--Contact Section-->
        <section class="contact-section">
            <div class="auto-container">

                <div class="row clearfix">

                    <div class="form-column col-lg-6 col-md-12">
                        <div class="inner">
                            <div class="sec-title left-aligned">
                                <div class="sub-title">@lang('site.Contact')</div>
                                <!-- <h2>drop us a line with estimate</h2> -->
                            </div>
                            <div class="form-box">
                                <div class="default-form contact-form">
                                    {{-- <form class="contact-form" > --}}
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <input type="text" name="name" placeholder="@lang('site.Enter_your_name')"
                                                required class="@error('name') is-invalid @enderror">
                                            <p class="error"
                                                style="color: red;font-size: 12px;font-weight: 700;margin-top: 8px;"> </p>

                                            <div class="field-icon"><span class="flaticon-people"></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <input type="text" name="phone" placeholder="@lang('site.Enter_your_phone')"
                                                required class="@error('phone') is-invalid @enderror">
                                            <p class="error"
                                                style="color: red;font-size: 12px;font-weight: 700;margin-top: 8px;"> </p>


                                            <div class="field-icon"><span class="flaticon-call"></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <input type="email" name="email" placeholder="@lang('site.Enter_your_email')"
                                                required class="@error('email') is-invalid @enderror">

                                            <div class="field-icon"><span class="flaticon-envelope"></span></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="field-inner">
                                            <textarea name="message" placeholder="@lang('site.Type_your_message')"
                                                class="@error('message') is-invalid @enderror" required></textarea>
                                            <p class="error"
                                                style="color: red;font-size: 12px;font-weight: 700;margin-top: 8px;"> </p>

                                            <div class="field-icon"><span class="flaticon-edit"></span></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="btn-box">
                                            <button class="theme-btn btn-style-nine contact-form"><span
                                                    class="btn-title">@lang('site.Submit_Now')</span></button>
                                        </div>
                                    </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="map-column col-lg-6 col-md-12">
                        <div class="inner">
                            <div class="map-box"
                                style="border:1px solid #DDD; box-shadow: 0 0 5px rgb(0 0 0 / 20%);">
                                <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no"
                                        marginheight="0" marginwidth="0"
                                        src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=Syria,%20Gazirat%20Mit%20Oqbah,%20Agouza,%20Giza%20Governorate+(Blue%20Blue)&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                            href="http://www.gps.ie/">vehicle gps</a></iframe></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Contact Section-->
        <section class="info-section">


            <div class="auto-container">

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
                    </div>
                </div>



            </div>
        </section>

    @endsection
    @section('custom-script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js"></script>


        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            function validation() {
                valid = true;
                if ($("input[name=name]").val() == '') {
                    $("input[name=name]").next('.error').text('من فضلك ادخل الأسم');
                    valid = false;
                } else {
                    $("input[name=name]").next('.error').text('');
                    valid = true;
                }

                if ($("input[name=phone]").val() == '') {
                    $("input[name=phone]").next('.error').text('من فضلك ادخل رقم الموبايل');
                    valid = false;
                } else {
                    $("input[name=phone]").next('.error').text('');
                    valid = true;
                }

                if ($("textarea[name=message").val() == '') {
                    $("textarea[name=message").next('.error').text('من فضلك ادخل الرسالة');
                    valid = false;
                } else {
                    $("textarea[name=message").next('.error').text('');
                    valid = true;
                }
                return valid;
            }
            $("input[name=name]").on('keyup',function(){
                validation();
            });
            $("input[name=phone]").on('keyup',function(){
                validation();
            });
            $("textarea[name=message").on('keyup',function(){
                validation();
            });

            $('.theme-btn.btn-style-nine.contact-form').on('click', function(e) {
               
                if (validation()) {
                    name = $("input[name=name]").val();
                    email = $("input[name=email]").val();
                    phone = $("input[name=phone]").val();
                    message = $("textarea[name=message]").val();

                    $.ajax({
                        url: "{{ route('contacts_form.store') }}",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            name: name,
                            email: email,
                            phone: phone,
                            message: message,
                        },
                        success: function(response) {
                            $("input[name=name]").val('');
                            $("input[name=email]").val('');
                            $("input[name=phone]").val('');
                            $("textarea[name=message]").val('');
                            Toast.fire({
                                icon: 'success',
                                title: 'لقد تم ارسال طلبك بنجاح'
                            })
                        },
                    });
                }
            });
        </script>
    @endsection

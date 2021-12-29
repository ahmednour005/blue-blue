<!DOCTYPE html>
<html @if (LaravelLocalization::getCurrentLocale() == 'en') lang="en" @else  lang="ar" @endif>
@include('front.includes.header')

<body class="home-light-style">

    <div class="page-wrapper">
       @include('front.includes.translatenavbar')

        @yield('content')

        @include('front.includes.translatefooter')
    </div>

    @include('front.includes.script')
</body>

</html>

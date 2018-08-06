<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title-page')</title>
    {{--begin meta tag--}}
    @include('frontend.layouts.metas')
    {{--end meta tag--}}

    {{--before style--}}
    @yield('before-style')
    {{--end before style--}}

    <link rel="stylesheet" href="{{ asset('vendor/third-party/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/third-party/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/third-party/wow/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    {{--after style--}}
    @yield('after-style')
    {{--end after style--}}

    {{--before script header--}}
    @yield('before-script-header')
    {{--end before script header--}}

    <script src="{{ asset('vendor/third-party/wow/wow.js') }}"></script>

    {{-- after script header--}}
    @yield('after-script-header')
    {{--end after script header--}}

</head>
<body>
<div id="app">
    @include('frontend.layouts.navbar')
    <div class="container-body">
        @yield('content')
    </div>
    @include('frontend.layouts.footer')
</div>
</body>

{{--before script footer--}}
@yield('before-script-footer')
{{--end before script footer--}}
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor/third-party/jquery/dist/jquery.js') }}"></script>
<script>
    new WOW().init();
</script>

{{--after script footer--}}
@yield('after-script-footer')
{{--end after script footer--}}
</html>

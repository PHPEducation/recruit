<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-page')</title>

    <meta name="description"
          content="{{ Config::get('settings.description') }}">

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
@include('frontend.layouts.navbar')
@yield('content')
@include('frontend.layouts.footer')
</body>

{{--before script footer--}}
@yield('before-script-footer')
{{--end before script footer--}}
<script src="{{ asset('vendor/third-party/jquery/dist/jquery.js') }}"></script>
<script>
    new WOW().init();
</script>

{{--after script footer--}}
@yield('after-script-footer')
{{--end after script footer--}}
</html>

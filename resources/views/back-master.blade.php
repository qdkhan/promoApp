<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('back-end.includes.bootstrap')
    @include('back-end.includes.js-link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @include('back-end.includes.header')
    @include('back-end.includes.sidebar')
        @yield('content')
    @include('back-end.includes.footer')
</body>
</html>
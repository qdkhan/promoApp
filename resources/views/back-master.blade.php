<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('back-end.includes.bootstrap')
</head>
<body>
    @include('back-end.includes.header')
    @include('back-end.includes.sidebar')
        @yield('content')
    @include('back-end.includes.footer')
</body>
</html>
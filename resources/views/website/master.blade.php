<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <title>Green Shop - @yield('title')</title>
    @include('website.includes.style')
    @stack('styles')
</head>

<body>
    @include('website.includes.header')
    @yield('body')
    @include('website.includes.footer')
    @include('website.includes.script')

    @stack('scripts')
</body>

</html>

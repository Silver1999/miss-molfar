<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="page">
<head>
    <script defer src="{{$SRC_DIR}}/js/scripts.min.js?v={{$CACHE_VERSION}}"></script>
    <meta charset="utf-8">
    <title>lol</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @stack('styles')
    <style body="opacity: 0; overflow-x: hidden;" html="background-color: #000;"></style>
</head>
<body>
@include('web-site.g-tag._noscript.g-tag_noscript')
@stack('scripts:underBody')
<div class="page__wrapper">
    @if (session('error'))
        @include('web-site.alert.alert', ['message'=>session('error')])
    @endif
    @include('web-site.button-menu.button-menu')
    @include('web-site.header.header-brow')
    <main class="page__content" role="main">
        @yield('content')
    </main>
    @include('web-site.footer.footer-brow')
</div>
<link rel="stylesheet" type="text/css" href="{{$SRC_DIR}}/css/miss.min.css?v={{$CACHE_VERSION}}">
</body>
</html>



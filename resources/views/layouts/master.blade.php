<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
    <title>Free Home Shoppe Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @section('styles_vendors')
    {!! Html::style('midia/css/style.css') !!}
    {!! Html::style('midia/css/slider.css') !!}
    @show
    @section('jquery_scripts')
    {!! HTML::script('midia/js/jquery-1.7.2.min.js') !!}
    {!! HTML::script('midia/js/move-top.js') !!}
    {!! HTML::script('midia/js/easing.js') !!}
    {!! HTML::script('midia/js/startstop-slider.js') !!}
    @show
</head>
<body>
    <div class="wrap">
        @include('includes.head')
        <div class="main">
            @yield('content')
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
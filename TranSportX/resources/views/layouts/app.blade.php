<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="/">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","TransportX")</title>
    @yield("before_css")
    @include("layouts.head")
    @yield("after_css")
</head>

<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
@include("layouts.header")
<!-- Product Section Begin -->
<section>
    @yield("main")
</section>
<!-- Product Section End -->

@include("layouts.footer")
@yield("before_js")
@include("layouts.script")
@yield("after_js")
</body>
</html>

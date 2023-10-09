<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transportation HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/">
    @include("layouts.head")
</head>
<body>
@include("layouts.header")
<section>
@yield("main")
</section>
@include("layouts.loading")
@include("layouts.footer")
@include("layouts.script")
</body>
</html>

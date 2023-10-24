<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <base href="/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:title" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:image" content="https://yeshadmin.dexignzone.com/">
    <meta name="format-detection" content="telephone=no">
    @include("admin.layouts.head_admin")
</head>
<body class="hold-transition sidebar-mini layout-fixed">

@include("admin.layouts.nav_admin")
@include("admin.layouts.sidebar_admin")
<main>
    @yield("main")
</main>
@include("admin.layouts.footer_admin")
</body>
@include("admin.layouts.script_admin")
</html>

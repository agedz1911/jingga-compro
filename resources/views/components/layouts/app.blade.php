<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="jingga is the specialist that provides excellent service in
        Exhibition, Trade Show and other events" />
    <meta name="keywords" content="exhibition, medical, expo, service, trade, show" />
    <meta name="author" content="AvPro" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- tobii css -->
    <link href="css/tobii.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Slider -->
    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link href="css/style-dark.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="css/colors/yellow.css" rel="stylesheet" id="color-opt">
</head>

<body>
    <x-menu.navigation />

    {{ $slot }}

    <x-menu.footer />
    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Shuffle and tobii js -->
    <script src="js/shuffle.min.js"></script>
    <script src="js/tobii.min.js"></script>
    <!-- SLIDER -->
    <script src="js/swiper.min.js"></script>
    <script src="js/tiny-slider.js "></script>
    <!-- Icons -->
    <script src="js/feather.min.js"></script>
    <!-- Main Js -->
    <script src="js/plugins.init.js"></script><!--Note: All init (custom) js like tiny slider, counter, countdown, lightbox, gallery, swiper slider etc.-->
    <script src="js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->

</body>

</html>
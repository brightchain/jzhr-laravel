<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <title>{{ Admin::title() }}| @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
@section('style')
@show
<!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed">
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
@include('common.header')
<!-- END: LAYOUT/HEADERS/HEADER-1 -->
<!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
@section('banner')
@show
<!-- BEGIN: CONTENT/FEATURES/FEATURES-1 -->
@section('content')
@show
</div>
<!-- END: PAGE CONTAINER -->
@include('common.footer')
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/jquery.easing.min.js" type="text/javascript"></script>
<script src="../js/wow.js" type="text/javascript"></script>
<script src="../js/reveal-animate.js" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="../js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="../js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="../js/revolution.extension.slideanims.min.js" type="text/javascript"></script>
<script src="../js/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
<script src="../js/revolution.extension.navigation.min.js" type="text/javascript"></script>
<script src="../js/revolution.extension.video.min.js" type="text/javascript"></script>
<script src="../js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="../js/owl.carousel.min.js" type="text/javascript"></script>
<script src="../js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="../js/jquery.counterup.min.js" type="text/javascript"></script>
<script src="../js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="../js/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="../js/bootstrap-slider.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="../js/components.js" type="text/javascript"></script>
<script src="../js/components-shop.js" type="text/javascript"></script>
<script src="../js/app.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        App.init(); // init core
    });
</script>
<!-- END: THEME SCRIPTS -->
<!-- BEGIN: PAGE SCRIPTS -->
<script src="js/slider-4.js" type="text/javascript"></script>
<script src="js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="js/packery-mode.pkgd.min.js" type="text/javascript"></script>
<script src="js/jquery.requestAnimationFrame.js" type="text/javascript"></script>
<script src="js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="js/ilightbox.packed.js" type="text/javascript"></script>
<script src="js/isotope-gallery.js" type="text/javascript"></script>
<script src="js/revolution.extension.parallax.min.js" type="text/javascript"></script>

<!-- END: PAGE SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'js/analytics.js', 'ga');
    ga('create', 'UA-64667612-1', 'themehats.com');
    ga('send', 'pageview');
</script>
<script>$('.counter').counterUp();</script>
</body>


</html>
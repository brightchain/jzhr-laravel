<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <title>金砖华荣 | @yield('title')</title>
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
@section('slide')
@show
<!-- BEGIN: CONTENT/FEATURES/FEATURES-1 -->
@section('content')
@show


    <!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-1 -->
    <div class="c-content-box c-size-md c-bg-grey-1">
        <div class="container">
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold">新闻动态</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <div class="row">
                <div class="col-md-8 wow animate fadeInLeft">
                    <div class="c-content-media-2-slider" data-slider="owl">
                        <div class="c-content-label c-font-uppercase c-font-bold">公司新闻</div>
                        <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true"
                             data-auto-play="4000" data-rtl="false">
                            <div class="item">
                                <div class="c-content-media-2 c-bg-img-center"
                                     style="background-image: url(img/18.jpg); min-height: 360px;">
                                    <div class="c-panel">
                                        <div class="c-fav">
                                            <i class="icon-heart c-font-thin"></i>
                                            <p class="c-font-thin">16</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-media-2 c-bg-img-center"
                                     style="background-image: url(img/22.jpg); min-height: 360px;">
                                    <div class="c-panel">
                                        <div class="c-fav">
                                            <i class="icon-heart c-font-thin"></i>
                                            <p class="c-font-thin">24</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-media-2 c-bg-img-center"
                                     style="background-image: url(img/32.jpg); min-height: 360px;">
                                    <div class="c-panel">
                                        <div class="c-fav">
                                            <i class="icon-heart c-font-thin"></i>
                                            <p class="c-font-thin">19</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow animate fadeInRight">
                    <div class="c-content-testimonial-2-slider" data-slider="owl">
                        <div class="c-title c-font-uppercase c-theme-bg">新闻动态</div>
                        <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true"
                             data-auto-play="6000" data-rtl="false">
                            <div class="item">
                                <div class="c-content-testimonial-2" style="min-height: 360px;">
                                    <div class="c-testimonial c-font-bold c-font-uppercase">JANGO the best HTML theme
                                        I've purchased in months!
                                    </div>
                                    <div class="c-author">
                                        <div class="c-portrait" style="background-image: url(img/team13.jpg)"></div>
                                        <div class="c-name c-font-uppercase">Jim Cook</div>
                                        <p class="c-position c-theme c-font-uppercase">Orange Inc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-2" style="min-height: 360px;">
                                    <div class="c-testimonial c-font-bold c-font-uppercase">Quick and extremely easy to
                                        use with awesome customer support
                                    </div>
                                    <div class="c-author">
                                        <div class="c-portrait" style="background-image: url(img/team6.jpg)"></div>
                                        <div class="c-name c-font-uppercase">Jane Smith</div>
                                        <p class="c-position c-theme c-font-uppercase">Loop Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/MISC/LATEST-ITEMS-1 -->
    <!-- BEGIN: CONTENT/SLIDERS/CLIENT-LOGOS-2 -->
    <div class="c-content-box c-size-md c-bg-white">
        <div class="container">
            <!-- Begin: Testimonals 1 component -->
            <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
                <!-- Begin: Title 1 component -->
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold">Happy Customers</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <!-- End-->
                <!-- Begin: Owlcarousel -->
                <div class="owl-carousel owl-theme c-theme owl-bordered1 c-owl-nav-center" data-items="6"
                     data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3"
                     data-mobile-small-items="2" data-slide-speed="5000" data-rtl="false">
                    <div class="item">
                        <a href="#">
                            <img src="img/client1.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/client2.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/client3.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/client4.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/client5.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/client6.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/client5.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/client6.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/client5.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/client6.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/client5.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/client6.jpg" alt=""/>
                        </a>
                    </div>
                </div>
                <!-- End-->
            </div>
            <!-- End-->
        </div>
    </div>
    <!-- END: CONTENT/SLIDERS/CLIENT-LOGOS-2 -->
    <!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
<!--<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">
    <div class="container">
        <div class="c-prefooter c-bg-white">
            <div class="c-head">
                <div class="row">
                    <div class="col-md-6">
                        <div class="c-left">
                            <div class="socicon">
                                <a href="#"
                                   class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips"
                                   data-original-title="Facebook" data-container="body"></a>
                                <a href="#"
                                   class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-twitter tooltips"
                                   data-original-title="Twitter" data-container="body"></a>
                                <a href="#"
                                   class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-youtube tooltips"
                                   data-original-title="Youtube" data-container="body"></a>
                                <a href="#"
                                   class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-tumblr tooltips"
                                   data-original-title="Tumblr" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="c-right">
                            <h3 class="c-title c-font-uppercase c-font-bold">Download Mobile App</h3>
                            <div class="c-icons">
                                <a href="#"
                                   class="c-font-30 c-font-green-1 socicon-btn c-bg-grey-1-hover socicon-android tooltips"
                                   data-original-title="Android" data-container="body"></a>
                                <a href="#"
                                   class="c-font-30 c-font-grey-3 socicon-btn c-bg-grey-1-hover socicon-apple tooltips"
                                   data-original-title="Apple" data-container="body"></a>
                                <a href="#"
                                   class="c-font-30 c-font-blue-3 socicon-btn c-bg-grey-1-hover socicon-windows tooltips"
                                   data-original-title="Windows" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-line"></div>
            <div class="c-body">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="c-links c-theme-ul">
                            <li>
                                <a href="#">About Jango</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="#">Delivery</a>
                            </li>
                            <li>
                                <a href="#">Promotions</a>
                            </li>
                            <li>
                                <a href="#">News</a>
                            </li>
                        </ul>
                        <ul class="c-links c-theme-ul">
                            <li>
                                <a href="#">Blogs</a>
                            </li>
                            <li>
                                <a href="#">Projects</a>
                            </li>
                            <li>
                                <a href="#">Clients</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Features</a>
                            </li>
                            <li>
                                <a href="#">Stats</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-title c-font-uppercase c-font-bold">Latest Tweets</h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <div class="c-twitter">
                            <a class="twitter-timeline" href="https://twitter.com/themehats" data-tweet-limit="2"
                               data-chrome="noheader nofooter noscrollbar noborders transparent"> Loading tweets
                                by @themehats... </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-title c-font-uppercase c-font-bold">Contact Us</h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <p class="c-address c-font-16"> 25, Lorem Lis Street, Orange
                            <br/> California, US
                            <br/> Phone: 800 123 3456
                            <br/> Fax: 800 123 3456
                            <br/> Email:
                            <a href="mailto:info@jango.com">
                                <span class="c-theme-color">info@jango.com</span>
                            </a>
                            <br/> Skype:
                            <a href="#">
                                <span class="c-theme-color">jango</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="c-line"></div>
            <div class="c-foot">
                <div class="row">
                    <div class="col-md-7">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-font-uppercase c-font-bold">About
                                <span class="c-theme-font">JANGO</span>
                            </h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <p class="c-text c-font-16 c-font-regular">Tolerare unus ducunt ad brevis buxum. Est alter
                            buxum, cesaris. Eheu, lura! Racanas crescere in emeritis oenipons! Ubi est rusticus
                            repressor? Lixa grandis clabulare est. Eposs tolerare.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-font-uppercase c-font-bold">Subscribe to Newsletter</h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <div class="c-line-left hide"></div>
                        <form action="#">
                            <div class="input-group input-group-lg c-square">
                                <input type="text" class="form-control c-square c-font-grey-3 c-border-grey c-theme"
                                       placeholder="Your Email Here"/>
                                <span class="input-group-btn">
                                            <button class="btn c-theme-btn c-theme-border c-btn-square c-btn-uppercase c-font-16"
                                                    type="button">Subscribe</button>
                                        </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-postfooter c-bg-dark-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 c-col">
                    <p class="c-copyright c-font-grey">2015 &copy; JANGO
                        <span class="c-font-grey-3">All Rights Reserved.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer> -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
    <div class="c-prefooter">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="c-container c-first">
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold c-font-white">金砖
                                <span class="c-theme-font">华荣</span>
                            </h3>
                            <div class="c-line-left hide"></div>
                            <p class="c-text"> 深圳金砖华荣资产管理有限公司（中基协私募基金管理人编号：P1014425）成立于2015年1月...</p>
                        </div>
                        <ul class="c-links">
                            <li>
                                <a href="#">金砖简介</a>
                            </li>
                            <li>
                                <a href="#">精英团队</a>
                            </li>
                            <li>
                                <a href="#">产品与服务</a>
                            </li>
                            <li>
                                <a href="#">工作机会</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="c-container">
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold c-font-white">金砖动态</h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <div class="c-blog">
                            <div class="c-post">
                                <div class="c-post-img">
                                    <img src="img/81.jpg" alt="" class="img-responsive" />
                                </div>
                                <div class="c-post-content">
                                    <h4 class="c-post-title">
                                        <a href="#">员工生日会活动</a>
                                    </h4>
                                    <p class="c-text">公司为3月份生日的同事举行员工生日会活动，更多精彩游戏...</p>
                                </div>
                            </div>
                            <div class="c-post c-last">
                                <div class="c-post-img">
                                    <img src="img/13.jpg" alt="" class="img-responsive" />
                                </div>
                                <div class="c-post-content">
                                    <h4 class="c-post-title">
                                        <a href="#">产品路演发布会</a>
                                    </h4>
                                    <p class="c-text">3月12号在中信证券大厦召开产品路演发布会，这是一个股权类基金产品...</p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-md c-btn-border-1x c-theme-btn c-btn-uppercase c-btn-square c-btn-bold c-read-more hide">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="c-container">
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold c-font-white">微信公众号</h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <img src="img/weixin.jpg" alt="" width="120px" class="img-responsive" />
                        <p style="padding-top: 10px">扫描关注金砖华荣
                            <br/>获取我们最新动态</p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="c-container c-last">
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold c-font-white">联系我们</h3>
                            <div class="c-line-left hide"></div>
                            <p></p>
                        </div>
                        <ul class="c-socials">
                            <li>
                                <a href="#">
                                    <i class="icon-pointer"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-call-end"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bubbles"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-envelope"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="c-address">
                            <li>
                                <i class="icon-pointer c-theme-font"></i>  深圳市前海深港合作区前湾一路1号A栋201室</li>
                            <li>
                                <i class="icon-call-end c-theme-font"></i> 0755-82986278</li>
                            <li>
                                <i class="icon-envelope c-theme-font"></i> manager@chinajzhr.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-postfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 c-col">
                    <p class="c-copyright c-font-grey">2016-2019 &copy; 金砖华荣
                        <span class="c-font-grey-3">All Rights Reserved.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- END: LAYOUT/FOOTERS/FOOTER-6 -->
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
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.min.js" type="text/javascript"></script>
<script src="js/wow.js" type="text/javascript"></script>
<script src="js/reveal-animate.js" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="js/revolution.extension.slideanims.min.js" type="text/javascript"></script>
<script src="js/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
<script src="js/revolution.extension.navigation.min.js" type="text/javascript"></script>
<script src="js/revolution.extension.video.min.js" type="text/javascript"></script>
<script src="js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="js/jquery.counterup.min.js" type="text/javascript"></script>
<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="js/bootstrap-slider.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="js/components.js" type="text/javascript"></script>
<script src="js/components-shop.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
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
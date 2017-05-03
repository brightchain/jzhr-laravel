@extends('common.layouts')
@section('title','首页')
@section('style')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <!--<link href="css/socicon.css" rel="stylesheet" type="text/css" /> -->
    <link href="css/bootstrap-social.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css"" rel="stylesheet" type="text/css" />
    <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="css/settings.css" rel="stylesheet" type="text/css" />
    <link href="css/layers.css" rel="stylesheet" type="text/css" />
    <link href="css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="css/slider.css" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="css/ilightbox.css" rel="stylesheet" type="text/css" />
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="css/default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    @stop
@section('banner')
    <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
    <section class="c-layout-revo-slider c-layout-revo-slider-4" dir="ltr">
        <div class="tp-banner-container c-theme">
            <div class="tp-banner rev_slider" data-version="5.0">
                <ul>
                    <!--BEGIN: SLIDE #1 -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                        <img alt="" src="upload/{{$slides[0]->imgsrc}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="500" data-start="1000" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                             data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                            <h3 class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block"> {{$slides[0]->txt1}}
                                <br>{{$slides[0]->txt2}}</h3>
                        </div>
                        <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="110" data-speed="900" data-start="2000" data-transform_idle="o:1;" data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                             data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;">
                            <a href="{{$slides[0]->link}}" class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">了解更多</a>
                        </div>
                    </li>
                        <!--BEGIN: SLIDE #2 -->
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                            <img alt="" src="upload/{{$slides[1]->imgsrc}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="500" data-start="1000" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                 data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                                <h3 class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block">{{$slides[1]->txt1}}
                                    <br>{{$slides[1]->txt2}}</h3>
                            </div>
                            <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="110" data-speed="900" data-start="2000" data-transform_idle="o:1;" data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;"
                                 data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;">
                                <a href="{{$slides[1]->link}}" class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">了解更多</a>
                            </div>
                        </li>
                        <!--END -->
                        <!--BEGIN: SLIDE #3 -->
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="700" data-delay="7000" data-thumb="">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img alt="" src="upload/{{$slides[2]->imgsrc}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="visible-xs" />
                            <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="img/jzhr.mp4" data-videopreload="preload" data-videoloop="none"
                                 data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true"> </div>
                            <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-30" data-speed="500" data-start="1000" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                 data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                                <h3 class="c-main-title-square c-font-55 c-font-bold c-font-center c-font-uppercase c-font-white c-block">{{$slides[2]->txt1}}
                                    <br>{{$slides[2]->txt2}}</h3>
                            </div>
                            <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="130" data-speed="900" data-start="2000" data-transform_idle="o:1;" data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;"
                                 data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;">
                                <a href="{{$slides[2]->link}}" class="c-action-btn btn btn-lg c-btn-square c-btn-border-2x c-btn-white c-btn-bold c-btn-uppercase">了解更多</a>
                            </div>
                        </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
    @stop
@section('content')
    <div class="c-content-box c-size-md c-bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="c-content-feature-1 wow animate fadeInUp">
                        <div class="c-content-line-icon c-theme c-icon-26"></div>
                        <h3 class="c-font-uppercase c-font-bold">{{$name['about']}}</h3>
                        <a href="#">
                            <p class="c-font-thin"> {{$values['about']}}...</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="c-content-feature-1 wow animate fadeInUp" data-wow-delay="0.2s">
                        <div class="c-content-line-icon c-theme c-icon-bulb"></div>
                        <h3 class="c-font-uppercase c-font-bold">{{$name['invest']}}</h3>
                        <a href="#">
                        <p class="c-font-thin">{{$values['invest']}}...</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 c-card">
                    <div class="c-content-feature-1 wow animate fadeInUp" data-wow-delay="0.4s">
                        <div class="c-content-line-icon c-theme c-icon-21"></div>
                        <h3 class="c-font-uppercase c-font-bold">{{$name['product']}}</h3>
                        <a href="#">
                        <p class="c-font-thin">{{$values['product']}}...</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/FEATURES/FEATURES-1 -->
    <!-- BEGIN: CONTENT/MISC/WHY-CHOOSE-US-1 -->
    <div class="c-content-box c-size-lg c-bg-grey-1">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-md-7">
                        <div class="c-content-feature-5">
                            <div class="c-content-title-1 wow amimate fadeInDown">
                                <h3 class="c-left c-font-dark c-font-uppercase c-font-bold">关于
                                    <br/>金砖</h3>
                                <div class="c-line-left c-bg-blue-3 c-theme-bg"></div>
                            </div>
                            <div class="c-text wow animate fadeInLeft"> {{$values['jzhrus']}}...</div>
                            <button type="submit" class="btn c-btn-uppercase btn-md c-btn-bold c-btn-square c-theme-btn wow animate fadeIn">详细介绍</button>
                            <img class="c-photo img-responsive wow animate fadeInUp" width="420" alt="" src="img/jango-intro-2.jpg" /> </div>
                    </div>
                    <div class="col-md-5">
                        <div class="c-content-accordion-1 c-theme wow animate fadeInRight">
                            <div class="panel-group" id="accordion" role="tablist">
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a class="c-font-bold c-font-uppercase c-font-19" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> {{$name['team']}}</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body c-font-18">{{$values['team']}}</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed c-font-uppercase c-font-bold c-font-19" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> {{$name['riskcontrol']}}</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body c-font-18"> {{$values['riskcontrol']}}</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed c-font-uppercase c-font-bold c-font-19" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> {{$name['deliver']}}</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body c-font-18"> {{$values['deliver']}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/MISC/WHY-CHOOSE-US-1 -->
    <!-- BEGIN: CONTENT/TILES/TILE-3 -->
    <div class="c-content-box c-size-md c-bg-white">
        <div class="c-content-tile-grid c-bs-grid-reset-space" data-auto-height="true">
            <div class="c-content-title-1 wow animate fadeInDown">
                <h3 class="c-font-uppercase c-center c-font-bold">产品与服务</h3>
                <div class="c-line-center"></div>
            </div>
            <div class="row wow animate fadeInUp">
                <div class="col-md-6">
                    <div class="c-content-tile-1 c-bg-green">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="c-tile-content c-content-v-center" data-height="height">
                                    <div class="c-wrapper">
                                        <div class="c-body c-center">
                                            <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold c-font-white"> 契约类 </h3>
                                            <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold c-font-white"> 金砖金汇1号私募股权投资基金</h3>
                                            <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="c-tile-content c-arrow-right c-arrow-green c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="#">
                                                <i class="icon-link"></i>
                                            </a>
                                            <a href="img/79.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="c-image c-overlay-object" data-height="height" style="background-image: url(img/79.jpg)"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="c-content-tile-1 c-bg-brown-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="c-tile-content c-content-v-center" data-height="height">
                                    <div class="c-wrapper">
                                        <div class="c-body c-center">
                                            <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold c-font-white"> 混合类 </h3>
                                            <p class="c-tile-body c-font-white">金砖华荣精选混合型投资基金1号</p>
                                            <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="c-tile-content c-arrow-right c-arrow-brown-2 c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="#">
                                                <i class="icon-link"></i>
                                            </a>
                                            <a href="img/90.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="c-image c-overlay-object" data-height="height" style="background-image: url(img/90.jpg)"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="c-content-tile-1 c-bg-red-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="c-tile-content c-arrow-left c-arrow-red-2 c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="#">
                                                <i class="icon-link"></i>
                                            </a>
                                            <a href="img/41.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="c-image c-overlay-object" data-height="height" style="background-image: url(img/41.jpg)"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="c-tile-content c-content-v-center" data-height="height">
                                    <div class="c-wrapper">
                                        <div class="c-body c-center">
                                            <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold c-font-white"> 契约类</h3>
                                            <p class="c-tile-body c-font-white">金砖华荣卓越一号</p>
                                            <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="c-content-tile-1 c-bg-blue-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="c-tile-content c-arrow-left c-arrow-blue-3 c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="#">
                                                <i class="icon-link"></i>
                                            </a>
                                            <a href="img/78.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="c-image c-overlay-object" data-height="height" style="background-image: url(img/78.jpg)"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="c-tile-content c-content-v-center" data-height="height">
                                    <div class="c-wrapper">
                                        <div class="c-body c-center">
                                            <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold c-font-white"> 契约类 </h3>
                                            <p class="c-tile-body c-font-white">金汇2号-私募债权投资基金</p>
                                            <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/TILES/TILE-3 -->


    <!-- BEGIN: CONTENT/ISOTOPE/GALLERY-1 -->
    <div class="c-content-box c-size-md c-bg-img-center" style="background-image: url(img/bg-82.jpg)">
        <div class="container">
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold c-font-white">活动照片</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <div class="c-content-isotope-gallery c-opt-1">
                <div class="c-content-isotope-item wow animate zoomIn" data-wow-delay="0">
                    <div class="c-content-isotope-image-container">
                        <img class="c-content-isotope-image" src="img/13.jpg" />
                        <div class="c-content-isotope-overlay c-ilightbox-image-1" href="img/13.jpg" data-options="thumbnail:'img/13.jpg'" data-caption="<h4>路演活动</h4><p>金砖金汇1号私募股权投资基金路演发布会</p>">
                            <div class="c-content-isotope-overlay-icon">
                                <i class="fa fa-plus c-font-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item c-item-size-double wow animate zoomIn" data-wow-delay="0.1s">
                    <div class="c-content-isotope-image-container">
                        <img class="c-content-isotope-image" src="img/81.jpg" />
                        <div class="c-content-isotope-overlay c-ilightbox-image-1" href="img/81.jpg" data-options="thumbnail:'img/81.jpg'" data-caption="<h4>女神节</h4><p>2017年3月8号公司准备的小礼品</p>">
                            <div class="c-content-isotope-overlay-icon">
                                <i class="fa fa-plus c-font-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item">
                    <div class="c-content-isotope-image-container wow animate zoomIn" data-wow-delay="0.2s">
                        <img class="c-content-isotope-image" src="img/63.jpg" />
                        <div class="c-content-isotope-overlay c-ilightbox-image-1" href="img/63.jpg" data-options="thumbnail:'img/63.jpg'" data-caption="<h4>生日快乐</h4><p>员工生日会活动</p>">
                            <div class="c-content-isotope-overlay-icon">
                                <i class="fa fa-plus c-font-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item">
                    <div class="c-content-isotope-image-container wow animate zoomIn" data-wow-delay="0.3s">
                        <img class="c-content-isotope-image" src="img/48.jpg" />
                        <div class="c-content-isotope-overlay c-ilightbox-image-1" href="img/48.jpg" data-options="thumbnail:'img/48.jpg'" data-caption="<h4>员工生日会</h4><p>员工生日会小礼物</p>">
                            <div class="c-content-isotope-overlay-icon">
                                <i class="fa fa-plus c-font-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item">
                    <div class="c-content-isotope-image-container wow animate zoomIn" data-wow-delay="0.4s">
                        <img class="c-content-isotope-image" src="img/33.jpg" />
                        <div class="c-content-isotope-overlay c-ilightbox-image-1" href="img/33.jpg" data-options="thumbnail:'img/33.jpg'" data-caption="<h4>集体游戏</h4><p></p>">
                            <div class="c-content-isotope-overlay-icon">
                                <i class="fa fa-plus c-font-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item c-item-size-double wow animate zoomIn" data-wow-delay="0.5s">
                    <div class="c-content-isotope-image-container">
                        <img class="c-content-isotope-image" src="img/36.jpg" />
                        <div class="c-content-isotope-overlay c-ilightbox-image-1" href="img/36.jpg" data-options="thumbnail:'img/36.jpg'" data-caption="<h4>拓展活动</h4><p>莲花山拓展活动</p>">
                            <div class="c-content-isotope-overlay-icon">
                                <i class="fa fa-plus c-font-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/ISOTOPE/GALLERY-1 -->
    <!-- BEGIN: CONTENT/SLIDERS/TEAM-2 -->
    <div class="c-content-box c-size-md c-bg-grey-1">
        <div class="container">
            <!-- Begin: Testimonals 1 component -->
            <div class="c-content-person-1-slider" data-slider="owl">
                <!-- Begin: Title 1 component -->
                <div class="c-content-title-1 wow animated fadeIn">
                    <h3 class="c-center c-font-uppercase c-font-bold">管理团队</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <!-- End-->
                <!-- Begin: Owlcarousel -->
                <div class="owl-carousel owl-theme c-theme c-owl-nav-center wow animated fadeInUp" data-items="3" data-slide-speed="8000" data-rtl="false">
                    <div class="c-content-person-1 c-option-2">
                        <div class="c-caption c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="#">
                                        <i class="icon-link"></i>
                                    </a>
                                    <a href="img/team1.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-2">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="img/team1.jpg" class="img-responsive c-overlay-object" alt=""> </div>
                        <div class="c-body">
                            <div class="c-head">
                                <div class="c-name c-font-uppercase c-font-bold">贺孟杰</div>
                                <ul class="c-socials c-theme-ul">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bubbles"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-envelope-open"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-position"> 总裁, 董事会. </div>
                            <p> 经管专业毕业，曾任职于深赛格、金元证券、小牛资本，在私募股权投资基金方面实践经验丰富。 </p>
                        </div>
                    </div>
                    <div class="c-content-person-1 c-option-2">
                        <div class="c-caption c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="#">
                                        <i class="icon-link"></i>
                                    </a>
                                    <a href="img/team4.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-2">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="img/team4.jpg" class="img-responsive c-overlay-object" alt=""> </div>
                        <div class="c-body">
                            <div class="c-head">
                                <div class="c-name c-font-uppercase c-font-bold">阚达</div>
                                <ul class="c-socials c-theme-ul">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bubbles"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-envelope-open"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-position"> 投资总监, 证券投资部. </div>
                            <p> 北京外国语大学双学士，曾先后任职于八阳资产、中欧瑞博、中证投资、KPMG，8年证券投资从业经验。</p>
                        </div>
                    </div>
                    <div class="c-content-person-1 c-option-2">
                        <div class="c-caption c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="#">
                                        <i class="icon-link"></i>
                                    </a>
                                    <a href="img/team7.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-2">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="img/team7.jpg" class="img-responsive c-overlay-object" alt=""> </div>
                        <div class="c-body">
                            <div class="c-head">
                                <div class="c-name c-font-uppercase c-font-bold">孙东旭</div>
                                <ul class="c-socials c-theme-ul">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bubbles"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-envelope-open"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-position"> 产品经理, 产品研发部. </div>
                            <p> 新加坡南洋理工大学金融硕士，具有丰富的投资研发及数据分析从业经验。有多个私募基金设立规划经历。 </p>
                        </div>
                    </div>
                   <!-- <div class="c-content-person-1 c-option-2">
                        <div class="c-caption c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="#">
                                        <i class="icon-link"></i>
                                    </a>
                                    <a href="img/team6.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-2">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="img/team6.jpg" class="img-responsive c-overlay-object" alt=""> </div>
                        <div class="c-body">
                            <div class="c-head">
                                <div class="c-name c-font-uppercase c-font-bold">Sara Conner</div>
                                <ul class="c-socials c-theme-ul">
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-position"> Director, JANGO Inc. </div>
                            <p> Lorem ipsum dolor sit amet, dolor nemo amet elit. Nulla nemo consequuntur. </p>
                        </div>
                    </div>
                    <div class="c-content-person-1 c-option-2">
                        <div class="c-caption c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="#">
                                        <i class="icon-link"></i>
                                    </a>
                                    <a href="img/team8.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-2">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="img/team8.jpg" class="img-responsive c-overlay-object" alt=""> </div>
                        <div class="c-body">
                            <div class="c-head">
                                <div class="c-name c-font-uppercase c-font-bold">Jim Book</div>
                                <ul class="c-socials c-theme-ul">
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-position"> Director, JANGO Inc. </div>
                            <p> Lorem ipsum dolor sit amet, dolor nemo amet elit. Nulla nemo consequuntur. </p>
                        </div>
                    </div>-->
                </div>
                <!-- End-->
            </div>
            <!-- End-->
        </div>
    </div>
    <!-- END: CONTENT/SLIDERS/TEAM-2 -->
    <!-- BEGIN: CONTENT/FEATURES/FEATURES-11 -->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url(img/bg-51.jpg)">
        <div class="container">
            <div class="c-content-feature-8 c-opt-1">
                <ul class="c-grid">
                    <li>
                        <div class="c-card c-font-right c-bg-opacity-1">
                            <h3 class="c-font-40 c-font-white c-font-bold c-font-uppercase">立足长远<br/>
                                价值投资</h3>
                            <a href="">
                                <p class="c-font-white c-font-16">{{$values['values']}}</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="c-card c-bg-opacity-1">
                            <h3 class="c-font-40 c-font-white c-font-bold c-font-uppercase">严控风险<br/>
                                理性投资</h3>
                            <a href="">
                                <p class="c-font-white c-font-16">{{$values['reason']}}</p>
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="c-grid">
                    <li>
                        <div class="c-card c-font-right c-bg-opacity-1">
                            <h3 class="c-font-40 c-font-white c-font-bold c-font-uppercase">持续创新<br/>
                                科学投资</h3>
                            <a href="">
                                <p class="c-font-white c-font-16">{{$values['science']}}</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="c-card c-img c-bg-img-center" style="background-image: url(img/6.jpg)">
                            <h3 class="c-font-white c-font-50 c-font-center">&nbsp;</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


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
    <!-- END: CONTENT/FEATURES/FEATURES-11 -->
    @stop

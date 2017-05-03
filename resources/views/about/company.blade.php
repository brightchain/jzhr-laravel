@extends('common.layouts')
@section('title','{{$title}}')
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

        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
        <div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(/img/bg-9.jpg)">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-bold c-font-dark c-font-20 c-font-slim">{{$title}}</h3>
                    <h4 class="c-font-dark c-font-slim"> Page Sub Title Goes Here </h4>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li>
                        <a href="/" class="c-font-dark">首页</a>
                    </li>
                    <li class="c-font-dark">/</li>
                    <li>
                        <a href="{{$url}}" class="c-font-dark">{{$title}}</a>
                    </li>
                    <li class="c-font-dark">/</li>
                    <li class="c-state_active c-font-dark">公司简介</li>
                </ul>
            </div>
        </div>
        <!-- BEGIN: CONTENT/MISC/ABOUT-2 -->
        <div class="c-content-box c-size-md c-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow animate fadeInUp">
                        <p>深圳金砖华荣资产管理有限公司（简称“金砖华荣”）是通过中国证券投资基金业协会备案，以股权投资、房地产投资和并购等私募投资基金产品为核心业务的综合性资产管理公司。</p>
                        <p>金砖华荣凝聚了资质深厚的投顾团队和卓绝杰出的行业精英，依靠灵敏前瞻的理财触觉、专业领先的投资策略、科学规范的风险防御能力，将投资焦点聚于金融、房地产、智能科技等成长性确定的行业和板块，致力于为个人、企业和机构提供优质的资产管理服务。</p>
                        <p>公司以优秀团队的投资指引、完善可靠的管理制度、科学合规的风控意识，积极承担新时期中国金融高速发展的使命，着力于成为领先国内、具有国际影响力的金融机构。金砖华荣始终以承载投资人财富为己任，未来公司将精准把握大陆多层次资本市场、房地产市场，持续创造佳绩。</p>
                    </div>
                </div>


            </div>
        </div>
        <!-- END: CONTENT/MISC/ABOUT-2 -->
        <!-- BEGIN: CONTENT/FEATURES/FEATURES-8 -->
        <div class="c-content-box c-size-md c-bg-grey-1">
            <div class="container">
                <div class="c-content-feature-10">
                    <!-- Begin: Title 1 component -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-center c-font-bold">公司历程</h3>
                        <div class="c-line-center c-theme-bg"></div>
                        <p class="c-font-center">深圳金砖华荣资产管理有限公司发展历程</p>
                    </div>
                    <!-- End-->
                    <ul class="c-list">
                        <li>
                            <div class="c-card c-font-right wow animate fadeInLeft">
                                <i class="icon-trophy c-font-27 c-theme-font c-float-right c-border c-border-opacity"></i>
                                <div class="c-content c-content-right">
                                    <h3 class="c-font-uppercase c-font-bold">2015年1月</h3>
                                    <p> 深圳金砖华荣资产管理有限公司成立，注册资本3000万元。 </p>
                                </div>
                            </div>
                            <div class="c-border-bottom c-bg-opacity-2"></div>
                        </li>
                        <div class="c-border-middle c-bg-opacity-2"></div>
                        <li>
                            <div class="c-card wow animate fadeInRight">
                                <i class="icon-rocket c-font-27 c-theme-font c-float-left c-border c-border-opacity"></i>
                                <div class="c-content c-content-left">
                                    <h3 class="c-font-uppercase c-font-bold">2016年7月</h3>
                                    <p> 正式加入中国证券投资基金业协会。 </p>
                                </div>
                            </div>
                            <div class="c-border-bottom c-bg-opacity-2"></div>
                        </li>
                    </ul>
                    <ul class="c-list">
                        <li>
                            <div class="c-card c-font-right wow animate fadeInLeft">
                                <i class="icon-layers c-font-27 c-theme-font c-float-right c-border c-border-opacity"></i>
                                <div class="c-content c-content-right">
                                    <h3 class="c-font-uppercase c-font-bold">2016年8月</h3>
                                    <p> 金砖华荣卓越一号私募投资基金在中国证券基金业协会完成备案。 </p>
                                </div>
                            </div>
                            <div class="c-border-bottom c-bg-opacity-2"></div>
                        </li>
                        <div class="c-border-middle c-bg-opacity-2"></div>
                        <li class="c-border-grey-1-5">
                            <div class="c-card wow animate fadeInRight">
                                <i class="icon-present c-font-27 c-theme-font c-float-left c-border c-border-opacity"></i>
                                <div class="c-content c-content-left">
                                    <h3 class="c-font-uppercase c-font-bold">2016年11月</h3>
                                    <p> 金砖荣投二号私募股权投资基金成立。 </p>
                                </div>
                            </div>
                            <div class="c-border-bottom c-bg-opacity-2"></div>
                        </li>
                    </ul>
                    <ul class="c-list">
                        <li>
                            <div class="c-card c-font-right wow animate fadeInLeft">
                                <i class="icon-book-open c-font-27 c-theme-font c-float-right c-border c-border-opacity"></i>
                                <div class="c-content c-content-right">
                                    <h3 class="c-font-uppercase c-font-bold">2016年12月</h3>
                                    <p> 金砖金汇一号私募股权投资基金成立。 </p>
                                </div>
                            </div>
                            <div class="c-border-bottom c-bg-opacity-2 c-mobile"></div>
                        </li>
                        <div class="c-border-middle c-bg-opacity-2"></div>
                        <li>
                            <div class="c-card wow animate fadeInRight">
                                <i class="icon-support c-font-27 c-theme-font c-float-left c-border c-border-opacity"></i>
                                <div class="c-content c-content-left">
                                    <h3 class="c-font-uppercase c-font-bold">2016年12月</h3>
                                    <p> 金砖衡盛生物IPO股权投资已成立 </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/FEATURES/FEATURES-8 -->
        <!-- BEGIN: CONTENT/MISC/SERVICES-2 -->
        <div class="c-content-box c-size-md c-bg-white">
            <div class="container">
                <div class="c-content-feature-2-grid">
                    <div class="c-content-title-1 c-center c-margin-t-80">
                        <h3 class="c-font-uppercase c-font-bold">企业文化</h3>
                        <div class="c-line-center"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="c-content-feature-2 c-option-2 c-theme-bg-parent-hover wow animated fadeInUp">
                                <div class="c-icon-wrapper c-theme-bg-on-parent-hover">
                                    <div class="c-content-line-icon c-theme c-icon-screen-chart"></div>
                                </div>
                                <h3 class="c-font-uppercase c-title">企业宗旨</h3>
                                <p>共享财富盛宴，铸造人生价值</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="c-content-feature-2 c-option-2 c-theme-bg-parent-hover wow animated fadeInUp">
                                <div class="c-icon-wrapper c-theme-bg-on-parent-hover">
                                    <div class="c-content-line-icon c-theme c-icon-support"></div>
                                </div>
                                <h3 class="c-font-uppercase c-title">企业使命</h3>
                                <p>构建和谐健康、生机繁荣的金融生态环境。</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="c-content-feature-2 c-option-2 c-theme-bg-parent-hover wow animated fadeInUp">
                                <div class="c-icon-wrapper c-theme-bg-on-parent-hover">
                                    <div class="c-content-line-icon c-theme c-icon-comment"></div>
                                </div>
                                <h3 class="c-font-uppercase c-title">企业愿景</h3>
                                <p>成为洞悉资本市场的先行者和客户信赖的资产管理专家</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="c-content-feature-2 c-option-2 c-theme-bg-parent-hover wow animated fadeInUp">
                                <div class="c-icon-wrapper c-theme-bg-on-parent-hover">
                                    <div class="c-content-line-icon c-theme c-icon-bulb"></div>
                                </div>
                                <h3 class="c-font-uppercase c-title">正行笃实</h3>
                                <p>致力实现长期可持续回报的目标，脚踏实地，厚积薄发。</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="c-content-feature-2 c-option-2 c-theme-bg-parent-hover wow animated fadeInUp">
                                <div class="c-icon-wrapper c-theme-bg-on-parent-hover">
                                    <div class="c-content-line-icon c-theme c-icon-sticker"></div>
                                </div>
                                <h3 class="c-font-uppercase c-title">运筹制胜</h3>
                                <p>运用科学数据手段分析评估项目，掌控全局，决胜千里。</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="c-content-feature-2 c-option-2 c-theme-bg-parent-hover wow animated fadeInUp">
                                <div class="c-icon-wrapper c-theme-bg-on-parent-hover">
                                    <div class="c-content-line-icon c-theme c-icon-globe"></div>
                                </div>
                                <h3 class="c-font-uppercase c-title">诚信善为</h3>
                                <p>坚持诚信规范的制度并严格自律，守信践行，追求品质。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/MISC/SERVICES-2 -->
    @stop
@section('content')
    @stop

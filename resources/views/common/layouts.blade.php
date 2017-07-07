
<!DOCTYPE html>
<html>
<head>
    <title>{{Admin::title()}}</title>

    <meta name="keywords" content="物业并购基金,房地产私募基金,深圳基金公司" />

    <meta name="description" content="s深圳金砖华荣资产管理有限公司" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="renderer" content="webkit" />
    <link rel="stylesheet" href="/css/uikit/uikit.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/uikit/uikit.min.js"></script>

    <script src="js/uikit/components/slideshow.min.js"></script>
    <script src="js/uikit/components/slideshow-fx.min.js"></script>
    <script src="js/uikit/components/slider.min.js"></script>


    <link rel="stylesheet" href="css/uikit/components/slideshow.min.css" />
    <link rel="stylesheet" href="css/uikit/components/slidenav.min.css" />
    <link rel="stylesheet" href="css/uikit/components/dotnav.min.css" />
    <link rel="stylesheet" href="css/uikit/components/slider.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/home.css" />
    <script src="js/main.js"></script>
    {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--if ($.cookie("isClose") != 'yes') {--}}
                {{--showinfos('合格投资者认定',2);--}}
            {{--}--}}


        {{--});//$(document).ready--}}
    {{--</script>--}}
</head>
<body>
<div class="wrap">

    <div class="top-bar">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-3-10"> </div>
                <div class="uk-width-7-10 uk-text-right">


                    <div id="top-member-status"></div>



                    <a href="#" class="mobile-code"><i class="uk-icon-mobile"></i>手机<div class="weixin-code"></div></a>
                    <a href="#"><i class="uk-icon-phone-square"></i>400-1586-999</a>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-container uk-container-center uk-clearfix menu">
        <div class="uk-grid">
            <div class="uk-width-1-5 uk-padding-remove"><div class="logo"><a href="./"><img src="img/logo-3.png" alt="金砖华荣官网官网" title="金砖华荣官网官网"></a></div></div>
            <div class="uk-width-4-5">
                <nav class="uk-navbar">
                    <div class="uk-navbar-flip">
                        <ul class="uk-navbar-nav">
                            <li><a href="./">首页</a></li>
                            <li class="uk-parent" data-uk-dropdown><a href="#">关于我们</a>
                                <div class="uk-dropdown uk-dropdown-navbar">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <li><a href="#">公司简介</a></li>
                                        <li><a href="#">核心团队</a></li>
                                        <li><a href="#">企业文化</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="uk-parent" data-uk-dropdown><a href="#">产品服务</a>
                                <div class="uk-dropdown uk-dropdown-navbar">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <li><a href="#">业务范围</a></li>
                                        <li><a href="#">在售产品</a></li>
                                        <li><a href="#">信息披露</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="uk-parent" data-uk-dropdown><a href="#">风险管理</a>
                                <div class="uk-dropdown uk-dropdown-navbar">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <li><a href="#">风控体系</a></li>
                                        <li><a href="#">风控流程</a></li>
                                        <li><a href="#">合规管理</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="uk-parent" data-uk-dropdown><a href="#">媒体中心</a>
                                <div class="uk-dropdown uk-dropdown-navbar">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <li><a href="#">媒体报道</a></li>
                                        <li><a href="#">活动信息</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">客户中心</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div><!--end menu-->
    <div class="banner">

        <div class="uk-slidenav-position" data-uk-slideshow="{autoplay:true}">

            <div class="regrm" style="display:none">
                <div class="uk-form-icon uk-margin-large-top"><i class="uk-icon-mobile"></i><input name="phoneid" type="text" id="phoneid" maxlength="11" placeholder="请输入您的手机号码"></div>
                <div class="uk-form-icon"><i class="uk-icon-lock"></i><input name="password" type="password" id="password" maxlength="64" placeholder="请输入您的密码"></div>
                <div class="uk-form-icon"><i class="uk-icon-file-text-o"></i><input name="confid" type="text" id="confid" maxlength="4" placeholder="输入验证码">
                    <div class="vcode"><img title="点击刷新" src="inc/captcha.php" align="absbottom" onClick="this.src='inc/captcha.php?'+Math.random();"></div>
                </div>

                <div class="reg-buts"><button class="uk-button uk-button-danger uk-border-rounded" type="button">注册</button> <button class="uk-button uk-button-danger uk-border-rounded" type="button">登录</button></div>
                <div class="uk-text-right uk-margin-large-right"><a href="#">忘记密码</a></div>
            </div>

            <ul class="uk-slideshow uk-overlay-active"  >
                <li>
                    <img src="img/banner3.jpg"  alt="">
                    <div class="uk-overlay-panel uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-left">
                        <div class="banner-text"><div class="uk-text-right">
                                <h1>致力打造构建和谐健康、生机繁荣的金融生态环境</h1>
                                <h2>——正行笃实、运筹制胜、诚信善为</h2>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/banner1.jpg"  alt="">
                    <div class="uk-overlay-panel uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-left">
                        <div class="banner-text"><div class="uk-text-right">
                                <h1>致力于为个人、企业和机构提供优质的资产管理服务</h1>
                                <h2>——金砖华荣</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/banner3.jpg"  alt="">
                    <div class="uk-overlay-panel uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-left">
                        <div class="banner-text"><div class="uk-text-right">
                                <h1>致力打造构建和谐健康、生机繁荣的金融生态环境11111</h1>
                                <h2>——正行笃实、运筹制胜、诚信善为</h2>

                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>

            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                <div class="uk-container uk-container-center uk-text-left">
                    <li data-uk-slideshow-item="0"><a href=""></a></li>
                    <li data-uk-slideshow-item="1"><a href=""></a></li>
                    <li data-uk-slideshow-item="2"><a href=""></a></li>
                </div>


            </ul>

        </div>


    </div><!--end banner-->

    <div class="info-bar">
        <div class="uk-container uk-container-center uk-text-left">
            <div class="uk-grid">
                <div class="uk-width-1-2 uk-padding-remove"><i class="uk-icon-volume-up uk-text-danger"></i> </div>
                <div class="uk-width-1-2 uk-padding-remove uk-text-right" style="display:none">加入用户<span class="uk-h3 uk-text-danger">106,593</span> 累计成交额 <span class="uk-h3 uk-text-danger">5,169,823,621</span></div>
            </div>
        </div>
    </div>


    <div class="uk-container uk-container-center uk-text-center uk-margin-large-top">
        <div class="uk-h1 title-line uk-margin-top">关于我们</div>
        <div class="about-text uk-margin-top">
            <p>深圳金砖华荣资产管理有限公司（中基协私募基金管理人编号：P1014425）
            </p>
            <p>成立于2015年1月，金砖华荣投资研究团队来自于银行、信托、证券、 国际投行公司，公司凭借投研团队的专业能力和资源优势，<br>对金融、房地产、智能科技等成长性行业
                和板块进行深入的研究。未来公司将精准把握大陆多层次资本市场、房地产市场，持续创造佳绩。
            </p>
            <p>金砖华荣于2016年10月正式荣任深圳商业联合会副会长单位，不仅凝聚了资质深厚
                的投顾团队和卓绝杰出的行业精英，并依靠灵敏前瞻的理财触觉、专业领先的投资策略、
                科学规范的风险防御能力，将投资焦点聚于金融、房地产、智能科技等成长性确定的行
                业和板块，致力于为个人、企业和机构提供优质的资产管理服务。
            </p>
        </div>
        <div class="uk-grid uk-margin-large-top uk-margin-large-bottom">
            <div class="uk-width-1-3">
                <img src="img/lights.png" width="48" height="48">
                <div class="uk-text-middle uk-display-inline-block uk-text-left"><div class="uk-h2">理念</div>
                    立足长远 价值投资</div>
            </div>
            <div class="uk-width-1-3">
                <img src="img/security.png" width="48" height="48">
                <div class="uk-text-middle uk-display-inline-block uk-text-left"><div class="uk-h2">风控</div>
                    严控风险 理性投资</div>
            </div>
            <div class="uk-width-1-3">
                <img src="img/trade.png" width="48" height="48">
                <div class="uk-text-middle uk-display-inline-block uk-text-left"><div class="uk-h2">投资</div>
                    持续创新 科学投资</div>
            </div>
        </div>

    </div><!--end about-->


    <div class="pr-bg uk-margin-large-top uk-clearfix">
        <div class="uk-h1 title-line uk-text-center uk-display-block" style="margin-top:70px;">产品中心</div>

        <div class="uk-container uk-container-center">

            <div class="uk-slidenav-position uk-margin pr-list uk-margin-large-top" data-uk-slider>
                <div class="uk-slider-container">
                    <ul class="uk-slider uk-grid uk-grid-width-1-3 uk-grid-width-xlarge-1-3">
                        <li>
                            <div class="home-pr uk-text-center">
                                <div class="pr-img"><img src="img/fund1.jpg"></div>
                                <div class="inner">
                                    <div class="uk-h3 uk-margin-small uk-text-left benh3" title="金砖金汇1号私募股权投资基金">金砖金汇1号私募股权投资基金<br>

                                        <div class="uk-badge uk-badge-notification uk-align-right uk-badge-warning">热销</div>
                                    </div>
                                   <div style="margin-top: 20px;"><span style="color: #dc3636;font-weight: 700;font-family: 'Arial Black',Arial,Gadget,sans-serif;height: 38px;font-size: 25px;">10%</span></div>

                                    <div class="uk-margin br3">门槛：<span class="info-num">100</span>万
                                        <span class="h-line"></span>期限：<span class="info-num">12/24</span>个月<br>
                                    </div>


                                    <div class="uk-margin br4"><span class="info-f">“</span>亮点：100%股权控制、100%产权控制、地铁口红本物业抵押、连带担保、预约受让、银行托管<span class="info-f">”</span></div>
                                    <div class="uk-margin br5">
                                        <a href="#" onClick="return reservation('金砖金汇1号私募股权投资基金',4)">我要预约 ></a>
                                        <a href="products-detail.php?id=234">了解详情  ></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="home-pr uk-text-center">
                                <div class="pr-img"><img src="img/fund2.jpg"></div>
                                <div class="inner">
                                    <div class="uk-h3 uk-margin-small uk-text-left benh3" title="金砖华荣卓越一号">金砖华荣卓越一号<br>

                                        <div class="uk-badge uk-badge-notification uk-align-right uk-badge-cls">售罄</div>
                                    </div>
                                    <div style="margin-top: 20px;"><span style="color: #dc3636;font-weight: 700;font-family: 'Arial Black',Arial,Gadget,sans-serif;height: 38px;font-size: 25px;">10%~11%</span></div>

                                    <div class="uk-margin br3">门槛：<span class="info-num">100</span>万
                                        <span class="h-line"></span>期限：<span class="info-num">18+3/24+3</span>个月<br>

                                    </div>


                                    <div class="uk-margin br4"><span class="info-f">“</span>亮点：产权持有、项目跟投、红本物业抵押、印鉴控制、连带责任担保、预约受让、资金监管<span class="info-f">”</span></div>
                                    <div class="uk-margin br5">
                                        <a href="javascript:volid(0);" class="uk-disabled">我要预约 ></a>
                                        <a href="javascript:volid(0);" class="uk-disabled">了解详情 ></a>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="home-pr uk-text-center">
                                <div class="pr-img"><img src="img/fund3.jpg"></div>
                                <div class="inner">
                                    <div class="uk-h3 uk-margin-small uk-text-left benh3" title="金汇2号-私募债权投资基金">金汇2号-私募债权投资基金<br>

                                        <div class="uk-badge uk-badge-notification uk-align-right uk-badge-cls">售罄</div>
                                    </div>
                                    <div style="margin-top: 20px;"><span style="color: #dc3636;font-weight: 700;font-family: 'Arial Black',Arial,Gadget,sans-serif;height: 38px;font-size: 25px;">12%</span></div>

                                    <div class="uk-margin br3">门槛：<span class="info-num">100</span>万
                                        <span class="h-line"></span>期限：<span class="info-num">12/24</span>个月<br>

                                    </div>


                                    <div class="uk-margin br4"><span class="info-f">“</span>亮点：1、一线城市，地铁口物业  2、横岗CBD物业，刚需性强  3、高楼层+高成熟度  4、基金+现楼认购  5、多重风控护航<span class="info-f">”</span></div>
                                    <div class="uk-margin br5">
                                        <a href="javascript:volid(0);" class="uk-disabled">我要预约 ></a>
                                        <a href="javascript:volid(0);" class="uk-disabled">了解详情 ></a>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>

                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
            </div>
        </div>

    </div><!--end pr-->


    <div class="yw-bg">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-margin-large-bottom">
                <div class="uk-width-1-4 uk-text-right yw-title">
                    BUSINESS AREAS<br>
                    业务领域
                </div>
                <div class="uk-width-3-4 yw-info">
                    金砖华荣是一家以基金发行与管理为主营业务的专业基金管理机构。<br>
                    金砖华荣投资研究团队来自于银行、信托、证券、国际投行公司，<br>
                    公司凭借投研团队的专业能力和资源优势，对金融、房地产、智能科技等成长性行业和板块进行深入的研究。
                </div>
            </div>


            <div class="yws uk-grid uk-margin-large-bottom">
                <div class="uk-width-1-2">
                    <div class="yw-kk">
                        <div class="pic"><img src="img/business1.jpg"></div>
                        <div class="title">股权投资</div>
                        <div class="info">金砖华荣致力于向具有高成长性的非上市企业进行股权投资，并提供相应的管理和其他增值服务，以期通过IPO或者其他方式退出，实现客户资金增值的资本运作。</div>
                    </div>
                </div>

                <div class="uk-width-1-2">
                    <div class="yw-kk">
                        <div class="pic"><img src="img/business2.jpg"></div>
                        <div class="title">房地产投资</div>
                        <div class="info">金砖华荣致力于深圳本地优质房地产投资，通过物业并购、城市更新、物业旧改等投资方式，对标的项目进行深入全面的评估研究，在科学分析的基础上进行投资决策，灵活把握市场机会。</div>
                    </div>
                </div>

                <div class="uk-width-1-2 uk-margin-large-top">
                    <div class="yw-kk">
                        <div class="pic"><img src="img/business3.jpg"></div>
                        <div class="title">并购基金</div>
                        <div class="info">金砖华荣为并购企业提供融资支持，如过桥贷款，以较低的风险获得固定或浮动收益，同时可通过将一部分债务融资转变成权益性资本，实现长期股权投资收益</div>
                    </div>
                </div>

                <div class="uk-width-1-2 uk-margin-large-top">
                    <div class="yw-kk">
                        <div class="pic"><img src="img/business4.jpg"></div>
                        <div class="title">证券投资</div>
                        <div class="info">金砖华荣拥有来自于银行、信托、证券、 国际投行公司等专业的投资团队，公司凭借投研团队的专业能力和资源优势，对金融、房地产、智能科技等成长性行业
                            和板块进行深入的研究。持续创造佳绩。</div>
                    </div>
                </div>

            </div>


        </div>
    </div><!--end yw-->



    <div class="team-bg">
        <div class="uk-container uk-container-center">

            <div class="inner">
                <div class="uk-h1 title-line uk-text-center uk-display-block">核心团队</div>

                <div class="uk-slidenav-position uk-margin team-list uk-margin-large-top" data-uk-slider>
                    <div class="uk-slider-container">
                        <ul class="uk-slider uk-grid uk-grid-width-1-3 uk-grid-width-xlarge-1-3">



                            <li>
                                <div class="team uk-text-center">
                                    <div class="team-img uk-border-circle"><a href="team.php"><img src="img/team1.jpg"></a></div>
                                    <div class="uk-margin">
                                        <div class="uk-h2 uk-margin-small"><a href="team.php">贺 孟杰</a></div>
                                        <div class="uk-h4 uk-margin-small">总裁 /董事办</div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="team uk-text-center">
                                    <div class="team-img uk-border-circle"><a href="team.php"><img src="img/team4.jpg"></a></div>
                                    <div class="uk-margin">
                                        <div class="uk-h2 uk-margin-small"><a href="team.php">阚 达</a></div>
                                        <div class="uk-h4 uk-margin-small">投资总监 /证券投资部</div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="team uk-text-center">
                                    <div class="team-img uk-border-circle"><a href="team.php"><img src="img/team7.jpg"></a></div>
                                    <div class="uk-margin">
                                        <div class="uk-h2 uk-margin-small"><a href="team.php">孙 东旭</a></div>
                                        <div class="uk-h4 uk-margin-small">产品经理 /产品研发部</div>
                                    </div>
                                </div>
                            </li>




                        </ul>
                    </div>

                    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
                </div>

            </div>

        </div>
    </div><!--end team-->






    <div class="news">
        <div class="uk-container uk-container-center inner">


            <div class="uk-grid uk-margin-top">







                <div class="uk-width-1-2 uk-margin-large-bottom">
                    <div class="title"><span class="uk-h2">市场资讯</span><a href="news.php?class_id=242" class="a-link">更多</a></div>

                    <div class="row" style="padding-top: 40px">
                        <div class="news-box clearfix">
                            <div class="news-box-img">
                                <a href="">
                                    <img src="img/news1.jpg" alt="">
                                </a>
                            </div>
                            <div class="news-content">
                                <a href="">
                                    <div class="title">
                                        衡盛生物科技有限公司项目发布会
                                    </div>
                                </a>
                                <div class="content">
                                    2016年12月17日，“衡盛生物科技有限公司项目发布会”在深圳福田中信证券大厦23楼召开。 此次发布会是...
                                </div>

                            </div>
                        </div>
                        <div class="news-box clearfix">
                            <div class="news-box-img">
                                <a href="">
                                    <img src="img/news2.png" alt="">
                                </a>
                            </div>
                            <div class="news-content">
                                <a href="">
                                    <div class="title">
                                        衡盛生物科技有限公司项目发布会
                                    </div>
                                </a>
                                <div class="content">
                                    2016年12月17日，“衡盛生物科技有限公司项目发布会”在深圳福田中信证券大厦23楼召开。 此次发布会是...
                                </div>

                            </div>
                        </div>
                        <div class="news-list">
                            <ul>
                                <li>
                                    <a href="">衡盛生物科技有限公司项目发布会</a>
                                    <div class="news-date">2017.6.28</div>
                                </li>
                                <li>
                                    <a href="">衡盛生物科技有限公司项目发布会</a>
                                    <div class="news-date">2017.6.28</div>
                                </li>
                                <li>
                                    <a href="">衡盛生物科技有限公司项目发布会</a>
                                    <div class="news-date">2017.6.28</div>
                                </li>
                                <li>
                                    <a href="">衡盛生物科技有限公司项目发布会</a>
                                    <div class="news-date">2017.6.28</div>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>






                <div class="uk-width-1-2 uk-margin-large-bottom">
                    <div class="title"><span class="uk-h2">活动新闻</span><a href="news.php?class_id=346" class="a-link">更多</a></div>

                    <div class="uk-grid uk-margin-large-top">

                    </div>
                </div>





            </div>


        </div>
    </div><!--end news-->

    <div class="foot">
        <div class="uk-container uk-container-center uk-padding-remove">
            <div class="uk-grid">
                <div class="uk-width-1-4">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold c-font-white">金砖
                            <span class="c-theme-font">华荣</span>
                        </h3>
                        <div class="c-line-left hide"></div>
                        <p class="c-text"> 深圳金砖华荣资产管理有限公司（中基协私募基金管理人编号：P1014425）成立于2015年1月...</p>
                    </div>
                    <ul class="c-links">
                        <li>
                            <a href="{{route('company')}}">金砖简介</a>
                        </li>
                        <li>
                            <a href="{{route('team')}}">精英团队</a>
                        </li>
                        <li>
                            <a href="#">产品与服务</a>
                        </li>
                        <li>
                            <a href="#">工作机会</a>
                        </li>
                    </ul>
                </div>
                <div class="uk-width-1-4">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold c-font-white">金砖动态</h3>
                        <div class="c-line-left hide"></div>
                    </div>
                    <div class="c-blog">
                        <div class="c-post">
                            <div class="c-post-img">
                                <img src="../img/81.jpg" alt="" class="img-responsive" />
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
                                <img src="../img/13.jpg" alt="" class="img-responsive" />
                            </div>
                            <div class="c-post-content">
                                <h4 class="c-post-title">
                                    <a href="#">产品路演发布会</a>
                                </h4>
                                <p class="c-text">3月12号在中信证券大厦召开产品路演发布会，这是一个股权类基金产品...</p>
                            </div>
                        </div>
                        <a href="#" class="">更多...</a>
                    </div>
                </div>
                <div class="uk-width-1-4">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold c-font-white">微信公众号</h3>
                        <div class="c-line-left hide"></div>
                    </div>
                    <img src="../img/weixin.jpg" alt="" width="120px" class="img-responsive" />
                    <p style="padding-top: 10px">扫描关注金砖华荣
                        <br/>获取我们最新动态</p>
                </div>
                <div class="uk-width-1-4">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold c-font-white">联系我们</h3>
                        <div class="c-line-left hide"></div>
                        <p></p>
                    </div>

                    <ul class="c-address">
                        <li>
                            <i class="uk-icon-map-marker uk-icon-small"></i>  深圳市前海深港合作区前湾一路1号A栋201室</li>
                        <li>
                            <i class="uk-icon-phone uk-icon-small"></i> 0755-82986278</li>
                        <li>
                            <i class="uk-icon-envelope uk-icon-small"></i> manager@chinajzhr.com</li>
                    </ul>

                </div>
            </div>
            <div class="">
                <p class="c-copyright c-font-grey">2016-2019 &copy; 金砖华荣
                    <span class="c-font-grey-3">All Rights Reserved.</span>
                </p>
            </div>
        </div>
    </div>








    <div id="win-detail" class="uk-modal">
        <div class="uk-modal-dialog uk-border-rounded">
            <button class="uk-modal-close uk-close" type="button"></button>
            <div class="uk-width-medium-1-1 zw">
                <h1 id="win-title"></h1>
                <div id="win-text">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.cookie.min.js"></script></div>
</body>
</html>

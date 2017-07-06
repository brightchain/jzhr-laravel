
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
            </ul>
            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>

            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                <div class="uk-container uk-container-center uk-text-left">
                    <li data-uk-slideshow-item="0"><a href=""></a></li>
                    <li data-uk-slideshow-item="1"><a href=""></a></li>
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
                    金砖华荣投资研究团队来自于银行、信托、证券、 国际投行公司<br>
                    团队成员平均拥有10 年以上的债权融资、股权投资、信贷风险审评、收购兼并等金融服务行业实战经验。
                </div>
            </div>


            <div class="yws uk-grid uk-margin-large-bottom">
                <div class="uk-width-1-2">
                    <div class="yw-kk">
                        <div class="pic"><img src="images/home/yw1.jpg"></div>
                        <div class="title">资产管理</div>
                        <div class="info">资产管理业务是中融天成市场和客户战略的“发动机”，公司在制度化规范管理之下，针对市场变化及客户特性，将触角扩展至所有金融资产服务的最前沿，为客户量身定制全天候资产配置服务和体验，实现财务自由。</div>
                    </div>
                </div>

                <div class="uk-width-1-2">
                    <div class="yw-kk">
                        <div class="pic"><img src="images/home/yw3.jpg"></div>
                        <div class="title">财富管理</div>
                        <div class="info">中融天成为高净值客户提供全面的财富保值、增值、资产传承、定制金融服务及个性化管家式服务。以精细化、专业化、系统化的服务模式和理念，帮助客户创造财富、管理财富、传承财富，为客户建立一种高贵的生活品质。</div>
                    </div>
                </div>

                <div class="uk-width-1-2 uk-margin-large-top">
                    <div class="yw-kk">
                        <div class="pic"><img src="images/home/yw2.jpg"></div>
                        <div class="title">房地产投资</div>
                        <div class="info">中融天成致力于发掘深圳本地优质物业投资机会，通过完善的交易方案，在提供充分的安全保障的前提下，为投资人获取优越的回报。我们以客户利益至上，矢志成为投资者以及房地产开发商的首选战略合作伙伴。</div>
                    </div>
                </div>

                <div class="uk-width-1-2 uk-margin-large-top">
                    <div class="yw-kk">
                        <div class="pic"><img src="images/home/yw4.jpg"></div>
                        <div class="title">置业租赁</div>
                        <div class="info">中融天成以精细化、主动型管控体系，立足深圳，牢牢把握房地产市场脉搏。通过抓住机遇，资源整合，围绕房地产的开发、买卖、租赁，打造出一条龙服务的产业链，立志朝一流、专业、领先的高端置业企业迈进。</div>
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
                                    <div class="team-img uk-border-circle"><a href="team.php"><img src="images/team/team03.png"></a></div>
                                    <div class="uk-margin">
                                        <div class="uk-h2 uk-margin-small"><a href="team.php">曾 嘉宝</a></div>
                                        <div class="uk-h4 uk-margin-small">董事/项目运营中心总经理</div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="team uk-text-center">
                                    <div class="team-img uk-border-circle"><a href="team.php"><img src="images/team/team01.png"></a></div>
                                    <div class="uk-margin">
                                        <div class="uk-h2 uk-margin-small"><a href="team.php">崔 政德</a></div>
                                        <div class="uk-h4 uk-margin-small">董事长</div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="team uk-text-center">
                                    <div class="team-img uk-border-circle"><a href="team.php"><img src="images/team/team02.png"></a></div>
                                    <div class="uk-margin">
                                        <div class="uk-h2 uk-margin-small"><a href="team.php">蒋 康</a></div>
                                        <div class="uk-h4 uk-margin-small">董事/首席合伙人</div>
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
                    <div class="title"><span class="uk-h2">市场资讯</span><a href="news.php?class_id=242">更多</a></div>

                    <div class="uk-grid uk-margin-large-top">

                    </div>
                </div>





                <div class="uk-width-1-2 uk-margin-large-bottom">
                    <div class="title"><span class="uk-h2">活动新闻</span><a href="news.php?class_id=346">更多</a></div>

                    <div class="uk-grid uk-margin-large-top">

                    </div>
                </div>





            </div>


        </div>
    </div><!--end news-->

    <div class="foot">
        <div class="uk-container uk-container-center uk-padding-remove">
            <div class="uk-display-inline-block">
                <a href="contact.php">联系我们</a>
                <a href="guidelines.php">投资指引</a>
                <a href="contact.php">投诉建议</a>
                <a href="disclaimer.php">免责声明</a>
                <br>
                版权所有 © 中融天成　|　Copyright 2016 szqhzttc.com ,All Rights Reserved</div>
            <div class="uk-display-inline-block uk-align-right uk-text-right">投资有风险，购买需谨慎<br>
                粤ICP备14057308号-1
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

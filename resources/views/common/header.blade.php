<meta name="keywords" content="{{$keyed['keywords']}},{{$title}}" />
<meta name="description" content="{{isset($description)?$description:$keyed['description']}}" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="renderer" content="webkit" />
<meta name="_token" content="{{ csrf_token() }}"/>
<link rel="stylesheet" href="/css/uikit/uikit.css" />
<script src="/js/jquery.min.js"></script>
<script src="/js/modernizr.js"></script>
<script src="/js/uikit/uikit.min.js"></script>

<script src="/js/uikit/components/slideshow.min.js"></script>
<script src="/js/uikit/components/slideshow-fx.min.js"></script>
<script src="/js/uikit/components/slider.min.js"></script>
<script src="/js/uikit/sticky.min.js"></script>


<link rel="stylesheet" href="/css/uikit/components/slideshow.min.css" />
<link rel="stylesheet" href="/css/uikit/components/slidenav.min.css" />
<link rel="stylesheet" href="/css/uikit/components/dotnav.min.css" />
<link rel="stylesheet" href="/css/uikit/components/slider.min.css" />
<link rel="stylesheet" href="/css/main.css" />
<link rel="stylesheet" href="/css/home.css" />
<script src="/js/main.js"></script>

</head>
<body>
<div class="wrap">

    <div class="top-bar">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-3-10"> </div>
                <div class="uk-width-7-10 uk-text-right">
                    <div id="top-member-status"></div>
                    <a href="#" class="mobile-code"><i class="uk-icon-wechat"></i>关注微信公众号<div class="weixin-code"></div></a>
                    <a href="#"><i class="uk-icon-phone-square"></i>0755-82986878</a>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-container uk-container-center uk-clearfix menu">
        <div class="uk-grid">
            <div class="uk-width-1-5 uk-padding-remove"><div class="logo"><a href="./"><img src="/img/logo-3.png" alt="金砖华荣官网官网" title="金砖华荣官网官网"></a></div></div>
            <div class="uk-width-4-5">
                <nav class="uk-navbar">

                    <div class="uk-navbar-flip">

                        <ul class="uk-navbar-nav">
                            <li><a href="/">首页</a></li>
                            <li class="uk-parent" data-uk-dropdown><a href="{{route('about')}}">关于金砖</a>
                                <div class="uk-dropdown uk-dropdown-navbar">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <li><a href="{{route('company')}}">公司简介</a></li>
                                        <li><a href="{{route('team')}}">专业团队</a></li>
                                        <li><a href="{{route('concept')}}">投资理念</a></li>
                                        <li><a href="#">企业文化</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="uk-parent" data-uk-dropdown><a href="{{route('case')}}">项目案例</a>
                                <div class="uk-dropdown uk-dropdown-navbar">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <li><a href="{{route('case')}}">项目案例</a></li>
                                        <li><a href="{{route('scope')}}">业务范围</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="uk-parent" data-uk-dropdown><a href="{{route('stock')}}">基金管理</a>
                                <div class="uk-dropdown uk-dropdown-navbar">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <li><a href="{{route('stock')}}">股权投资</a></li>
                                        <li><a href="{{route('real')}}">房地产投资</a></li>
                                        <li><a href="{{route('placement')}}">定向增发</a></li>
                                        <li><a href="{{route('merger')}}">并购（M&A）</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="uk-parent" data-uk-dropdown><a href="{{route('news')}}">新闻中心</a>
                                <div class="uk-dropdown uk-dropdown-navbar">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <li><a href="{{route('news')}}">金砖动态</a></li>
                                        <li><a href="{{route('trade')}}">行业资讯</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="uk-parent" data-uk-dropdown><a href="{{route('contact')}}">联系我们</a>
                                <div class="uk-dropdown uk-dropdown-navbar">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <li><a href="{{route('contact')}}">联系我们</a></li>
                                        <li><a href="{{route('jobs')}}">招贤纳士</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!--end menu-->

    <div id="my-id" class="uk-modal">
        <div class="uk-modal-dialog">

            <div class="inner">
                <h3>进站须知</h3>

            <p class="nobottommargin">                                                <p class="MsoNormal" style="text-align:left;text-indent:21pt;">
                <span style="font-family:宋体;font-size:16px;">如果您浏览或访问本网站（</span><span style="font-size:16px;">www.chinajzhr.com</span><span style="font-family:宋体;font-size:16px;">），即视为您已同意接受以下条款：</span><o:p></o:p>
            </p>
            <p class="MsoNormal" style="text-align:left;">
                <span style="font-size:16px;"> </span><span style="font-family:宋体;font-size:16px;">一、证券</span><span style="font-family:宋体;font-size:16px;">投资具有一定风险</span><span style="font-size:16px;">，请您确认</span><span style="font-family:宋体;font-size:16px;">具备相应</span><span style="font-size:16px;">的</span><span style="font-family:宋体;font-size:16px;">风险识别能力和风险承担能力</span><span style="font-size:16px;">，并</span><span style="font-family:宋体;font-size:16px;">确认您或您所代表的机构是一名</span><span style="font-size:16px;">“</span><span style="font-family:宋体;font-size:16px;">合格投资者</span><span style="font-size:16px;">”（</span><span style="font-family:Calibri;font-size:16px;">Accredited investor</span><span style="font-family:宋体;font-size:16px;">）</span><span style="font-family:宋体;font-size:16px;">。</span><span style="font-size:16px;">“</span><span style="font-family:宋体;font-size:16px;">合格投资者</span><span style="font-size:16px;">”</span><span style="font-family:宋体;font-size:16px;">指根据《私募投资基金监督管理暂行办法》等中国证券和投资法律法规所定义的</span><span style="font-size:16px;">“</span><span style="font-family:宋体;font-size:16px;">合格投资者</span><span style="font-size:16px;">”</span><span style="font-family:宋体;font-size:16px;">，或根据美国的证券和投资法规所定义的</span><span style="font-size:16px;">“</span><span style="font-family:宋体;font-size:16px;">合格买方</span><span style="font-size:16px;">”</span><span style="font-family:宋体;font-size:16px;">或</span><span style="font-size:16px;">“</span><span style="font-family:宋体;font-size:16px;">有资格投资者</span><span style="font-size:16px;">”</span><span style="font-family:宋体;font-size:16px;">，或根据香港《证券及期货条例》所定义的</span><span style="font-size:16px;">“</span><span style="font-family:宋体;font-size:16px;">专业投资者</span><span style="font-size:16px;">”</span><span style="font-family:宋体;font-size:16px;">，或其</span><span style="font-size:16px;">它</span><span style="font-family:宋体;font-size:16px;">任何国家和地区的证券和投资法规所规定的有资格投资于对冲基金或类似的集合理财计划的专业投资者。</span><o:p></o:p>
            </p>
            <p class="MsoNormal" style="text-align:left;">
                <span style="font-size:16px;"> </span><span style="font-family:宋体;font-size:16px;">二、</span><span style="font-family:宋体;font-size:16px;">本网站所载的各种信息和数据</span><span style="font-size:16px;">，</span><span style="font-family:宋体;font-size:16px;">包括但不限于投资、税务、会计或法律上的建议等仅供一般性参考，不构成</span><span style="font-size:16px;">对</span><span style="font-family:宋体;font-size:16px;">任何证券、基金</span><span style="font-size:16px;">及</span><span style="font-family:宋体;font-size:16px;">其它投资工具的建议，亦不构成对任何交易的正式确认。本公司投资产品的过往业绩并不预示其未来运作的实际效果，您在做出投资决策前应认真阅读相关产品合同，并自行承担投资风险。</span>
            </p>
            <p class="MsoNormal" style="text-align:left;">
                <span style="text-indent:21pt;font-size:16px;">三、</span><span style="text-indent:21pt;font-family:宋体;font-size:16px;">本网站所载信息和数据的来源皆被本公司认为可靠，且本公司尽力严谨处理本网站所载信息和数据，但本公司对其准确性、充分性、完整性、及时性及其使用的适当性等不作任何担保或保证。未经本公司许可，不得复制、复印、转载或发布本网站内的任何信息或数据。</span>
            </p>
            <p class="MsoNormal" style="text-align:left;">
                <span style="font-size:16px;"> </span><span style="font-family:宋体;font-size:16px;">四、</span><span style="font-family:宋体;font-size:16px;">进入、访问与使用本网站，以及本</span><span style="font-size:16px;">声明</span><span style="font-family:宋体;font-size:16px;">与条件</span><span style="font-size:16px;">皆</span><span style="font-family:宋体;font-size:16px;">受中华人民共和国法律管辖，并依照中华人民共和国法律解释。若因本网站产生的任何争议，将以本网站发布者所在地法院为管辖法院。</span>
            </p>                                    </p>
                <div class="wty"><label><input id="ichecked" type="checkbox" value="1" />&nbsp;记住选择</label></div>
                <div class="reg-buts uk-text-center" id="reg-buts"><button class="uk-button uk-button-danger uk-border-rounded"  onclick="CloseOpen()" type="button">同意</button> <button class="uk-button uk-button-danger uk-border-rounded" type="button" onclick="CloseWin();">离开</button></div>

            </div>
            <div class="inner2">



                            <h2 id="win-title"></h2>

                                <form id="reservation_frm">
                                    <input name="pr_id" id="pr_id" type="hidden" value="" />
                                    <div class="row uk-text-center">若预约成功，我们的理财规划师会在24小时内联系您。</div>

                                    <div class="row"><span>姓名：</span><input id="r_name" type="text" value="" maxlength="11" /></div>
                                    <div class="row"><span>手机号：</span><input id="rmobile" type="text" value="" maxlength="11" /></div>
                                    <div class="row"><span>金额(万)：</span><input id="money" type="text"  maxlength="12" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" /></div>

                                    <div class="row uk-text-center"><a href="#" id="rese_but" class="m-frmbut">提交预约</a></div>
                                </form>





            </div>
        </div>
    </div>